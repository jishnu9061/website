<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class PracticeAreaManagement extends Controller
{
    public function practice_area_index()
    {
        return view('practiceareamanagement.practice_area_index');
    }
}