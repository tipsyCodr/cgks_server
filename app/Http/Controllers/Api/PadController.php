<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PadController extends Controller
{
   public function getPositions()
   {
       $positions = \DB::table('positions')->get();
       return response()->json($positions,200);
   }

   public function getDesignations()
   {
       $designations = \DB::table('designations')->get();
       return response()->json($designations,200);
   }
}
