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
       
    }

    public function family_law()
    {

        $view_law=DB::table('cra_family_law')->get();

        return view('PracticeAreaManagement.family_law',compact('view_law'));
    }

    public function addfamilylaw(Request $request)
    {
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $other_party = $request['other_party'];
        $attorney = $request['attorney'];
        $case_details = $request['case_details'];
        $marrige = $request['marrige'];
        $property = $request['property'];
        $child_details = $request['child_details'];
        $support_detail = $request['support_detail'];

        if(!empty($request->file('support_detail'))){

            $this->validate($request,[
                'support_detail' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('support_detail')){
            $uploadedImage = $request->file('support_detail');
            $imageName     = time() .'.'. $support_detail->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $support_detail->file    = $destinationPath.$imageName;
        }

        DB::table('cra_family_law')->insert([
            'file_no' => $file_no,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'other_party' => $other_party,
            'attorney' => $attorney,
            'case_details' => $case_details,
            'marrige' => $marrige,
            'property' => $property,
            'child_details' => $child_details,
            'support_detail' => $support_detail
        ]);

        return redirect('/family_law');
    }

    public function view_family_law()
    {
        return view('PracticeAreaManagement.view_family_law');
    }

    public function edit_family_law($id)
    {
       $edit=DB::table('cra_family_law')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_family_law',compact('edit','id'));
    }

    public function updatefamilylaw(Request $request)
    {
        $id = $request['id'];
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $other_party = $request['other_party'];
        $attorney = $request['attorney'];
        $case_details = $request['case_details'];
        $marrige = $request['marrige'];
        $property = $request['property'];
        $child_details = $request['child_details'];
        $support_detail = $request['support_detail'];

        DB::table('cra_family_law')->where('id',$id)->update([
            'id' => $id,
            'file_no' => $file_no,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'other_party' => $other_party,
            'attorney' => $attorney,
            'case_details' => $case_details,
            'marrige' => $marrige,
            'property' => $property,
            'child_details' => $child_details,
            'support_detail' => $support_detail
        ]);

        return redirect('/family_law');
    }

    public function deletelaw($id)
    {

        $delete_law=DB::table('cra_family_law')->where('id',$id)->delete();

        return redirect('/family_law');
    }


    public function general_practice()
    {

        $view_practice = DB::table('cra_add_general_practice')->get();
        return view('PracticeAreaManagement.general_practice',compact('view_practice'));
    }
    
    public function addpractice(Request $request)
    {

        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $other_party =$request['other_party'];
        $attorney = $request['attorney'];
        $case_details = $request['case_details'];
        $witness = $request['witness'];
        $detail =$request['detail'];

        if(!empty($request->file('detail'))){

            $this->validate($request,[
                'detail' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('detail')){
            $uploadedImage = $request->file('detail');
            $imageName     = time() .'.'. $detail->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $detail->file    = $destinationPath.$imageName;
        }

        DB::table('cra_add_general_practice')->insert([

            'file_no' => $file_no,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'other_party' => $other_party,
            'attorney' => $attorney,
            'case_details' => $case_details,
            'witness' => $witness,
            'detail' => $detail,

        ]);
        return redirect('/general_practice');
    }

    public function edit_general_practice($id)
    {

        $edit=DB::table('cra_add_general_practice')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_general_practice',compact('edit','id'));
    }

    public function updatepractice(Request $request)
    {
        $id = $request['id'];
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $other_party = $request['other_party'];
        $attorney = $request['attorney'];
        $case_details = $request['case_details'];
        $witness = $request['witness'];
        $detail = $request['detail'];
        if(!empty($request->file('detail'))){

            $this->validate($request,[
                'detail' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('detail')){
            $uploadedImage = $request->file('detail');
            $imageName     = time() .'.'. $detail->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $detail->file    = $destinationPath.$imageName;
        }

        DB::table('cra_add_general_practice')->where('id',$id)->update([

            'id' => $id,
            'file_no' => $file_no,
            'client_name' => $client_name,
            'other_party' => $other_party,
            'attorney' => $attorney,
            'case_details' => $case_details,
            'witness' => $witness,
            'detail' => $detail


        ]);
        
        return redirect('/general_practice');
    }
    
    public function deletepractice($id)
    {

        $delete=DB::table('cra_add_general_practice')->where('id',$id)->delete();
        return redirect('/general_practice');
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

    public function workers_compensation()
    {
        return view('PracticeAreaManagement.workers_compensation');
    }
   
    public function view_general_practice()
    {
        return view('PracticeAreaManagement.view_general_practice');
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
    public function view_criminal_law()
    {
        return view('PracticeAreaManagement.view_criminal_law');
    }
    public function edit_criminal_law()
    {
        return view('PracticeAreaManagement.edit_criminal_law');
    }
    public function view_civil_litigation()
    {
        return view('PracticeAreaManagement.view_civil_litigation');
    }
    public function edit_civil_litigation()
    {
        return view('PracticeAreaManagement.edit_civil_litigation');
    }



    public function updatecivillitigation(Request $request)
    {

        $id = $request['id'];
        $matter_info = $request['matter_info'];
        $plaintiff = $request['plaintiff'];
        $matter_type = $request['matter_type'];
        $defendent =$request['defendent'];
        $attroney = $request['attroney'];
        $case_detail = $request['propecase_detailrty'];
        $insurer = $request['insurer'];
        $witness =$request['witness'];
        $expert =$request['expert'];
        $def_insurer =$request['def_insurer'];
        $def_witness =$request['def_witness'];
        $def_expert =$request['def_expert'];
        $support_detail =$request['support_detail'];

        if(!empty($request->file('support_detail'))){

            $this->validate($request,[
                'support_detail' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('support_detail')){
            $uploadedImage = $request->file('support_detail');
            $imageName     = time() .'.'. $support_detail->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $support_detail->file    = $destinationPath.$imageName;
        }

        DB::table('cra_civil_litigation')->where('id',$id)->update([

            'id' => $id,
            'matter_info' => $matter_info,
            'plaintiff' => $plaintiff,
            'matter_type' => $matter_type,
            'defendent' => $defendent,
            'attroney' => $attroney,
            'case_detail' => $case_detail,
            'insurer' => $insurer,
            'witness' => $witness,
            'expert' => $expert,
            'def_insurer' => $def_insurer,
            'def_witness' => $def_witness,
            'def_expert' => $def_expert,
            'support_detail' => $support_detail,
        
        ]);


        return redirect('/civil_litigation');
    }

    public function deletecivillitigation($id)
    {
        $delete_plan=DB::table('cra_civil_litigation')->where('id',$id)->delete();
        return redirect('/civil_litigation');
    }


    public function business_law()
    {
        $view_business = DB::table('cra_business_law')->get();
        return view('PracticeAreaManagement.business_law',compact('view_business'));
    }

    public function addbusinesslaw(Request $request)
    {

        $matter_info = $request['matter_info'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $corporation =$request['corporation'];
        $case_details = $request['case_details'];
        $supporting =$request['supporting'];

        if(!empty($request->file('supporting'))){

            $this->validate($request,[
                'supporting' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('supporting')){
            $uploadedImage = $request->file('supporting');
            $imageName     = time() .'.'. $supporting->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $supporting->file    = $destinationPath.$imageName;
        }

        DB::table('cra_business_law')->insert([

            'matter_info' => $matter_info,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'corporation' => $corporation,
            'case_details' => $case_details,
            'supporting' => $supporting,
        
        ]);

        return redirect('/business_law');
    }

    public function edit_business_law($id)
    {
        $edit=DB::table('cra_business_law')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_business_law',compact('edit','id'));
    }

    public function updatebusinesslaw(Request $request)
    {
        $id = $request['id'];
        $matter_info = $request['matter_info'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $corporation =$request['corporation'];
        $case_details = $request['case_details'];
        $supporting =$request['supporting'];

        if(!empty($request->file('supporting'))){

            $this->validate($request,[
                'supporting' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('supporting')){
            $uploadedImage = $request->file('supporting');
            $imageName     = time() .'.'. $supporting->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $supporting->file    = $destinationPath.$imageName;
        }

        DB::table('cra_business_law')->where('id',$id)->update([

            'id' => $id,
            'matter_info' => $matter_info,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'corporation' => $corporation,
            'case_details' => $case_details,
            'supporting' => $supporting,
        
        ]);

        return redirect('/business_law');
    }

    public function deletebusinesslaw($id)
    {
        $delete_business = DB::table('cra_business_law')->where('id',$id)->delete();
        return redirect('/business_law');
    }

    public function view_business_law()
    {
        return view('PracticeAreaManagement.view_business_law');
    }

    public function guardianship_law()
    {
        $guardian_list = DB::table('cra_guardianship_law')->get();
        return view('PracticeAreaManagement.guardianship_law',compact('guardian_list'));
    }

    public function addguardian(Request $request)
    {

        $matter_info = $request['matter_info'];
        $petitioner = $request['petitioner'];
        $matter_type = $request['matter_type'];
        $disable_person =$request['disable_person'];
        $attroney = $request['attroney'];
        $disadility_details = $request['disadility_details'];
        $case_details = $request['case_details'];
        $guardian =$request['guardian'];
        $guardian_details =$request['guardian_details'];
        $support_details =$request['support_details'];
       

        if(!empty($request->file('support_details'))){

            $this->validate($request,[
                'support_details' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('support_detail')){
            $uploadedImage = $request->file('support_details');
            $imageName     = time() .'.'. $support_details->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $support_details->file    = $destinationPath.$imageName;
        }

        DB::table('cra_guardianship_law')->insert([

            'matter_info' => $matter_info,
            'petitioner' => $petitioner,
            'matter_type' => $matter_type,
            'disable_person' => $disable_person,
            'attroney' => $attroney,
            'disadility_details' => $disadility_details,
            'case_details' => $case_details,
            'guardian' => $guardian,
            'guardian_details' => $guardian_details,
            'support_details' => $support_details,
          
        ]);


        return redirect('/guardianship_law');
    }

    public function view_guardianship_law()
    {
        return view('PracticeAreaManagement.view_guardianship_law');
    }

    public function edit_guardianship_law($id)
    {
        $edit = DB::table('cra_guardianship_law')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_guardianship_law',compact('edit','id'));
    }

    public function updateguardian(Request $request)
    {

        $id = $request['id'];
        $matter_info = $request['matter_info'];
        $petitioner = $request['petitioner'];
        $matter_type = $request['matter_type'];
        $disable_person =$request['disable_person'];
        $attroney = $request['attroney'];
        $disadility_details = $request['disadility_details'];
        $case_details = $request['case_details'];
        $guardian =$request['guardian'];
        $guardian_details =$request['guardian_details'];
        $support_details =$request['support_details'];
       

        if(!empty($request->file('support_details'))){

            $this->validate($request,[
                'support_details' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('support_detail')){
            $uploadedImage = $request->file('support_details');
            $imageName     = time() .'.'. $support_details->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $support_details->file    = $destinationPath.$imageName;
        }

        DB::table('cra_guardianship_law')->where('id',$id)->update([
            'id' => $id,
            'matter_info' => $matter_info,
            'petitioner' => $petitioner,
            'matter_type' => $matter_type,
            'disable_person' => $disable_person,
            'attroney' => $attroney,
            'disadility_details' => $disadility_details,
            'case_details' => $case_details,
            'guardian' => $guardian,
            'guardian_details' => $guardian_details,
            'support_details' => $support_details,
          
        ]);


        return redirect('/guardianship_law');
    }

    public function deleteguardian($id)
    {
        $delete_guardian = DB::table('cra_guardianship_law')->where('id',$id)->delete();
        return redirect('/guardianship_law');
    }

    public function probate_law()
    {
        $view_list = DB::table('cra_probate_law')->get();
        return view('PracticeAreaManagement.probate_law',compact('view_list'));
    }

    public function addprobatelaw(Request $request)
    {
        $matter_info = $request['matter_info'];
        $executor = $request['executor'];
        $matter_type = $request['matter_type'];
        $deceased =$request['deceased'];
        $case_details = $request['case_details'];
        $estate_details = $request['estate_details'];
        $supporting_details = $request['supporting_details'];
      
       

        if(!empty($request->file('supporting_details'))){

            $this->validate($request,[
                'supporting_details' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('supporting_details')){
            $uploadedImage = $request->file('supporting_details');
            $imageName     = time() .'.'. $supporting_details->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $supporting_details->file    = $destinationPath.$imageName;
        }

        DB::table('cra_probate_law')->insert([

            'matter_info' => $matter_info,
            'executor' => $executor,
            'matter_type' => $matter_type,
            'deceased' => $deceased,
            'case_details' => $case_details,
            'estate_details' => $estate_details,
            'supporting_details' => $supporting_details,
            
          
        ]);
        return redirect('/probate_law');
    }

    public function edit_probate_law($id)
    {
        $edit = DB::table('cra_probate_law')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_probate_law',compact('edit','id'));

    }

    public function updateprobatelaw(Request $request)
    {
        $id = $request['id'];
        $matter_info = $request['matter_info'];
        $executor = $request['executor'];
        $matter_type = $request['matter_type'];
        $deceased =$request['deceased'];
        $case_details = $request['case_details'];
        $estate_details = $request['estate_details'];
        $supporting_details = $request['supporting_details'];
      
       

        if(!empty($request->file('supporting_details'))){

            $this->validate($request,[
                'supporting_details' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('supporting_details')){
            $uploadedImage = $request->file('supporting_details');
            $imageName     = time() .'.'. $supporting_details->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $supporting_details->file    = $destinationPath.$imageName;
        }

        DB::table('cra_probate_law')->where('id',$id)->update([
            
            'id' => $id,
            'matter_info' => $matter_info,
            'executor' => $executor,
            'matter_type' => $matter_type,
            'deceased' => $deceased,
            'case_details' => $case_details,
            'estate_details' => $estate_details,
            'supporting_details' => $supporting_details,
            
          
        ]);
        return redirect('/probate_law');
    }

    public function deleteprobatelaw($id)
    {
        $destroy_law = DB::table('cra_probate_law')->where('id',$id)->delete();
        return redirect('/probate_law');

    }

    public function workers_compensation()
    {
        $view_employee = DB::table('cra_workers_compensation')->get();
        return view('PracticeAreaManagement.workers_compensation',compact('view_employee'));
    }

    public function addworkerscompensation(Request $request)
    {
        $matter_info = $request['matter_info'];
        $petitioner = $request['petitioner'];
        $matter_type = $request['matter_type'];
        $respondent =$request['respondent'];
        $attroney = $request['attroney'];
        $insurer = $request['insurer'];
        $adjuster = $request['adjuster'];
        $case_detail = $request['case_detail'];
        $employee_doctor =$request['employee_doctor'];
        $benefit_detail = $request['benefit_detail'];
        $supporting_details = $request['supporting_details'];
      
       

        if(!empty($request->file('supporting_details'))){

            $this->validate($request,[
                'supporting_details' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('supporting_details')){
            $uploadedImage = $request->file('supporting_details');
            $imageName     = time() .'.'. $supporting_details->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $supporting_details->file    = $destinationPath.$imageName;
        }

        DB::table('cra_workers_compensation')->insert([
            
            'matter_info' => $matter_info,
            'petitioner' => $petitioner,
            'matter_type' => $matter_type,
            'respondent' => $respondent,
            'attroney' => $attroney,
            'insurer' => $insurer,
            'adjuster' => $adjuster,
            'case_detail' => $case_detail,
            'employee_doctor' => $employee_doctor,
            'benefit_detail' => $benefit_detail,
            'supporting_details' => $supporting_details,
            
          
        ]);

        return redirect('/workers_compensation');
    }
    public function view_workers_compensation()
    {
        return view('PracticeAreaManagement.view_workers_compensation');
    }

    public function edit_workers_compensation($id)
    {
        $edit = DB::table('cra_workers_compensation')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_workers_compensation',compact('edit','id'));
      
    }

    public function updateworkerscompensation(Request $request)
    {
        $id = $request['id'];
        $matter_info = $request['matter_info'];
        $petitioner = $request['petitioner'];
        $matter_type = $request['matter_type'];
        $respondent =$request['respondent'];
        $attroney = $request['attroney'];
        $insurer = $request['insurer'];
        $adjuster = $request['adjuster'];
        $case_detail = $request['case_detail'];
        $employee_doctor =$request['employee_doctor'];
        $benefit_detail = $request['benefit_detail'];
        $supporting_details = $request['supporting_details'];
      
       

       
        DB::table('cra_workers_compensation')->where('id',$id)->update([
            
            'id' => $id,
            'matter_info' => $matter_info,
            'petitioner' => $petitioner,
            'matter_type' => $matter_type,
            'respondent' => $respondent,
            'attroney' => $attroney,
            'insurer' => $insurer,
            'adjuster' => $adjuster,
            'case_detail' => $case_detail,
            'employee_doctor' => $employee_doctor,
            'benefit_detail' => $benefit_detail,
          
            
          
        ]);

        return redirect('/workers_compensation');
    }

    public function deleteworkerscompensation($id)
    {
        $destroy_workers = DB::table('cra_workers_compensation')->where('id',$id)->delete();
        return redirect('/workers_compensation');

    }

    public function view_general_practice()
    {
        return view('PracticeAreaManagement.view_general_practice');
    }
    
    public function view_estate_plan()
    {
        return view('PracticeAreaManagement.view_estate_plan');
    }
    
    public function view_probate_law()
    {
        return view('PracticeAreaManagement.view_probate_law');
    }
  
   
}