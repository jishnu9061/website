<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BaseController extends Controller
{

    public $variable1 = "I am Data";

    public function __construct()
    {

        $variable2 = "I am Data 2";


        View::share('variable1', $this->variable1);
        View::share('variable2', $variable2);
        View::share('variable3', 'I am Data 3');
        View::share('variable4', ['name' => 'Franky', 'address' => 'Mars']);
    }
}


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
        if ( Auth::user()->role == 1) {// do your magic here
            return redirect('/superadminhome');
            }
        return view('dashboard.dashboard');
    }
    public function admindashboard()
    {
        return view('layouts.admindashboard');
    }
    public function hr()
    {
        return view('admin.hr');
    }
    public function pharmacy()
    {
        return view('admin.pharmacy');
    }
    public function store()
    {
        return view('admin.store');
    }
    public function counter()
    {
        return view('admin.counter');
    }
    public function doctor()
    {
        return view('admin.doctor');
    }
    public function casuality()
    {
        return view('admin.casuality');
    }
    public function nurse()
    {
        $a = '1';
        return view('admin.nurse', ['a' => $a]);
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/');

        //return view('home');
    }
}
