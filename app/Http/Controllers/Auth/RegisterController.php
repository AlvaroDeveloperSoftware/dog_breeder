<?php

namespace App\Http\Controllers\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'surnames' => ['string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'breed' => ['required', 'string', 'max:255'],
            'years_breed' => ['integer'],
            'photo' => ['required', 'string', 'max:255'],
            'affix' => ['required', 'string'],
        ]);
    }

    protected function create(Request $request)
    {
        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->surnames = $request->input('surnames');
        $user->breed = $request->input('breed');
        $user->years_breed = $request->input('years_breed');
        $user->photo = $request->input('photo');
        $user->phone = $request->input('phone');
        $user->affix = $request->input('affix');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect('breeder/home');

    }

    public function index()
    {
        return view('breeder/registerbreeder');
    }
}
