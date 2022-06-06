<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ($request->get('type') == 'users_breeder') {
            if (Auth::guard('users_breeder')->attempt($credentials)) {
                 return redirect()->to('home');
            }
        } else {
            if (Auth::attempt($credentials)) {
                return redirect()->to('login');
            }
        }
        return redirect()->to(route('login'));
    }
}
