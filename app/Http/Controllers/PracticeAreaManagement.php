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

    public function personalinjury()
    {
        return view('practiceareamanagement.personal_injury');
    }
    public function family_law()
    {
        return view('practiceareamanagement.family_law');
    }
    public function general_practice()
    {
        return view('practiceareamanagement.general_practice');
    }
}