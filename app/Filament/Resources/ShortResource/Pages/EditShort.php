<?php

namespace App\Filament\Resources\ShortResource\Pages;

use App\Filament\Resources\ShortResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShort extends EditRecord
{
    protected static string $resource = ShortResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
