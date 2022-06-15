<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBreederController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('users')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('breeder.home');
    }

    /**
     * Function for show view of culture, with information on canine world.
     */
    public function culture()
    {
        return view('breeder.culture');
    }
}