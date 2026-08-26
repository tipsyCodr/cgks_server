<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Filament\Resources\AnnouncementResource\RelationManagers;
use App\Models\Announcement;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationGroup = 'सामग्री (Content)';

    protected static ?string $navigationLabel = 'घोषणा (Announcements)';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('घोषणा विवरण (Announcement Details)')
                    ->schema([
                        TextInput::make('title')->label('Title')->required(),
                        Select::make('category_id')->label('Category')->options(
                            Category::where('type', 'announcements')->pluck('name', 'id')
                        ),
                        Forms\Components\DatePicker::make('published_date')
                            ->label('Published Date')
                            ->default(now())
                            ->required(),
                        RichEditor::make('content')->label('Content')->required()->columnSpanFull(),
                        FileUpload::make('image_url')
                            ->label('Image')
                            ->directory('announcement')
                            ->acceptedFileTypes(['image/*'])
                            ->maxSize(5120)
                            ->helperText('Recommended size: Max 5 MB (16:9 or 4:3 ratio)')
                            ->image()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_url')->label('Image')->square(),
                TextColumn::make('title')->label('Title')->searchable(),
                TextColumn::make('category.name')->label('श्रेणी (Category)')->badge()->sortable(),
                TextColumn::make('published_date')->label('Published Date')->date()->sortable(),
                TextColumn::make('content')->label('Content')->html()->limit(50),
            ])
            ->defaultSort('published_date', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('श्रेणी (Category)')
                    ->relationship('category', 'name', fn (Builder $query) => $query->where('type', 'announcements'))
                    ->searchable()
                    ->preload(),
                Tables\Filters\Filter::make('published_date')
                    ->form([
                        Forms\Components\DatePicker::make('from')->label('From'),
                        Forms\Components\DatePicker::make('until')->label('Until'),
                    ])
                    ->query(fn (Builder $query, array $data) => $query
                        ->when($data['from'], fn (Builder $q, $date) => $q->whereDate('published_date', '>=', $date))
                        ->when($data['until'], fn (Builder $q, $date) => $q->whereDate('published_date', '<=', $date))),
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
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}
