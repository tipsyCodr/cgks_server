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

    protected static ?string $navigationGroup = 'मीडिया (Media)';

    protected static ?string $navigationLabel = 'लाइव वीडियो (Live Videos)';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('video_id')
                    ->required()
                    ->label('YouTube Link or Video ID')
                    ->maxLength(255)
                    ->helperText('Paste the full YouTube link — the 11-character video ID is extracted automatically.')
                    ->dehydrateStateUsing(function ($state) {
                        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $state, $matches)) {
                            return $matches[1];
                        }
                        return $state;
                    }),
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
                Tables\Columns\ImageColumn::make('video_id')
                    ->label('Preview')
                    ->getStateUsing(fn (LiveVideo $record) => "https://img.youtube.com/vi/{$record->video_id}/mqdefault.jpg")
                    ->height(60),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_id')
                    ->label('Video ID')
                    ->copyable()
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active'),
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
