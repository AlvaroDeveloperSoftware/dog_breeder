<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreederController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:users')->except('logout');
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

     /**
     * Function for search the dogs of the system.
     */
    public function searchView()
    {
        return view('breeder.searchDog');
    }
}