<?php

namespace App\Http\Controllers;
use App\Models\Dog;
use App\Models\UserBreeder;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
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
            $dog->users_id =  UserBreeder::with(['dog'])->get();
            $dog->save();


            //Problema al insertar no recoge el id del usuario.
            $userBreed = UserBreeder::find($id);

            $dog->breeder()->associate($userBreed);

            $gallery = new Gallery;

            $gallery->photo = $request->input('photo');

            $dog->gallery()->save($gallery);

            $gallery->dog()->associate($dog);

            $gallery->save();

            return redirect()->route('breeder.home');
    }
}
