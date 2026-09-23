<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShortResource\Pages;
use App\Models\Short;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ShortResource extends Resource
{
    protected static ?string $model = Short::class;

    protected static ?string $navigationIcon = 'heroicon-o-play-circle';

    protected static ?string $navigationGroup = 'मीडिया (Media)';

    protected static ?string $navigationLabel = 'शॉर्ट्स (Shorts)';

    protected static ?string $modelLabel = 'Short';

    protected static ?string $pluralModelLabel = 'Shorts';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Short Details')
                    ->description('Add or edit a short video link.')
                    ->icon('heroicon-o-play-circle')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('शीर्षक (Title)')
                            ->placeholder('Enter a title for this short…')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('url')
                            ->label('लिंक (URL)')
                            ->required()
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://youtube.com/shorts/…')
                            ->helperText('YouTube या Instagram शॉर्ट का पूरा लिंक डालें।')
                            ->suffixIcon('heroicon-m-link')
                            ->columnSpanFull(),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Select::make('platform')
                                    ->label('मंच (Platform)')
                                    ->options([
                                        'youtube' => 'YouTube',
                                        'instagram' => 'Instagram',
                                    ])
                                    ->native(false)
                                    ->prefixIcon('heroicon-o-device-phone-mobile'),
                                Forms\Components\Toggle::make('is_active')
                                    ->label('सक्रिय (Active)')
                                    ->default(true)
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->contentGrid([
                'default' => 1,
                'xs' => 2,
                'sm' => 2,
                'md' => 3,
                'lg' => 4,
                'xl' => 4,
                '2xl' => 5,
            ])
            ->columns([
                Tables\Columns\Layout\Stack::make([
                    Tables\Columns\Layout\View::make('filament.shorts.card'),
                    // Hidden column to power the search box.
                    Tables\Columns\TextColumn::make('title')
                        ->searchable(['title', 'url'])
                        ->extraAttributes(['style' => 'display:none;']),
                ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('platform')
                    ->label('मंच (Platform)')
                    ->options([
                        'youtube' => 'YouTube',
                        'instagram' => 'Instagram',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('सक्रिय (Active)'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->iconButton()
                    ->icon('heroicon-m-pencil-square')
                    ->tooltip('Edit short'),
                Tables\Actions\Action::make('toggle_active')
                    ->iconButton()
                    ->icon(fn (Short $record) => $record->is_active ? 'heroicon-m-eye-slash' : 'heroicon-m-eye')
                    ->tooltip(fn (Short $record) => $record->is_active ? 'Hide short' : 'Show short')
                    ->color(fn (Short $record) => $record->is_active ? 'warning' : 'success')
                    ->requiresConfirmation()
                    ->modalHeading(fn (Short $record) => $record->is_active ? 'शॉर्ट छिपाएं?' : 'शॉर्ट दिखाएं?')
                    ->modalDescription(fn (Short $record) => $record->is_active
                        ? 'यह शॉर्ट ऐप में छिपा दिया जाएगा। (This short will be hidden from the app.)'
                        : 'यह शॉर्ट ऐप में दिखाया जाएगा। (This short will be shown in the app.)')
                    ->action(fn (Short $record) => $record->update(['is_active' => ! $record->is_active])),
                Tables\Actions\Action::make('open_url')
                    ->iconButton()
                    ->icon('heroicon-m-arrow-top-right-on-square')
                    ->tooltip('Open in browser')
                    ->color('gray')
                    ->url(fn (Short $record) => $record->url)
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->recordUrl(null) // Cards handle their own click
            ->paginated([12, 24, 48])
            ->defaultPaginationPageOption(24)
            ->emptyStateHeading('अभी तक कोई शॉर्ट नहीं')
            ->emptyStateDescription('ऊपर "New Short" बटन से पहला शॉर्ट जोड़ें।')
            ->emptyStateIcon('heroicon-o-play-circle');
    }

    /**
     * Build a YouTube thumbnail URL from a short's link.
     */
    public static function youtubeThumbnail(?string $url): ?string
    {
        if (! $url) {
            return null;
        }

        if (preg_match('~(?:youtube\.com/(?:watch\?v=|embed/|v/|shorts/)|youtu\.be/)([A-Za-z0-9_-]{11})~', $url, $matches)) {
            return "https://img.youtube.com/vi/{$matches[1]}/hqdefault.jpg";
        }

        return null;
    }

    /**
     * Neutral play-glyph placeholder for shorts without a derivable thumbnail.
     */
    public static function placeholderThumbnail(): string
    {
        $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="128" height="228">'
            . '<rect width="128" height="228" rx="12" fill="#1f2937"/>'
            . '<circle cx="64" cy="114" r="28" fill="none" stroke="#4b5563" stroke-width="2.5"/>'
            . '<path d="M56 100l22 14-22 14z" fill="#6b7280"/>'
            . '</svg>';

        return 'data:image/svg+xml;base64,' . base64_encode($svg);
    }

    public static function getRelations(): array
    {
        return [];
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
