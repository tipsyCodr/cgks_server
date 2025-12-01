<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggle(Request $request)
    {
        $request->validate([
            'post_id' => 'required|integer',
            'table_name' => 'required|string',
        ]);

        $user = $request->user();
        $like = Like::where('user_id', $user->id)
            ->where('post_id', $request->post_id)
            ->where('table_name', $request->table_name)
            ->first();

        if ($like) {
            $like->delete();
            return response()->json(['message' => 'Unliked', 'liked' => false]);
        } else {
            Like::create([
                'user_id' => $user->id,
                'post_id' => $request->post_id,
                'table_name' => $request->table_name,
            ]);
            return response()->json(['message' => 'Liked', 'liked' => true]);
        }
    }

    public function status(Request $request)
    {
        $request->validate([
            'post_id' => 'required|integer',
            'table_name' => 'required|string',
        ]);

        $count = Like::where('post_id', $request->post_id)
            ->where('table_name', $request->table_name)
            ->count();

        $liked = false;
        if ($request->user()) {
            $liked = Like::where('user_id', $request->user()->id)
                ->where('post_id', $request->post_id)
                ->where('table_name', $request->table_name)
                ->exists();
        }

        return response()->json(['count' => $count, 'liked' => $liked]);
    }
}
