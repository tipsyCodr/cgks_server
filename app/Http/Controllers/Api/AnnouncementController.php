<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;

class AnnouncementController extends Controller
{
    public function index()
    {
        $query = Announcement::query();
        if (Schema::hasColumn('announcements', 'published_date')) {
            $query->orderByRaw('COALESCE(published_date, created_at) DESC');
        } else {
            $query->latest();
        }
        return response()->json($query->get(), 200);
    }
   public function show(Request $request)
   {
       $id = $request->id;
       $announcement = Announcement::find($id);
       if ($announcement) {
           return response()->json($announcement, 200);
       } else {
           return response()->json(['message' => 'Announcement not found'], 404);
       }
   }


    public function fetchByCategory(Request $request)
    {
        $categoryId = $request->category_id;
        $query = Announcement::where('category_id', $categoryId);
        if (Schema::hasColumn('announcements', 'published_date')) {
            $query->orderByRaw('COALESCE(published_date, created_at) DESC');
        } else {
            $query->latest();
        }
        return response()->json($query->get(), 200);
    }
}
