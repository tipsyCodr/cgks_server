<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
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

}
