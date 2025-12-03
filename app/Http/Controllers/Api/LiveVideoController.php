<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LiveVideo;
use Illuminate\Http\Request;

class LiveVideoController extends Controller
{
    public function index()
    {
        $liveVideo = LiveVideo::where('is_active', true)->latest()->first();

        if (!$liveVideo) {
            return response()->json(['message' => 'No active live video found'], 404);
        }

        return response()->json([
            'video_id' => $liveVideo->video_id,
            'data' => [
                'video_id' => $liveVideo->video_id,
                'title' => $liveVideo->title,
            ]
        ]);
    }
}
