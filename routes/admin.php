<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PlaylistController;
use App\Http\Controllers\Admin\SongController;
use App\Http\Controllers\Admin\UserController;
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


Route::get('/', [AdminController::class, 'home'])->name('home');

Route::resource('users', UserController::class)->except(['show', 'destroy']);

Route::resource('genres', GenreController::class)->except(['show']);

Route::resource('artists', ArtistController::class)->except(['show']);

Route::resource('albums', AlbumController::class)->except(['show']);

Route::resource('songs', SongController::class)->except(['show']);
Route::post('songs/{song}/add-stanza', [SongController::class, 'addStanza'])->name('songs.add.stanza');
Route::post('songs/remove-stanza/{stanza}', [SongController::class, 'removeStanza'])->name('songs.remove.stanza');

Route::resource('playlists', PlaylistController::class)->except(['show']);
Route::post('playlists/{playlist}/add-song/{song}', [PlaylistController::class, 'addSong'])->name('playlists.add');
Route::post('playlists/{playlist}/remove-song/{song}', [PlaylistController::class, 'removeSong'])->name('playlists.remove');

Route::resource('orders', OrderController::class)->only(['index', 'show']);
