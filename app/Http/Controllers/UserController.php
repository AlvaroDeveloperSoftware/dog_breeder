<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:user_normal');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.user_home');
    }

      /**
     * Function for show view of culture, with information on canine world.
     */
    public function userculture()
    {
        return view('user.user_culture');
    }

    public function config()
    {
        return view('user.user_config');
    }

}
