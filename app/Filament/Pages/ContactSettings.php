<?php

namespace App\Filament\Pages;

use App\Models\ContactDetails;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class ContactSettings extends Page implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'सेटिंग्स (Settings)';
    protected static ?string $navigationLabel = 'संपर्क सेटिंग्स (Contact Settings)';
    protected static ?int $navigationSort = 2;
    protected static string $view = 'filament.pages.contact-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $contact = ContactDetails::first();
        if (!$contact) {
            $contact = ContactDetails::create([
                'mobile_no' => '',
                'address' => '',
                'email' => '',
                'qr_code' => '',
            ]);
        }
        
        $this->form->fill($contact->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('mobile_no')->label('Mobile'),
                TextInput::make('address'),
                TextInput::make('email'),
                FileUpload::make('qr_code'),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $data = $this->form->getState();
        
        $contact = ContactDetails::first();
        if ($contact) {
            $contact->update($data);
        } else {
             ContactDetails::create($data);
        }

        $this->getSavedNotification()?->send();
    }
    
    protected function getSavedNotification(): ?Notification
    {
        $title = $this->getSavedNotificationTitle();

        if (blank($title)) {
            return null;
        }

        return Notification::make()
            ->success()
            ->title($title);
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return __('filament-panels::pages/edit-record.notifications.saved.title');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save')
                ->submit('save'),
        ];
    }

    public function getCachedFormActions(): array
    {
        return $this->getFormActions();
    }

    public function hasFullWidthFormActions(): bool
    {
        return false;
    }
}
