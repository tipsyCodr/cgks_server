<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('published_date', 'desc')->get();
        return response()->json($achievements);
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $achievement = Achievement::find($id);

        if (!$achievement) {
            return response()->json(['message' => 'Achievement not found'], 404);
        }

        return response()->json($achievement);
    }
}
