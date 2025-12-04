<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newss = News::all();
        return response()->json($newss,200);
    }
   public function show(Request $request)
   {
       $id = $request->id;
       $news = News::find($id);
       if ($news) {
           return response()->json($news, 200);
       } else {
           return response()->json(['message' => 'Announcement not found'], 404);
       }
   }



    public function fetchByCategory(Request $request)
    {
        $categoryId = $request->category_id;
        $news = News::where('category_id', $categoryId)->get();
        return response()->json($news, 200);
    }
}
