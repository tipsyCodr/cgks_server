<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function index()
    {
        $shorts = \App\Models\Short::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return response()->json($shorts);
    }
}
