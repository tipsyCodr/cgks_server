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
Route::get('/gallery',[WebController::class,'gallery'])->name('gallery');
Route::post('/feedback-coming', [WebController::class, 'feedbackStore'])->name('store.feedback');
Route::get('membership',[UserController::class,'form'])->name('membership');
Route::post('membership/register',[UserController::class, 'store'])->name('membership.register');

Route::get('/register', function () {
    // Redirect to Play Store or show a "Download App" page
    return redirect('https://play.google.com/store/apps/details?id=com.pathideamultiskill.cgks');
});
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
