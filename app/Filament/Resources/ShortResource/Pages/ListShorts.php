<?php

namespace App\Filament\Resources\ShortResource\Pages;

use App\Filament\Resources\ShortResource;
use App\Models\Short;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListShorts extends ListRecords
{
    protected static string $resource = ShortResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('नया Short')
                ->icon('heroicon-m-plus'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('सभी (All)')
                ->icon('heroicon-m-squares-2x2')
                ->badge(Short::count()),

            'active' => Tab::make('सक्रिय (Active)')
                ->icon('heroicon-m-check-circle')
                ->badge(Short::where('is_active', true)->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', true)),

            'youtube' => Tab::make('YouTube')
                ->icon('heroicon-m-play')
                ->badge(Short::where('platform', 'youtube')->count())
                ->badgeColor('danger')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('platform', 'youtube')),

            'instagram' => Tab::make('Instagram')
                ->icon('heroicon-m-camera')
                ->badge(Short::where('platform', 'instagram')->count())
                ->badgeColor('warning')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('platform', 'instagram')),

            'hidden' => Tab::make('छिपे (Hidden)')
                ->icon('heroicon-m-eye-slash')
                ->badge(Short::where('is_active', false)->count())
                ->badgeColor('gray')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', false)),
        ];
    }
}
