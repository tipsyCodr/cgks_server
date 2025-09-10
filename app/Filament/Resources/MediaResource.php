<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaResource\Pages;
use App\Filament\Resources\MediaResource\RelationManagers;
use App\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\Layout\View as TableView;
class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
{
    return $form->schema([
        Forms\Components\TextInput::make('title')->label('Media Title')->required(),

        Forms\Components\Select::make('type')
            ->options([
                'image' => 'Image',
                'video' => 'Video',
            ])
            ->required()
            ->live(),

        Forms\Components\FileUpload::make('file')
            ->label('Upload File')
            ->directory('media-gallery')
            ->required()
            ->acceptedFileTypes([
                'image/*', 'video/*'
            ])
            ->maxSize(10240), // 10MB
    ]);
}

    // public static function table(Tables\Table $table): Tables\Table
    // {
    //     return $table->columns([
    //         Tables\Columns\TextColumn::make('title')->limit(30)->searchable(),

    //         Tables\Columns\TextColumn::make('type')->badge(),

    //         Tables\Columns\ViewColumn::make('file')
    //             ->view('filament.columns.media-preview'),
    //     ])
    //     ->actions([
    //         Tables\Actions\EditAction::make(),
    //         Tables\Actions\DeleteAction::make(),
    //     ])
    //     ->bulkActions([
    //         Tables\Actions\DeleteBulkAction::make(),
    //     ]);
    // }
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->paginated(false)
            ->layout(TableView::make('filament.resources.media-resource.pages.components.gallery-grid'));
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
            // 'index' => Pages\ListMedia::route('/'),
            'index' => Pages\MediaGallery::route('/'), // 👈 use custom gallery
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
