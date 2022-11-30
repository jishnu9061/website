<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use DB;

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
        $view_injury = DB::table('cra_add_injury')->get();
        return view('PracticeAreaManagement.personal_injury',compact('view_injury'));
    }
    public function addinjury(Request $request)
    {
        $matter_info=$request['matter_info'];
        $matter_type=$request['matter_type'];
        $incident=$request['incident'];
        $damage=$request['damage'];
        $insurer=$request["insurer"];
        $policy_detail=$request["policy_detail"];
        $defendent=$request['defendent'];

        DB::table('cra_add_injury')->insert([

            'matter_info' => $matter_info,
            'matter_type' => $matter_type,
            'incident' => $incident,
            'damage' => $damage,
            'insurer' => $insurer,
            'policy_detail' => $policy_detail,
            'defendent' => $defendent,

        ]);
        
        return redirect('/personal_injury');
    }

    public function editinjury($id)
    {
        $edit = DB::table('cra_add_injury')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_injury',compact('edit','id'));
    }

    public function updateinjury(Request $request)
    {
       $id = $request['id'];
       $matter_info = $request['matter_info'];
       $matter_type = $request['matter_type'];
       $incident = $request['incident'];
       $damage = $request['damage'];
       $insurer = $request['insurer'];
       $policy_detail = $request['policy_detail'];
       $defendent = $request['defendent'];

       DB::table('cra_add_injury')->where('id',$id)->update([

        'id' => $id,
        'matter_info' => $matter_info,
        'matter_type' => $matter_type,
        'incident' => $incident,
        'damage' => $damage,
        'insurer' => $insurer,
        'policy_detail' => $policy_detail,
        'defendent' => $defendent


       ]);
        return redirect('/personal_injury');
    }
    public function deleteinjury($id)
    {
        $destroy= DB::table('cra_add_injury')->where('id',$id)->delete();

        return redirect('/personal_injury');
        // return view('PracticeAreaManagement.family_law');
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
    public function view_family_law()
    {
        return view('PracticeAreaManagement.view_family_law');
    }
    public function edit_family_law()
    {
        return view('PracticeAreaManagement.edit_family_law');
    }
    public function view_general_practice()
    {
        return view('PracticeAreaManagement.view_general_practice');
    }
    public function edit_general_practice()
    {
        return view('PracticeAreaManagement.edit_general_practice');
    }
    public function view_estate_plan()
    {
        return view('PracticeAreaManagement.view_estate_plan');
    }
    public function edit_estate_plan()
    {
        return view('PracticeAreaManagement.edit_estate_plan');
    }
    public function view_real_estate()
    {
        return view('PracticeAreaManagement.view_real_estate');
    }
    public function edit_real_estate()
    {
        return view('PracticeAreaManagement.edit_real_estate');
    }
}