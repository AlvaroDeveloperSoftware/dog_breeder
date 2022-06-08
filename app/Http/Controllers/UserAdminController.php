<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserAdminController extends Controller
{
 
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin.home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    public function index () 
    {
        return view('admin_home');
    }
}
