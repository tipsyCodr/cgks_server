<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Services\MailService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Filament\Notifications\Notification;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Generate a random password if not provided
        if (empty($data['password'])) {
            $password = Str::random(10);
            $data['password'] = Hash::make($password);
        } else {
            $password = $data['password'];
            $data['password'] = Hash::make($data['password']);
        }
        
        // Store the plain password for email notification
        $this->plainPassword = $password;
        
        return $data;
    }
    
    protected function afterCreate(): void
    {
        // Send email notification
        try {
            $mailService = new MailService();
            
            // Render the email template
            $emailBody = view('emails.new-user', [
                'user' => $this->record,
                'password' => $this->plainPassword ?? null,
            ])->render();
            
            // Send the email
            $mailService->send(
                $this->record->email,
                'Welcome to ' . config('app.name'),
                $emailBody
            );
            
            // Add a notification that the email was sent
            Notification::make()
                ->title('User created successfully')
                ->body('Welcome email has been sent to the user.')
                ->success()
                ->send();
        } catch (\Exception $e) {
            // Log the error but don't prevent the user from being created
            \Log::error('Failed to send welcome email: ' . $e->getMessage());
            
            Notification::make()
                ->title('User created successfully')
                ->body('But welcome email could not be sent: ' . $e->getMessage())
                ->warning()
                ->send();
        }
    }
}
