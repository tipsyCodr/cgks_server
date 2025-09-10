<?php

namespace App\Http\Controllers;

use App\Models\ExpressionOfInterest;
use App\Models\Feedback;
use App\Models\Media;
use App\Models\Meeting;
use ErrorException;
use Illuminate\Http\Request;
use App\Models\Settings;

class WebController extends Controller
{
    public function home(){

        $gallery = Media::orderBy('created_at', 'desc')->take(4)->get();
        $settings = [
            'mobile' => Settings::getSetting('mobile'),
            'email' => Settings::getSetting('email'),
            'location' => Settings::getSetting('location'),
        ];
        return view('welcome', compact( 'settings','gallery'));
    }
    public function gallery(){
        $gallery = Media::all();
        return view('gallery',compact('gallery'));
    }
    public function feedbackStore(Request $request){
        try{
            $validated = $request->validate([
                'name'=>'required',
                'mobile'=>'required',
                'email'=>'nullable',
                'message'=>'required',
            ]);
            $feedback = Feedback::create($validated);

            return redirect()->back()->with('success','Your Feedback is successfully submitted. We will respond you soon.');
        }
        catch(ErrorException $e){
            return redirect()->back()->with('error','Failed to submit message:'.$e->getMessage());
        }
    }

    // public function expressionOfInterest()
    // {
    //     return view('web.expression-of-interest');

    // }
    public function expressionOfInterestStore(Request $request)
    {
       try{ $validated = $request->validate([
            'form_type' => 'required',
            'chapter_name' => 'required',
            'region' => 'required',
            'invited_by' => 'required',
            'visit_date' => 'required',
            'referral_source' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'company_name' => 'required',
            'professional_classification' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'previous_member' => 'required',
            'experience_rating' => 'required',
            'product_service_feedback' => 'required',
            'agreement' => 'required',
        ]);
        $name = $validated['first_name'] . ' ' . $validated['last_name'];

        ExpressionOfInterest::create([
            'form_type' => $validated['form_type'],
            'full_name' => $name,
            'email' => $validated['email'],
            'mobile' => $validated['mobile'],
            'chapter_name' => $validated['chapter_name'],
            'region' => $validated['region'],
            'invited_by' => $validated['invited_by'],
            'visit_date' => $validated['visit_date'],
            'referral_source' => $validated['referral_source'],
            'experience_rating' => $validated['experience_rating'],
            'product_service_feedback' => $validated['product_service_feedback'],
            'company_name' => $validated['company_name'],
            'professional_classification' => $validated['professional_classification'],
            'previous_member' => $validated['previous_member'],
        ]);}
        catch(\Exception $e){
            return redirect()->back()->with('error', 'Expression of Interest submission failed '.$e->getMessage());
        }
        return redirect()->back()->with('success', 'Expression of Interest submitted successfully');
    }
}
