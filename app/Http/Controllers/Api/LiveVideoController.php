<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LiveVideo;
use Illuminate\Http\Request;

class LiveVideoController extends Controller
{
    public function index()
    {
        $liveVideos = LiveVideo::where('is_active', true)
            ->latest()
            ->get()
            ->map(function ($video) {
                return [
                    'video_id' => $video->video_id,
                    'title' => $video->title,
                    'created_at' => $video->created_at,
                ];
            });

        return response()->json([
            'data' => $liveVideos
        ]);
    }
}
