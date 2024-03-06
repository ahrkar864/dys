<?php

use App\Models\Matches;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserRole;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController:: class, 'home'])->name('home');
Route::get('/about', [FrontendController:: class, 'about'])->name('about');
Route::get('/matches', [FrontendController:: class, 'matches'])->name('matches');
Route::get('/contact', [FrontendController:: class, 'contact'])->name('contact');
Route::get('/players', [FrontendController:: class, 'players'])->name('players');
Route::get('/blogs', [FrontendController:: class, 'blogs'])->name('blogs');
Route::get('/players/details/{id}', [FrontendController::class, 'playerDetails'])->name('playersdetails');


// Route::get('/blog', function () {
//     $all_profile_club_information = Profile::first();
//     return view('frontend.blogs', compact('all_profile_club_information'));
// })->name('blog');

// Route::get('/blog/details', function() {
//     return view('frontend.blogs_details');
// })->name('blogdetails');

// Route::get('/admin/player/list', function () {
//     return view('admin.player.lists');
// })->name('admin_players_view');

// Route::get('/admin/player/add', function () {
//     return view('admin.player.add');
// })->name('admin_players_add');

// Route::get('/admin/profile', function () {
//     return view('admin.profile');
// })->name('admin_profile');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('players', PlayerController::class);
    Route::resource('matches', MatchController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('profile', ProfileController::class);
});

Auth::routes();
    
Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin_dashboard');
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user_dashboard');



