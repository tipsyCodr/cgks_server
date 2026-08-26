<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'सेटिंग्स (Settings)';

    protected static ?string $navigationLabel = 'श्रेणियाँ (Categories)';

    protected static ?int $navigationSort = 1;

    protected static array $typeLabels = [
        'news' => 'समाचार',
        'achievements' => 'उपलब्धि',
        'announcements' => 'घोषणा',
    ];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Name')->live(onBlur:true)->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug',Str::slug($state))) ,
                TextInput::make('slug')->label('Slug'),
                Select::make('type')->label('Type')->options(self::$typeLabels)->default('news'),
                Select::make('status')->label('Status')->options(['active'=>'Active','inactive'=>'Inactive'])->default('active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->searchable(),
                TextColumn::make('type')->label('Type')
                    ->badge()
                    ->formatStateUsing(fn (?string $state) => self::$typeLabels[$state] ?? $state)
                    ->color(fn (?string $state) => match ($state) {
                        'news' => 'info',
                        'achievements' => 'warning',
                        'announcements' => 'success',
                        default => 'gray',
                    }),
                TextColumn::make('slug')->label('Slug'),
                TextColumn::make('status')->label('Status')
                    ->badge()
                    ->formatStateUsing(fn (?string $state) => ucfirst((string) $state))
                    ->color(fn (?string $state) => $state === 'active' ? 'success' : 'gray'),
                TextColumn::make('created_at')->label('Created at')->date()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options(self::$typeLabels),
                Tables\Filters\SelectFilter::make('status')
                    ->options(['active' => 'Active', 'inactive' => 'Inactive']),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
