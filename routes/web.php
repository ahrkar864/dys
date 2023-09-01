<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;

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

Route::get('/players',[PlayerController::class, 'show'])->name('players');

Route::get('/players/details/{id}', [PlayerController::class, 'details'])->name('playersdetails');

Route::get('/admin/player/list', function () {
    return view('admin.player.lists');
})->name('admin_players_view');

Route::get('/admin/player/add', function () {
    return view('admin.player.add');
})->name('admin_players_add');

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin_profile');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('admin_login');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('players', PlayerController::class);
    Route::resource('matches', MatchController::class);
});

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_dashboard');


