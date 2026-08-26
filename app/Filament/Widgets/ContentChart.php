<?php

namespace App\Filament\Widgets;

use App\Models\Achievement;
use App\Models\Announcement;
use App\Models\News;
use Filament\Widgets\ChartWidget;

class ContentChart extends ChartWidget
{
    protected static ?int $sort = 2;

    protected static ?string $heading = 'सामग्री प्रवृत्ति (Content — last 6 months)';

    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $labels = [];
        $news = [];
        $announcements = [];
        $achievements = [];

        foreach (range(5, 0) as $i) {
            $month = now()->subMonths($i);
            $labels[] = $month->format('M Y');

            $news[] = News::whereYear('created_at', $month->year)
                ->whereMonth('created_at', $month->month)->count();
            $announcements[] = Announcement::whereYear('created_at', $month->year)
                ->whereMonth('created_at', $month->month)->count();
            $achievements[] = Achievement::whereYear('created_at', $month->year)
                ->whereMonth('created_at', $month->month)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'समाचार (News)',
                    'data' => $news,
                    'backgroundColor' => 'rgba(59, 130, 246, 0.5)',
                    'borderColor' => 'rgb(59, 130, 246)',
                ],
                [
                    'label' => 'घोषणा (Announcements)',
                    'data' => $announcements,
                    'backgroundColor' => 'rgba(234, 179, 8, 0.5)',
                    'borderColor' => 'rgb(234, 179, 8)',
                ],
                [
                    'label' => 'उपलब्धि (Achievements)',
                    'data' => $achievements,
                    'backgroundColor' => 'rgba(34, 197, 94, 0.5)',
                    'borderColor' => 'rgb(34, 197, 94)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
