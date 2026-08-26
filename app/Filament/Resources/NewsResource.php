<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\Category;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'सामग्री (Content)';

    protected static ?string $navigationLabel = 'समाचार (News)';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('समाचार विवरण (News Details)')
                    ->schema([
                        TextInput::make('title')->label('Title')->required(),
                        Select::make('category_id')->label('Category')->options(
                            Category::where('type', 'news')->pluck('name', 'id')
                        ),
                        Forms\Components\DatePicker::make('published_date')
                            ->label('Published Date')
                            ->default(now())
                            ->required(),
                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image_url')
                            ->label('Image')
                            ->directory('news')
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
                    ->relationship('category', 'name', fn (Builder $query) => $query->where('type', 'news'))
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
