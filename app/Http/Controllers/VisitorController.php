<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Notifications\VisitorRegistered;
use Illuminate\Http\Request;
use App\Models\Visitor;
class VisitorController extends Controller
{
    public function index()
    {
        return view('visitor');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
        ]);

        $visitor = Visitor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'company' => $request->company,
            'position' => $request->position,
            'status' => 'registered', // Assuming a default status
        ]);
        $visitor->notify(new VisitorRegistered($visitor));

        return redirect()->back()->with('success', 'Visitor registered successfully.');
    }
}
