<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use Illuminate\Http\Request;

class ContactSettingsController extends Controller
{
    public function index(){
        $contact_details = ContactDetails::first();
        return response()->json($contact_details);
    }
}
