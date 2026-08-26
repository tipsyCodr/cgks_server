<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Filament\Resources\AchievementResource\RelationManagers;
use App\Models\Achievement;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationGroup = 'सामग्री (Content)';

    protected static ?string $navigationLabel = 'उपलब्धि (Achievements)';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('उपलब्धि विवरण (Achievement Details)')
                    ->schema([
                        Select::make('category_id')->label('Category')->options(
                            Category::where('type', 'achievements')->pluck('name', 'id')
                        ),
                        Forms\Components\DatePicker::make('published_date')
                            ->required()
                            ->default(now()),
                        Forms\Components\FileUpload::make('image_url')
                            ->image()
                            ->helperText('Recommended size: Max 5 MB (16:9 or 4:3 ratio)')
                            ->directory('achievements')
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')->label('Image')->square(),
                Tables\Columns\TextColumn::make('category.name')->label('श्रेणी (Category)')->badge()->sortable(),
                Tables\Columns\TextColumn::make('content')
                    ->html()
                    ->limit(50),
                Tables\Columns\TextColumn::make('published_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('published_date', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('श्रेणी (Category)')
                    ->relationship('category', 'name', fn (Builder $query) => $query->where('type', 'achievements'))
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
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}
