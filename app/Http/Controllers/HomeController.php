<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $serien = Auth::user()->serien;
        return view('home', ["serien" => $serien]);
    }
    public function show()
    {
        $users = User::all();
        return view('users', ["users" => $users]);
    }
    public function search()
    {
        $q = \request("q");
        $search = User::where("name","LIKE","%".$q."%")->orWhere("email", "LIKE","%". $q . "%")->get();

        $users = User::all();
        return view("users", compact("search","users","q" ));
    }
}

