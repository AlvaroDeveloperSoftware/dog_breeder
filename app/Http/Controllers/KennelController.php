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
        $this->middleware('auth:users')->except('logout');
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
            $dogs = new Dog;

            $dogs->name = $request->input('name');
            $dogs->date_of_birth = $request->input('date_of_birth');
            $dogs->sex = $request->input('sex');
            $dogs->breed = $request->input('breed');
            $dogs->height = $request->input('height');
            $dogs->weight = $request->input('weight');
            $dogs->owner = $request->input('owner');
            $dogs->health_tests = $request->input('health_tests');
            $dogs->user_breeder_id = Auth::user()->getId();
            
            $dogs->save();

            $gallery = new Gallery;

            $gallery->photo = $request->input('photo');

            $gallery->id_dog = $dogs->getId();



            $gallery->save();
            

            return redirect()->route('breeder.home');
    }

    public function modifyView()
    {
        return view('breeder.modify_dog');
    }

    public function modify(Request $request, $id)
    {
        $dog = new Dog;

        $dog->name = $request->name;
        $dog->date_of_birth = $request->date_of_birth;
        $dog->height = $request->height;
        $dog->weight = $request->weight;
        $dog->health_tests = $request->health_tests;
        $dog->owner = $request->owner;

        $idDog = $id;

        $dog = Dog::where('id', $idDog)->update(['name' => 
        $dog->name, 'date_of_birth' => $dog->date_of_birth,
        'height' => $dog->height, 'weight' => $dog->weight, 
        'health_tests' => $dog->health_tests, 'owner' =>
        $dog->owner]);

        return view('breeder.home');
    }


    public function search(Request $request)
    {
       $name = $request->get('name');

       $dogs = Dog::where('name', 'like', '%' .$name. '%');
       
        return view('breeder.search', compact('dogs'));

        }
}
