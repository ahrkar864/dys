<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserRole;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/matches', function () {
    return view('frontend.matches');
})->name('matches');

Route::get('/blog', function () {
    return view('frontend.blogs');
})->name('blog');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/blog/details', function() {
    return view('frontend.blogs_details');
})->name('blogdetails');

Route::get('/about', function() {
    return view('frontend.about');
})->name('about');

Route::get('/players',[PlayerController::class, 'show'])->name('players');
Route::get('/matches',[MatchController::class, 'show'])->name('matches');
Route::get('/players/details/{id}', [PlayerController::class, 'details'])->name('playersdetails');

Route::get('/admin/player/list', function () {
    return view('admin.player.lists');
})->name('admin_players_view');

Route::get('/admin/player/add', function () {
    return view('admin.player.add');
})->name('admin_players_add');

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



