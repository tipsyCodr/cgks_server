<?php

namespace App\Filament\Widgets;

use App\Models\Feedback;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestFeedback extends BaseWidget
{
    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('नवीनतम प्रतिक्रिया (Latest Feedback)')
            ->query(Feedback::query()->latest()->limit(5))
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('नाम (Name)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->label('मोबाइल (Mobile)')
                    ->searchable(),
                Tables\Columns\TextColumn::make('message')
                    ->label('संदेश (Message)')
                    ->limit(60)
                    ->tooltip(fn (Feedback $record) => $record->message),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('प्राप्त (Received)')
                    ->since()
                    ->dateTimeTooltip(),
            ])
            ->emptyStateHeading('अभी तक कोई प्रतिक्रिया नहीं (No feedback yet)')
            ->emptyStateIcon('heroicon-o-chat-bubble-left-right');
    }
}
