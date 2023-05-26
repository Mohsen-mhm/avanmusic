<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlaylistController;
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

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('/', [ProfileController::class, 'account'])->name('account.home');

    Route::resource('playlists', PlaylistController::class);
    Route::post('playlists/{playlist}/add-song/{song}', [PlaylistController::class, 'addSong'])->name('playlists.add');
    Route::post('playlists/{playlist}/remove-song/{song}', [PlaylistController::class, 'removeSong'])->name('playlists.remove');

    Route::resource('setting', ProfileController::class)->only(['index', 'update']);
    Route::post('setting/change-password', [ProfileController::class, 'changePassword'])->name('setting.change.password');
});

Route::get('songs', [SongController::class, 'all'])->name('song.all');
Route::get('song/{slug}', [SongController::class, 'index'])->name('song');

Route::post('song/{slug}/like', [LikeController::class, 'like'])->name('song.like');
Route::post('song/{slug}/dislike', [LikeController::class, 'dislike'])->name('song.dislike');

Route::get('albums', [AlbumController::class, 'all'])->name('album.all');
Route::get('album/{slug}', [AlbumController::class, 'index'])->name('album');

Route::get('artists', [ArtistController::class, 'all'])->name('artist.all');
Route::get('artist/{slug}', [ArtistController::class, 'index'])->name('artist');

Route::prefix('/cart')->controller(CartController::class)->group(function () {
    Route::get('/', 'cart')->name('cart');
    Route::post('/add/{song}', 'addToCart')->name('addToCart');

    Route::delete('/delete/{cart}', 'deleteFromCart')->name('cart.destroy');
});

Route::middleware(['auth'])->prefix('payment')->group(function () {
    Route::post('/', [PaymentController::class, 'payment'])->name('cart.payment');
    Route::post('success', [PaymentController::class, 'paymentSuccess'])->name('cart.payment.success');
    Route::post('fail', [PaymentController::class, 'paymentFail'])->name('cart.payment.fail');
});

