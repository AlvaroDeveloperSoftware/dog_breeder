<?php

namespace App\Http\Controllers;
use App\Models\Dog;
use App\Models\UserBreeder;
use App\Models\User;
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

            $dogs->user_normal()->attach(1);

            return redirect()->route('breeder.home');
    }

    public function modifyView()
    {
        return view('breeder.modify_dog');
    }

    public function edit(Dog $dog){

        return view('breeder.dog_edit', compact('dog'));
    }

        public function destroy($dog)
    {
        $dog = Dog::find($dog);
        
        $dog->delete();
        return view('breeder.modify_dog', compact('dog'));

    }

    public function update(Request $request, $id){
        $dog = Dog::findOrFail($id);
        $dog->name = $request->get('name');
        $dog->date_of_birth = $request->get('date_of_birth');
        $dog->sex = $request->get('sex');
        $dog->breed = $request->get('breed');
        $dog->height = $request->get('height');
        $dog->weight = $request->get('weight');
        $dog->owner = $request->get('owner');
        $dog->health_tests = $request->get('health_tests');


        $dog->save();

        $gallery = Gallery::findOrFail($idGallery);

        $gallery->photo = $request->input('photo');

        $gallery->id_dog = $dogs->getId();

        $gallery->save();

        return redirect()->route('KennelController@edit', compact('dog'));
    }

    public function show(Request $request){

        $dog= Dog::all();

        return view('breeder.modify_dog', compact('dog'));
    }
}
