<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\AnnouncementController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\front\EventController as MemberEventController;
use App\Http\Controllers\front\IdeaController;
use App\Http\Controllers\front\MessageController;
use App\Http\Controllers\front\RatingController;

Route::get('/', [App\Http\Controllers\front\FrontController::class, 'index'])->name('home');

Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::resource('event', MemberEventController::class);
Route::post('/event/subscribe', [MemberEventController::class, 'subscribe'])->name('event.subscribe');
Route::post('/event/unsubscribe', [MemberEventController::class, 'unsubscribe'])->name('event.unsubscribe');

// Authentication routes
Route::view('/login', 'auth.login')->name('login');
Route::post('login', [LoginController::class, 'loginCheck'])->name('login.submit'); 
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Admin routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/propositions', [EventController::class, 'propositions'])->name('propositions');
    Route::post('/propositions', [EventController::class, 'updateStatus'])->name('events.updateStatus');

    Route::resource('events', EventController::class);
    Route::resource('members', MemberController::class);
    Route::resource('announcements', AnnouncementController::class);
    Route::resource('gallery', GalleryController::class);
});

// Member routes
Route::middleware('auth')->prefix('members')->group(function () {
    Route::get('/', [MemberEventController::class, 'index'])->name('members.dashboard');    
    Route::resource('ideas', IdeaController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('ratings', RatingController::class);
});

