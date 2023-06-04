<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PodcastController;
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
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

Route::middleware(['auth'])->prefix('account')->group(function () {
    Route::get('/', [ProfileController::class, 'account'])->name('account.home');

    Route::resource('playlists', PlaylistController::class);
    Route::post('playlists/{playlist}/add-song/{song}', [PlaylistController::class, 'addSong'])->name('playlists.add');
    Route::post('playlists/{playlist}/remove-song/{song}', [PlaylistController::class, 'removeSong'])->name('playlists.remove');

    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('orders/song/{song}/download', [OrderController::class, 'download'])->name('orders.song.download');

    Route::resource('setting', ProfileController::class)->only(['index', 'update']);
    Route::post('setting/change-password', [ProfileController::class, 'changePassword'])->name('setting.change.password');
});

Route::get('songs', [SongController::class, 'all'])->name('song.all');
Route::get('song/{slug}', [SongController::class, 'index'])->name('song');

Route::get('podcasts', [PodcastController::class, 'all'])->name('podcast.all');
Route::get('podcast/{slug}', [PodcastController::class, 'index'])->name('podcast');

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
    Route::post('{order}/success', [PaymentController::class, 'paymentSuccess'])->name('cart.payment.success');
    Route::post('{order}/fail', [PaymentController::class, 'paymentFail'])->name('cart.payment.fail');
    Route::post('{order}/cancel', [PaymentController::class, 'paymentCancel'])->name('cart.payment.cancel');

    Route::get('callback/{paymentRes}', [PaymentController::class, 'callback'])->name('payment.callback');
});

