<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;

class NewsController extends Controller
{
    public function index()
    {
        $query = News::query();
        if (Schema::hasColumn('news', 'published_date')) {
            $query->orderByRaw('COALESCE(published_date, created_at) DESC');
        } else {
            $query->latest();
        }
        return response()->json($query->get(), 200);
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
        $query = News::where('category_id', $categoryId);
        if (Schema::hasColumn('news', 'published_date')) {
            $query->orderByRaw('COALESCE(published_date, created_at) DESC');
        } else {
            $query->latest();
        }
        return response()->json($query->get(), 200);
    }
}
