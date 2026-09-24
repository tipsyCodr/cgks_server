<?php

namespace App\Filament\Resources\AppBannerResource\Pages;

use App\Filament\Resources\AppBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAppBanner extends CreateRecord
{
    protected static string $resource = AppBannerResource::class;
}
