<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

/**
 * Class Controller User.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Apply middlware auth and user_normal.
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
     * @return view user culture.
     */
    public function userculture()
    {
        return view('user.user_culture');
    }

    /**
     * Function that access allow of config section
     * @return view for config user.
     */
    public function config()
    {
        return view('user.user_config');
    }

}
