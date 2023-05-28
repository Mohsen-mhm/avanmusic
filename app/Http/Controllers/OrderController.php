<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where([
            'user_id' => Auth::id(),
            'status' => Order::PAIL
        ])->paginate(10);
        return view('account.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('account.orders.show', compact('order'));
    }

    public function download($slug)
    {
        $song = Song::whereSlug($slug)->first();
        // Retrieve the music file path or URL from your database or storage
        $musicFilePath = storage_path("app/public/musics/$song->music");
        $musicFileName = $song->slug . '-' . $song->artist->slug . '.mp3';

        // Set the appropriate headers for the download response
        $headers = [
            'Content-Type' => 'audio/mpeg',
            'Content-Disposition' => "attachment; filename=$musicFileName",
        ];

        // Return the file for download
        return response()->download($musicFilePath, $musicFileName, $headers);
    }
}
