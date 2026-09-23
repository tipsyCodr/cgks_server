<?php

namespace App\View\Components\Frontend;

use App\Models\Announcement;
use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $sideNews;
    public $sideAnnouncements;
    public $sideAndolans;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sideNews = News::whereHas('category', fn($q) => $q->where('slug', 'press-release'))
            ->orWhereDoesntHave('category')
            ->latest('published_date')
            ->take(6)
            ->get();

        $this->sideAnnouncements = Announcement::latest('published_date')
            ->take(5)
            ->get();

        $this->sideAndolans = News::whereHas('category', fn($q) => $q->where('slug', 'andolan'))
            ->latest('published_date')
            ->take(5)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.sidebar');
    }
}
