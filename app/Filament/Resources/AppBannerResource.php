<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppBannerResource\Pages;
use App\Filament\Resources\AppBannerResource\RelationManagers;
use App\Models\AppBanner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppBannerResource extends Resource
{
    protected static ?string $model = AppBanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'सामग्री (Content)';

    protected static ?string $navigationLabel = 'ऐप बैनर (App Banners)';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('बैनर विवरण (Banner Details)')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Title')
                            ->placeholder('e.g. Special Offer or Event')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('link')
                            ->label('Action Link (Optional)')
                            ->placeholder('https://example.com or internal route')
                            ->url()
                            ->maxLength(255),

                        Forms\Components\FileUpload::make('image')
                            ->label('Banner Image')
                            ->image()
                            ->directory('banners')
                            ->required()
                            ->maxSize(5120)
                            ->helperText('Notice: Image must be 16:9 aspect ratio (e.g. 1280x720, 1280x800 or 1920x1080). Recommended format: JPG, PNG, WEBP. Max size: 5MB.')
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first in the carousel.'),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Enable or disable this banner from the app carousel.'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Banner')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->default('—'),

                Tables\Columns\TextColumn::make('link')
                    ->label('Link')
                    ->limit(30)
                    ->url(fn ($record) => $record->link, true)
                    ->default('—'),

                Tables\Columns\TextColumn::make('order')
                    ->label('Order')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppBanners::route('/'),
            'create' => Pages\CreateAppBanner::route('/create'),
            'edit' => Pages\EditAppBanner::route('/{record}/edit'),
        ];
    }
}
