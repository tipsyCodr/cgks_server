<?php

use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\ReferralController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\VisitorController;
use App\Http\Controllers\Auth\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public Routes
// Route::get('login',function(){
//     return "You are not Logged in!";
// })->name('logins');

Route::get('connect',function(){
    $data = ["message"=>"You are connected!"];
    return response()->json($data);
});
Route::post('login', [AuthController::class, 'login'])->name('login');


// for Getting User Details from Referral code
Route::post('user/referral/get', [UserController::class, 'getUserFromReferralCode'])->name('user.referral.get');
Route::get('user/referral/get', [UserController::class, 'getUserFromReferralCode'])->name('user.referral.get');
Route::get('districts', [DistrictController::class, 'getAllDistricts'])->name('districts.get');
Route::post('user/register', [UserController::class, 'register'])->name('user.register');

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {

    Route::post('users/all', [UserController::class, 'getAllUsers'])->name('user.all');
    Route::post('user/by-position', [UserController::class, 'usersByPosition'])->name('user.by.position');
    Route::post('user/by-designation', [UserController::class, 'usersByDesignation'])->name('user.by.designation');


    // Auth Routes
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    // User Routes
    Route::get('user', function (Request $request) {
        return $request->user();
    })->name('user');


    Route::get('home', [UserController::class, 'home'])->name('user.home');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/by-chapter', [UserController::class, 'usersByChapter'])->name('users.by.chapter');
    Route::get('worldwide-users', [UserController::class, 'globalUsers'])->name('users.global');
    // Route::get('requests', [UserController::class, 'getAllRequests'])->name('user.requests');
    Route::get('categories', [UserController::class, 'getCategories'])->name('categories.index');

    Route::post('visitor/store', [VisitorController::class, 'store'])->name('categories.index');

    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('update-profile', [App\Http\Controllers\Api\UserController::class, 'updateProfile'])->name('update.profile');
    Route::post('update-profile-photo', [App\Http\Controllers\Api\UserController::class, 'updateProfilePic'])->name('update.profile');

    Route::post('get-profile', [App\Http\Controllers\Api\UserController::class, 'getProfile'])->name('get.profile');

    // Notification Routes
    Route::prefix('notifications')->name('notifications.')->group(function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
        Route::get('/unread-count', [NotificationController::class, 'getUnreadCount'])->name('unread-count');
        Route::post('/mark-as-read/{id}', [NotificationController::class, 'markAsRead'])->name('mark-as-read');
        Route::post('/mark-all-as-read', [NotificationController::class, 'markAllAsRead'])->name('mark-all-as-read');
        Route::post('/clear/{id}', [NotificationController::class, 'clearNotification'])->name('clear');
    });

    Route::post('members', [UserController::class, 'index'])->name('get.members');
});

// Route::prefix('v1')->group(function () {
//     require __DIR__.'/api/v1.php';
// });
