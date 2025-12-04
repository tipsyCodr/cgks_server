<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($type)
    {
        $categories = Category::where('type', $type)->get();
        return response()->json($categories);
    }
   public function getCategory($id)
   {
        $category = Category::findOrFail( $id)->first();
        return response()->json($category);
   }

}
