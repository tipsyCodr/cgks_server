<?php

namespace App\Filament\Resources\LiveVideoResource\Pages;

use App\Filament\Resources\LiveVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLiveVideos extends ListRecords
{
    protected static string $resource = LiveVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
