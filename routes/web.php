<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('profile', ProfileController::class)->only(['index', 'update'])->middleware(['auth']);
Route::post('profile/change-password', [ProfileController::class, 'changePassword'])->middleware(['auth'])->name('profile.change.password');

Route::get('songs', [SongController::class, 'all'])->name('song.all');
Route::get('song/{slug}', [SongController::class, 'index'])->name('song');

Route::get('albums', [AlbumController::class, 'all'])->name('album.all');
Route::get('album/{slug}', [AlbumController::class, 'index'])->name('album');

Route::get('artists', [ArtistController::class, 'all'])->name('artist.all');
Route::get('artist/{slug}', [ArtistController::class, 'index'])->name('artist');
