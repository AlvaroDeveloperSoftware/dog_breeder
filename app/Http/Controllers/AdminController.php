<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\UserBreeder;
use App\Models\User;
/**
 * Class AdminController
 * @author Álvaro Ramas Franco
 * @since 1.0.
 */
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Establish middleware for auth and admin for recognize users.
        $this->middleware('auth:admin');
    }

    /**
     * Function that show all users that exists in the database.
     * @return view of list of users.
     */
    public function allUser(Request $request){
        $usersBreeder = UserBreeder::all();
        $usersNormal = User::all();

        return view('admin.admin_list', compact('usersBreeder', 'usersNormal'));
    }

    /**
     * Function that show the index page of administrator user.
     */
    public function index()
    {
        return view('admin.admin_home');
    }

}

?>