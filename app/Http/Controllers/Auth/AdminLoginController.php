<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class AdminLoginController extends Controller
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
    protected $redirectTo = 'admin.home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except('logout');

    }

    public function guard()
    {
     return Auth::guard('admin');
    }

    public function showLoginForm()
    {
        return view('auth.login_admin');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }

     public function login(Request $request)
     {
       //Validate the Form Data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        //Attempt to log the Admin In
        $email= $request->email;
        $password= $request->password;
        $remember= $request->remember;

          //If Successful redirect to intended location
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        //If Unsuccessful redirect back to login form with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}