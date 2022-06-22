<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\UserBreeder;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

/**
 * Class Controller for Register that Breeder.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class RegBreederController extends Controller
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
    protected $redirectTo = 'breeder.home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('users')->except('logout');
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
            'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
            'breed' => ['required', 'string', 'max:255'],
            'years_breed' => ['integer'],
            'photo' => ['required', 'string', 'max:255'],
            'affix' => ['required', 'string'],
            
        ]);
    }

    /**
     * Function that create users like breeders.
     * @return redirect route at breeder.home.
     */
    public function createUserBreed(Request $request)
    {

        //Create instance of UserBreeder
        $userBreeder = new UserBreeder;

        //Obtains data of form with $request.
        $userBreeder->name = $request->input('name');
        $userBreeder->email = $request->input('email');
        $userBreeder->surnames = $request->input('surnames');
        $userBreeder->breed = $request->input('breed');
        $userBreeder->years_breed = $request->input('years_breed');
        $userBreeder->photo = $request->input('photo');
        $userBreeder->phone = $request->input('phone');
        $userBreeder->affix = $request->input('affix');
        $userBreeder->password = Hash::make($request->input('password'));

        //Save user.
        $userBreeder->save();

        return redirect()->route('breeder.home');
    }

    /**
     * Function index for register breeder.
     * @return view for register like breeder.
     */
    public function index()
    {
        return view('breeder.register_breeder');
    }
}