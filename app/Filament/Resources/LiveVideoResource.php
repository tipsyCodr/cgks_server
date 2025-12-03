<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LiveVideoResource\Pages;
use App\Models\LiveVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LiveVideoResource extends Resource
{
    protected static ?string $model = LiveVideo::class;

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('video_id')
                    ->required()
                    ->label('YouTube Video ID')
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('video_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListLiveVideos::route('/'),
            'create' => Pages\CreateLiveVideo::route('/create'),
            'edit' => Pages\EditLiveVideo::route('/{record}/edit'),
        ];
    }
}
