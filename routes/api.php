<?php

use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\PadController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\AchievementController;
use App\Http\Controllers\Api\LiveVideoController;
use App\Http\Controllers\Api\ShortController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Api\UserController;
// use App\Http\Controllers\Api\NotificationController;
// use App\Http\Controllers\Api\VisitorController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public Routes

Route::post('login', [AuthController::class, 'login'])->name('login');


Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkApi']);
Route::post('/reset-password', [ResetPasswordController::class, 'resetApi']);


// for Getting User Details from Referral code
Route::post('user/referral/get', [UserController::class, 'getUserFromReferralCode'])->name('user.referral.get');
// Route::get('user/referral/get', [UserController::class, 'getUserFromReferralCode'])->name('user.referral.get');
Route::get('districts', [DistrictController::class, 'getAllDistricts'])->name('districts.get');
Route::post('user/register', [UserController::class, 'register'])->name('user.register');

Route::get('positions', [PadController::class, 'getPositions'])->name('positions.get');
Route::get('designations', [PadController::class, 'getDesignations'])->name('designations.get');

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {

    Route::post('users/all', [UserController::class, 'getAllUsers'])->name('user.all');
    Route::post('user/by-position', [UserController::class, 'usersByPosition'])->name('user.by.position');
    Route::post('user/by-designation', [UserController::class, 'usersByDesignation'])->name('user.by.designation');

    Route::post('users/update/password', [UserController::class, 'updatePassword'])->name('user.update.password');

    Route::post('announcements', [AnnouncementController::class, 'index'])->name('announcement');
    Route::post('announcement/show', [AnnouncementController::class, 'show'])->name('announcement.show');
    Route::post('news', [NewsController::class, 'index'])->name('news');
    Route::post('news/show', [NewsController::class, 'show'])->name('news.show');

    // Likes
    Route::post('likes/toggle', [LikeController::class, 'toggle'])->name('likes.toggle');
    Route::post('likes/status', [LikeController::class, 'status'])->name('likes.status');

    // Comments
    Route::post('comments', [CommentController::class, 'index'])->name('comments.index');
    Route::post('comments/store', [CommentController::class, 'store'])->name('comments.store');

    // Achievements
    Route::post('achievements', [AchievementController::class, 'index'])->name('achievements.index');
    Route::post('achievement/show', [AchievementController::class, 'show'])->name('achievements.show');

    // Live Video
    Route::get('live-video', [LiveVideoController::class, 'index'])->name('live-video');

    // Shorts
    Route::get('shorts', [ShortController::class, 'index'])->name('shorts.index');


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


    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('update-profile', [App\Http\Controllers\Api\UserController::class, 'updateProfile'])->name('update.profile');
    Route::post('update-profile-photo', [App\Http\Controllers\Api\UserController::class, 'updateProfilePic'])->name('update.profile');

    Route::post('get-profile', [App\Http\Controllers\Api\UserController::class, 'getProfile'])->name('get.profile');

    Route::post('members', [UserController::class, 'index'])->name('get.members');

    // Notification Routes
    // Route::prefix('notifications')->name('notifications.')->group(function () {
    //     Route::get('/', [NotificationController::class, 'index'])->name('index');
    //     Route::get('/unread-count', [NotificationController::class, 'getUnreadCount'])->name('unread-count');
    //     Route::post('/mark-as-read/{id}', [NotificationController::class, 'markAsRead'])->name('mark-as-read');
    //     Route::post('/mark-all-as-read', [NotificationController::class, 'markAllAsRead'])->name('mark-all-as-read');
    //     Route::post('/clear/{id}', [NotificationController::class, 'clearNotification'])->name('clear');
    // });
    // Route::post('visitor/store', [VisitorController::class, 'store'])->name('categories.index');
});

// Route::prefix('v1')->group(function () {
//     require __DIR__.'/api/v1.php';
// });
