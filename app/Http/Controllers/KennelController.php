<?php

namespace App\Http\Controllers;
use App\Models\Dog;
use App\Models\UserBreeder;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class KennelController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showFarm()
    {
        return view('breeder.kennel');
    }

    public function formDog()
    {
        return view('breeder.register_dog');
    }

    public function registerDog(Request $request)
    {
            $dog = new Dog;
    
            $dog->name = $request->input('name');
            $dog->date_of_birth = $request->input('date_of_birth');
            $dog->sex = $request->input('sex');
            $dog->breed = $request->input('date_of_birth');
            $dog->height = $request->input('height');
            $dog->weight = $request->input('weight');
            $dog->health_tests = $request->input('health_tests');

            $dog->save();

            
           

            $gallery = new Gallery;

            $gallery->photo = $request->input('photo');


            //Attach para relacionar el criador con el ejemplar.
            
            $idDog = $dog->id;

            $breeder = new UserBreeder;
            $userBreed = UserBreeder::find($breeder->id);
            $userBreed->dog()->attach($idDog);


            $dog->gallery()->attach($gallery);

            $gallery->dog()->attach($dog);

            $dog->breeder()->attach($userBreed);

             
            $gallery->save();
            return redirect()->route('breeder.home');
    }
}
