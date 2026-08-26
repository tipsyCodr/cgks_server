<?php

namespace App\Filament\Widgets;

use App\Models\Achievement;
use App\Models\Announcement;
use App\Models\Feedback;
use App\Models\LiveVideo;
use App\Models\Media;
use App\Models\News;
use App\Models\Referral;
use App\Models\Short;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        // New members per day for the last 7 days -> sparkline
        $memberTrend = [];
        foreach (range(6, 0) as $i) {
            $memberTrend[] = User::where('role', 'user')
                ->whereDate('created_at', now()->subDays($i)->toDateString())
                ->count();
        }

        $news = News::count();
        $announcements = Announcement::count();
        $achievements = Achievement::count();
        $contentTotal = $news + $announcements + $achievements;

        $shorts = Short::count();
        $liveVideos = LiveVideo::count();
        $media = Media::count();
        $mediaTotal = $shorts + $liveVideos + $media;

        $feedbackTotal = Feedback::count();
        $feedbackThisWeek = Feedback::where('created_at', '>=', now()->startOfWeek())->count();

        $referralsThisMonth = Referral::where('created_at', '>=', now()->startOfMonth())->count();

        return [
            Stat::make('सदस्य (Members)', User::where('role', 'user')->count())
                ->description('कुल खाते (all accounts): ' . User::count())
                ->descriptionIcon('heroicon-m-user-group')
                ->chart($memberTrend)
                ->color('success'),

            Stat::make('सामग्री (Content)', $contentTotal)
                ->description("समाचार {$news} · घोषणा {$announcements} · उपलब्धि {$achievements}")
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('info'),

            Stat::make('मीडिया (Media)', $mediaTotal)
                ->description("शॉर्ट्स {$shorts} · लाइव {$liveVideos} · गैलरी {$media}")
                ->descriptionIcon('heroicon-m-film')
                ->color('warning'),

            Stat::make('रेफ़रल (Referrals)', Referral::count())
                ->description("इस माह (this month): {$referralsThisMonth}")
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),

            Stat::make('प्रतिक्रिया (Feedback)', $feedbackTotal)
                ->description("इस सप्ताह (this week): {$feedbackThisWeek}")
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color($feedbackThisWeek > 0 ? 'danger' : 'gray'),
        ];
    }
}
