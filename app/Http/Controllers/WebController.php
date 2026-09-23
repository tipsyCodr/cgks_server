<?php

namespace App\Http\Controllers;

use App\Models\ExpressionOfInterest;
use App\Models\Feedback;
use App\Models\Media;
use App\Models\Meeting;
use App\Models\News;
use App\Models\Announcement;
use App\Models\LiveVideo;
use App\Models\Gallery;
use App\Models\GalleryPhoto;
use ErrorException;
use Illuminate\Http\Request;
use App\Models\Settings;

class WebController extends Controller
{
    public function home(){

        $gallery = Media::orderBy('created_at', 'desc')->take(4)->get();
        $news = News::orderBy('published_date', 'desc')->take(6)->get();
        $liveVideo = LiveVideo::where('is_active', true)->latest()->first();
        $settings = [
            'mobile' => Settings::getSetting('mobile'),
            'email' => Settings::getSetting('email'),
            'location' => Settings::getSetting('location'),
        ];
        return view('welcome', compact('settings', 'gallery', 'news', 'liveVideo'));
    }
    public function gallery(){
        $albums = Gallery::withCount('photos')
            ->orderBy('id', 'desc')
            ->paginate(16);
        return view('photo-gallery', compact('albums'));
    }

    public function photoGalleryView($id){
        $album = Gallery::with('photos')->findOrFail($id);
        $photos = $album->photos()->paginate(24);
        return view('photo-gallery-view', compact('album', 'photos'));
    }

    public function videoGallery(){
        $videos = LiveVideo::where('is_active', true)
            ->orderBy('id', 'desc')
            ->paginate(12);
        return view('video-gallery', compact('videos'));
    }

    public function audioGallery(){
        return view('audio-gallery');
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function pressRelease(){
        $news = News::orderBy('published_date', 'desc')->paginate(10);
        return view('press-release', compact('news'));
    }

    public function pressReleaseView($id){
        $newsItem = News::findOrFail($id);
        return view('press-release-view', compact('newsItem'));
    }

    public function karyakram(){
        $karyakram = Announcement::orderBy('published_date', 'desc')->paginate(10);
        return view('karyakram', compact('karyakram'));
    }

    public function aandolan(){
        $andolans = News::whereHas('category', fn($q) => $q->where('slug', 'andolan'))
            ->orderBy('published_date', 'desc')
            ->paginate(10);
        return view('aandolan', compact('andolans'));
    }

    public function aandolanView($id){
        $andolan = News::findOrFail($id);
        return view('aandolan-view', compact('andolan'));
    }

    public function bhaakhaAuSanskrti(){
        $items = News::whereHas('category', fn($q) => $q->where('slug', 'bhaakha-au-sanskrti'))
            ->orderBy('published_date', 'desc')
            ->paginate(10);
        return view('bhaakha-au-sanskrti', compact('items'));
    }

    public function bhaakhaAuSanskrtiView($id){
        $item = News::findOrFail($id);
        return view('bhaakha-au-sanskrti-view', compact('item'));
    }

    public function purakha(){
        $purakha = News::whereHas('category', fn($q) => $q->where('slug', 'purakha'))
            ->orderBy('published_date', 'desc')
            ->paginate(10);
        return view('purakha', compact('purakha'));
    }

    public function purakhaView($id){
        $item = News::findOrFail($id);
        return view('purakha-view', compact('item'));
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
