<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'post_id' => 'required|integer',
            'table_name' => 'required|string',
        ]);

        $comments = Comment::where('post_id', $request->post_id)
            ->where('table_name', $request->table_name)
            ->with('user')
            ->latest()
            ->get();

        return response()->json($comments);
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|integer',
            'table_name' => 'required|string',
            'comment_text' => 'required|string',
        ]);

        $comment = Comment::create([
            'user_id' => $request->user()->id,
            'post_id' => $request->post_id,
            'table_name' => $request->table_name,
            'comment_text' => $request->comment_text,
        ]);

        return response()->json($comment->load('user'), 201);
    }
}
