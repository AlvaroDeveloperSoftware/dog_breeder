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

/**
 * Class KennelController for method of relationship with Dog.
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
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
     * Show the application Kennel of breeder.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showFarm()
    {
        return view('breeder.kennel');
    }


    /**
     * Allow register dogs on the system.
     * @return view of register dog.
     */
    public function formDog()
    {
        return view('breeder.register_dog');
    }

    /**
     * Function that allow register dog, is apply for the route with 
     * the method post in the file 'web.php'.
     * @return redirect to route home of breeder user.
     */
    public function registerDog(Request $request)
    {
            $dogs = new Dog;


            //Obtain values of text input.
            $dogs->name = $request->input('name');
            $dogs->date_of_birth = $request->input('date_of_birth');
            $dogs->sex = $request->input('sex');
            $dogs->breed = $request->input('breed');
            $dogs->height = $request->input('height');
            $dogs->weight = $request->input('weight');
            $dogs->owner = $request->input('owner');
            $dogs->health_tests = $request->input('health_tests');
            //Verify that fk of users is equal of id of user authenticated.
            $dogs->user_breeder_id = Auth::user()->getId();
            
            $dogs->save();

            //Create instance Gallery for save in the field photo of table gallery
            //the file call photo.
            $gallery = new Gallery;

            $gallery->photo = $request->input('photo');

            //Relationship betweeen gallery model and dog model.
            $gallery->id_dog = $dogs->getId();

            $gallery->save();

            //Redirect to route of breeder.home.
            return redirect()->route('breeder.home');
    }

    /**
     * This function show view of modify.
     * @return view breeder modify.
     */
    public function modifyView()
    {
        return view('breeder.modify_dog');
    }

    /**
     * This function edit, have a parameter of Dog class, 
     * for send at route the id wished.
     * @return view for edit dog, the variable access into 'compact'.
     */
    public function edit(Dog $dog){

        return view('breeder.dog_edit', compact('dog'));
    }

        /**
     * This function destroy, have a parameter call $dog, 
     * searching dog with the same id and delete.
     * @return view modify and use method delete.
     */
        public function destroy($dog)
    {
        $dog = Dog::find($dog);
        
        $dog->delete();
        return view('breeder.modify_dog', compact('dog'));

    }

    /**
     * This function update, have a parameter call $id, 
     * searching dog with the same id and update with the
     * information input in form.
     * @return redirect route with the method edit, and variable dog for
     * use in blade layouts.
     */
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

    /**
     * This function allow show all registers of table Dog.
     * @return view of modify with variable dog.
     */
    public function show(Request $request){

        $dog= Dog::all();

        return view('breeder.modify_dog', compact('dog'));
    }
}
