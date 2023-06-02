<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['user' => auth()->user()]);
    }

    public function about()
    {
        return view('about');
    }
}
