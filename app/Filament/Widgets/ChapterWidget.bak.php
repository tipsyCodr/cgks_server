<?php

namespace App\Filament\Widgets;

use App\Models\Chapter;
use App\Models\OneToOne;
use App\Models\Referral;
use App\Models\ThankYou;
use App\Models\User;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\DatePicker;

class ChapterWidget extends BaseWidget
{

    protected int|string|array $columnSpan = 'full';
    protected static ?int $sort = 2;

    protected function getTableHeading(): string
    {
        return 'Chapters ';
    }

    // Store filter dates for use in column calculations
    protected $filterDates = [];

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Chapter::query()
            )
            ->filters([
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('from')
                            ->label('From')
                            ->placeholder('Select start date'),
                        DatePicker::make('until')
                            ->label('Until')
                            ->placeholder('Select end date'),
                    ])
                    ->query(function ($query, array $data) {
                        // Store filter dates for column calculations
                        $this->filterDates = $data;

                        return $query
                            ->when(
                                !empty($data['from']),
                                fn($query) => $query->where('created_at', '>=', \Carbon\Carbon::parse($data['from'])->startOfDay())
                            )
                            ->when(
                                !empty($data['until']),
                                fn($query) => $query->where('created_at', '<=', \Carbon\Carbon::parse($data['until'])->endOfDay())
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if (!empty($data['from'])) {
                            $indicators[] = 'From: ' . \Carbon\Carbon::parse($data['from'])->format('M d, Y');
                        }

                        if (!empty($data['until'])) {
                            $indicators[] = 'Until: ' . \Carbon\Carbon::parse($data['until'])->format('M d, Y');
                        }

                        return $indicators;
                    }),
            ])
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title')->label('Chapters')->searchable()->sortable(),
                TextColumn::make('total_amount')
                    ->getStateUsing(function (Chapter $record, $state, $column) {
                        $livewire = $column->getTable()->getLivewire();

                        $filters = $livewire->filters['created_at'] ?? [];

                        $from = !empty($filters['from']) ? \Carbon\Carbon::parse($filters['from'])->startOfDay() : null;
                        $until = !empty($filters['until']) ? \Carbon\Carbon::parse($filters['until'])->endOfDay() : null;

                        $userIds = User::where('chapter_id', $record->id)
                            ->where('active', 1)
                            ->pluck('id')
                            ->toArray();

                        $query = ThankYou::whereIn('from', $userIds);

                        if ($from) {
                            $query->where('created_at', '>=', $from);
                        }

                        if ($until) {
                            $query->where('created_at', '<=', $until);
                        }

                        return '₹ ' . number_format($query->sum('amount'), 2);
                    })
                    ->sortable(),

                TextColumn::make('tyfcb')->label('Total TYFCB')
                    ->getStateUsing(function (Chapter $record): int {
                        $userIds = User::where('chapter_id', $record->id)
                            ->where('active', 1)
                            ->pluck('id')
                            ->toArray();

                        if (empty($userIds)) {
                            return 0;
                        }

                        $query = ThankYou::whereIn('from', $userIds);

                        // Apply date filters if they exist
                        if (!empty($this->filterDates['from'])) {
                            $query->where('created_at', '>=', \Carbon\Carbon::parse($this->filterDates['from'])->startOfDay());
                        }
                        if (!empty($this->filterDates['until'])) {
                            $query->where('created_at', '<=', \Carbon\Carbon::parse($this->filterDates['until'])->endOfDay());
                        }

                        return $query->count();
                    })
                    ->sortable(),
                TextColumn::make('referrals')->label('Total Referrals')
                    ->getStateUsing(function (Chapter $record): int {
                        $userIds = User::where('chapter_id', $record->id)
                            ->where('active', 1)
                            ->pluck('id')
                            ->toArray();

                        if (empty($userIds)) {
                            return 0;
                        }

                        $query = Referral::whereIn('from', $userIds);

                        // Apply date filters if they exist
                        if (!empty($this->filterDates['from'])) {
                            $query->where('created_at', '>=', \Carbon\Carbon::parse($this->filterDates['from'])->startOfDay());
                        }
                        if (!empty($this->filterDates['until'])) {
                            $query->where('created_at', '<=', \Carbon\Carbon::parse($this->filterDates['until'])->endOfDay());
                        }

                        return $query->count();
                    })
                    ->sortable(),
                TextColumn::make('oto_requests')->label('Total One to One Req.')
                    ->getStateUsing(function (Chapter $record): int {
                        $userIds = User::where('chapter_id', $record->id)
                            ->where('active', 1)
                            ->pluck('id')
                            ->toArray();

                        if (empty($userIds)) {
                            return 0;
                        }

                        $query = OneToOne::whereIn('user_id', $userIds);

                        // Apply date filters if they exist
                        if (!empty($this->filterDates['from'])) {
                            $query->where('created_at', '>=', \Carbon\Carbon::parse($this->filterDates['from'])->startOfDay());
                        }
                        if (!empty($this->filterDates['until'])) {
                            $query->where('created_at', '<=', \Carbon\Carbon::parse($this->filterDates['until'])->endOfDay());
                        }

                        return $query->count();
                    })
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                // TextColumn::make('updated_at')->dateTime(),
            ]);
    }
}