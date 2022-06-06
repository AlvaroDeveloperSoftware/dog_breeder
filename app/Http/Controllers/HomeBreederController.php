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
        $this->middleware('user_breed');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('breeder_home');
    }
}
