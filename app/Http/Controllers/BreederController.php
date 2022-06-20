<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use App\Models\UserBreeder;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class BreederController
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class BreederController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Establish middleware for auth and users for recognize users.
        $this->middleware('auth:users')->except('logout');
    }

    /**
     * Update data of the user that is authenticated.
     */
    public function update(Request $request)
    {
        /**
         * With the class Auth and method 'user' are obtain
         * the information necesary of user logged.
         */
        $userDetails = Auth::user();  
        $user = User::find($userDetails ->id); 
        $user->name=$request->input('name');
        $user->email=$request->input('email');

        //Save the fields.
        $user->save();
    }

    /**
     * Show the application breeder home.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('breeder.home');
    }

    /**
     * Function for show view of culture, with information on canine world.
     * @return view of culture breeder.
     */
    public function culture()
    {
        return view('breeder.culture');
    }

    /**
     * Function for config of breeder view, with information of users.
     * @return view of config data breeder.
     */
    public function config()
    {
        return view('breeder.config');
    }

     /**
     * Function for search the dogs of the system.
     * @return view of search dog.
     */
    public function searchView(Request $request)
    {
        //If the petition is true, obtain query for Dog, the query contains the request of necesary fields.
        if($request){
            $filterName = trim($request->input('name'));
            $filterBreed = trim($request->input('breed'));

            $query = Dog::select('dog.name', 'dog.sex', 'dog.date_of_birth', 
            'dog.breed', 'dog.height', 'dog.weight', 'health_tests', 'owner',
            'gallery.photo')->where('name', 'LIKE', '%' . $filterName. '%')
             ->where('breed', 'LIKE', '%' . $filterBreed . '%')->orderBy('name', 'asc')
            ->join('gallery', 'dog.id', '=', 'gallery.id_dog')
            ->paginate(2);

            return view('breeder.search', compact('query', 'filterName', 'filterBreed'));

        }
    }

}