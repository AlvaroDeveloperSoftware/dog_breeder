<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Dog;


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

        /**
     * Function that search of name or breed
     * @return view for config user.
     */
    public function search(Request $request)
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
    
                return view('user.user_search', compact('query', 'filterName', 'filterBreed'));
            }
    }

}
