<?php

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WebController;
use App\Models\Media;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/about-us', [WebController::class, 'aboutUs'])->name('about-us');
Route::get('/press-release', [WebController::class, 'pressRelease'])->name('press-release');
Route::get('/press-release/{id}', [WebController::class, 'pressReleaseView'])->name('press-release.view');
Route::get('/news', [WebController::class, 'pressRelease'])->name('news');
Route::get('/news/{id}', [WebController::class, 'pressReleaseView'])->name('news.view');
Route::get('/karyakram', [WebController::class, 'karyakram'])->name('karyakram');
Route::get('/aandolan', [WebController::class, 'aandolan'])->name('aandolan');
Route::get('/aandolan/{id}', [WebController::class, 'aandolanView'])->name('aandolan.view');
Route::get('/bhaakha-au-sanskrti', [WebController::class, 'bhaakhaAuSanskrti'])->name('bhaakha-au-sanskrti');
Route::get('/bhaakha-au-sanskrti/{id}', [WebController::class, 'bhaakhaAuSanskrtiView'])->name('bhaakha-au-sanskrti.view');
Route::get('/chhattisgarh-sanskriti', [WebController::class, 'bhaakhaAuSanskrti'])->name('chhattisgarh-sanskriti');
Route::get('/chhattisgarh-sanskriti/{id}', [WebController::class, 'bhaakhaAuSanskrtiView'])->name('chhattisgarh-sanskriti.view');
Route::get('/purakha', [WebController::class, 'purakha'])->name('purakha');
Route::get('/purakha/{id}', [WebController::class, 'purakhaView'])->name('purakha.view');
Route::get('/gallery', [WebController::class, 'gallery'])->name('gallery');
Route::get('/photo-gallery', [WebController::class, 'gallery'])->name('photo-gallery');
Route::get('/photo-gallery/{id}', [WebController::class, 'photoGalleryView'])->name('photo-gallery.view');
Route::get('/video-gallery', [WebController::class, 'videoGallery'])->name('video-gallery');
Route::get('/audio-gallery', [WebController::class, 'audioGallery'])->name('audio-gallery');
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contact-us');
Route::get('/sampark', [WebController::class, 'contactUs'])->name('sampark');
Route::post('/feedback-coming', [WebController::class, 'feedbackStore'])->name('store.feedback');
Route::post('/contact-us', [WebController::class, 'feedbackStore'])->name('contact.store');
Route::get('membership',[UserController::class,'form'])->name('membership');
Route::get('online-membership',[UserController::class,'form'])->name('online-membership');
Route::get('sadasyata',[UserController::class,'form'])->name('sadasyata');
Route::get('sadasya',[UserController::class,'form'])->name('sadasya');
Route::get('membership-old', function () {
    return view('membership-old');
})->name('membership.old');
Route::get('old-membership', function () {
    return view('membership-old');
});
Route::post('membership/register',[UserController::class, 'store'])->name('membership.register');

Route::get('/register/{ref?}', [UserController::class, 'appRegisterForm'])->name('register');
Route::get('/app-register', [UserController::class, 'appRegisterForm'])->name('app.register');
Route::post('/register', [UserController::class, 'appRegisterStore'])->name('register.store');
Route::get('visitor',[VisitorController::class,'index'])->name('visitor');
Route::post('visitor/register',[VisitorController::class, 'store'])->name('visitor.register');

Route::get('privacy', function (){
    return view('privacy');
})->name('privacy');
Route::get('csae', function (){
    return view('csae');
})->name('csae');

Route::get('app-info', function (){
    return view('app-info');
})->name('app.info');

// Password Reset Routes
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');

Route::get('reset-password-success', [ResetPasswordController::class, 'showResetSuccessForm'])
    ->name('password.reset.success');
// Route::get('expression-of-interest', [WebController::class,'expressionOfInterest'])->name('expression-of-interest');
// Route::post('expression-of-interest', [WebController::class,'expressionOfInterestStore'])->name('expression-of-interest.store');

Route::delete('/media/{media}', function (Media $media) {
    $media->delete();
    return redirect()->back()->with('success', 'Deleted!');
})->name('custom.media.delete');
