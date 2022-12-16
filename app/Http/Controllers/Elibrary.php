<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


// use Illuminate\Support\Facades\DB;



class Elibrary extends Controller
{

    public function index()
    {
        return view('Elibrary.libraryindex');
    }

    public function subjects()
    {
        return view('Elibrary.subject');
    }

    public function editsubjects()
    {
        return view('Elibrary.editsubject');
    }

    public function files()
    {
        return view('Elibrary.file');
    }

    public function editfiles()
    {
        return view('Elibrary.editfile');
    }




}
