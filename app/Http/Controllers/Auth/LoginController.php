<?php
namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Session;

/**
 * Class Login Controller.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */

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
        $this->middleware('user_normal:users')->except('logout');
    }

    /**
     * Public function that allow users (normal and users breeder) 
     * close session.
     */
    public function logout(Request $request)
    {
        Auth::guard('user_normal')->logout();
        Auth::guard('users')->logout();

    return $this->loggedOut($request) ?: redirect('/login');
    }

    /**
     * Function login that verified and validate the credentials of 
     * users, the credentials email and password depending of guard
     * auth, if the guard is 'user_normal', redirect to route of user_normal
     * else if the route redirect was breeder.home.
     */
    public function login(Request $request)
    {
    // Validate the form data
    $validator = $this->validate($request, [
    'email'   => 'required|email',
    'password' => 'required|string'
        ]);

        // Attempt to log the customer in
        if (Auth::guard('user_normal')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('user.home'));
        } //attempt to log the seller in
        if (Auth::guard('users')->attempt(['email'  => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('breeder.home'));
        }

    // if Auth::attempt fails (wrong credentials) create a new message bag instance.
    $errors = new MessageBag(['password' => ['Email o contraseña incorrectos']]);
    // redirect back to the login page, using ->withErrors($errors) you send the error created above
    return redirect()->back()->withErrors($errors)->withInput($request->only('email', 'password'));
    }

}
