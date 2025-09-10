<?php

namespace App\Filament\Resources\MediaResource\Pages;

use App\Filament\Resources\MediaResource;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Storage;

class MediaGallery extends Page
{
    protected static string $resource = MediaResource::class;

    protected static string $view = 'filament.resources.media-resource.pages.gallery';

    public function getRecords()
    {
        return MediaResource::getEloquentQuery()->get();
    }
}

