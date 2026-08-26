<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShortResource\Pages;
use App\Filament\Resources\ShortResource\RelationManagers;
use App\Models\Short;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShortResource extends Resource
{
    protected static ?string $model = Short::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static ?string $navigationGroup = 'मीडिया (Media)';

    protected static ?string $navigationLabel = 'शॉर्ट्स (Shorts)';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->url()
                    ->maxLength(255)
                    ->helperText('Full link to the YouTube / Instagram short.'),
                Forms\Components\Select::make('platform')
                    ->options([
                        'youtube' => 'YouTube',
                        'instagram' => 'Instagram',
                    ]),
                Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->label('Link')
                    ->url(fn (Short $record) => $record->url)
                    ->openUrlInNewTab()
                    ->limit(40)
                    ->color('primary')
                    ->searchable(),
                Tables\Columns\TextColumn::make('platform')
                    ->badge()
                    ->formatStateUsing(fn (?string $state) => $state ? ucfirst($state) : '—')
                    ->color(fn (?string $state) => match ($state) {
                        'youtube' => 'danger',
                        'instagram' => 'info',
                        default => 'gray',
                    })
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
                Tables\Filters\SelectFilter::make('platform')
                    ->options([
                        'youtube' => 'YouTube',
                        'instagram' => 'Instagram',
                    ]),
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
            'index' => Pages\ListShorts::route('/'),
            'create' => Pages\CreateShort::route('/create'),
            'edit' => Pages\EditShort::route('/{record}/edit'),
        ];
    }
}
