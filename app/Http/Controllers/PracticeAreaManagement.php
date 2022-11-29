<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use DB;

class PracticeAreaManagement extends Controller
{
    public function practice_area_index()
    {
        return view('PracticeAreaManagement.practice_area_index');
    }
    public function practice_area()
    {
        return view('PracticeAreaManagement.practice_area');
    }
    public function matter_type()
    {
        return view('PracticeAreaManagement.matter_type');
    }

    public function personalinjury()
    {
        return view('PracticeAreaManagement.personal_injury');
    }
    public function family_law()
    {
        return view('PracticeAreaManagement.family_law');
    }
    public function general_practice()
    {
        return view('PracticeAreaManagement.general_practice');
    }
    public function estate_plan()
    {
        return view('PracticeAreaManagement.estate_plan');
    }
    public function real_estate()
    {
        return view('PracticeAreaManagement.real_estate');
    }
    public function criminal_law()
    {
        return view('PracticeAreaManagement.criminal_law');
    }
    public function civil_litigation()
    {
        return view('PracticeAreaManagement.civil_litigation');
    }
    public function business_law()
    {
        return view('PracticeAreaManagement.business_law');
    }
    public function guardianship_law()
    {
        return view('PracticeAreaManagement.guardianship_law');
    }
    public function probate_law()
    {
        return view('PracticeAreaManagement.probate_law');
    }
}