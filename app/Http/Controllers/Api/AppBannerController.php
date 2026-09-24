<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AppBanner;
use Illuminate\Http\JsonResponse;

class AppBannerController extends Controller
{
    /**
     * Get active banners ordered by priority.
     */
    public function index(): JsonResponse
    {
        $banners = AppBanner::where('is_active', true)
            ->orderBy('order', 'asc')
            ->latest('id')
            ->get();

        return response()->json($banners, 200);
    }
}
