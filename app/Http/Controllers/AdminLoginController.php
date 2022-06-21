<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;


class AdminLoginController extends Controller
{

    use AuthenticatesUsers;


    protected $redirectTo = RouteServiceProvider::HOMEADMIN;

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except('logout');
    }

    /**
     * Display admin login view
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
       return view('admin.admin_login');
    }

    /**
     * Handle an incoming admin authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the form data
        $validator = $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
    
        if (Auth::guard('admin')->attempt(['email'  => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.home'));
        }
    
        // if Auth::attempt fails (wrong credentials) create a new message bag instance.
        $errors = new MessageBag(['password' => ['Email o contraseña incorrectos']]);
        // redirect back to the login page, using ->withErrors($errors) you send the error created above
        return redirect()->back()->withErrors($errors)->withInput($request->only('email', 'password'));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        
        return redirect('admin/login');
    }
}