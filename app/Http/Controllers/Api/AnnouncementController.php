<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::orderByRaw('COALESCE(published_date, created_at) DESC')->get();
        return response()->json($announcements,200);
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
        $announcements = Announcement::where('category_id', $categoryId)
            ->orderByRaw('COALESCE(published_date, created_at) DESC')
            ->get();
        return response()->json($announcements, 200);
    }
}
