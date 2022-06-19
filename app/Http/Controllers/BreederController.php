<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use App\Models\UserBreeder;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * Update data of the user that is authenticated.
     */
    public function update(Request $request)
    {
        $userDetails = Auth::user();  // To get the logged-in user details
        $user = User::find($userDetails ->id);  // Find the user using model and hold its reference
        $user->name=$request->input('name');
        $user->email=$request->input('email');

        $user->save();  // Update the data
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
    public function searchView(Request $request)
    {
        $dogs = Dog::all();

        if($request){
            $filtro = trim($request->get('name', 'breed'));
            $query = Dog::select('dog.name', 'dog.sex', 'dog.date_of_birth', 
            'dog.breed', 'dog.height', 'dog.weight', 'health_tests', 'owner',
            'gallery.photo')->where('name', 'LIKE', '%' . $filtro. '%')
             ->orWhere('breed', 'LIKE', '%' .$filtro . '%')->orderBy('name', 'asc')
            ->join('gallery', 'dog.id', '=', 'gallery.id_dog')
            ->paginate(2);

            return view('breeder.search', compact('query'));

        }
    }

}