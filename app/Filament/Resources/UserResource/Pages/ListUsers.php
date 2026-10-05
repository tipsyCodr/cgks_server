<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('export_csv')
                ->label('Export Members (CSV)')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('success')
                ->visible(fn () => Auth::user()?->role === 'admin')
                ->action(function () {
                    return response()->streamDownload(function () {
                        $handle = fopen('php://output', 'w');

                        // UTF-8 BOM for proper Hindi font support in Excel
                        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));

                        // CSV Headers
                        fputcsv($handle, [
                            'Member ID',
                            'Name',
                            'English Name',
                            'Mobile',
                            'WhatsApp',
                            'Email',
                            'Gender',
                            'DOB',
                            'District',
                            'City',
                            'Current Address',
                            'Permanent Address',
                            'Designation',
                            'Position',
                            'Occupation',
                            'Role',
                            'Status',
                            'Registered At',
                        ]);

                        User::orderBy('id')->chunk(500, function ($users) use ($handle) {
                            foreach ($users as $user) {
                                fputcsv($handle, [
                                    $user->referral_code ?? '',
                                    $user->name ?? '',
                                    $user->name2 ?? '',
                                    $user->mobile ?? '',
                                    $user->whatsapp ?? '',
                                    $user->email ?? '',
                                    $user->gender ?? '',
                                    $user->dob ?? '',
                                    $user->district ?? '',
                                    $user->city ?? '',
                                    $user->current_address ?? '',
                                    $user->address ?? '',
                                    $user->designation ?? '',
                                    $user->position ?? '',
                                    $user->occupation ?? '',
                                    $user->role ?? '',
                                    $user->active ? 'Active' : 'Inactive',
                                    $user->created_at?->format('Y-m-d H:i:s') ?? '',
                                ]);
                            }
                        });

                        fclose($handle);
                    }, 'cgks_members_' . date('Y-m-d') . '.csv', [
                        'Content-Type' => 'text/csv; charset=UTF-8',
                    ]);
                }),
            Actions\CreateAction::make(),
        ];
    }
}
