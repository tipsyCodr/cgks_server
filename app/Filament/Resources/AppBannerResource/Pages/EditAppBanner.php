<?php

namespace App\Filament\Resources\AppBannerResource\Pages;

use App\Filament\Resources\AppBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppBanner extends EditRecord
{
    protected static string $resource = AppBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
