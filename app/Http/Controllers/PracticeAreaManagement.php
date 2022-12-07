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
    public function view_injury()
    {

        return view('PracticeAreaManagement.view_injury');
       
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

        $view_plan = DB::table('cra_estate_planning')->get();
        return view('PracticeAreaManagement.estate_plan',compact('view_plan'));
    }

    public function addestateplan(Request $request)
    {
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $estate_details =$request['estate_details'];
        $trust = $request['trust'];
        $property_details = $request['property_details'];
        $accoundant = $request['accoundant'];
        $financier =$request['financier'];
        $support =$request['support'];

        if(!empty($request->file('support'))){

            $this->validate($request,[
                'support' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('support')){
            $uploadedImage = $request->file('support');
            $imageName     = time() .'.'. $support->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $support->file    = $destinationPath.$imageName;
        }

        DB::table('cra_estate_planning')->insert([

            'file_no' => $file_no,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'estate_details' => $estate_details,
            'trust' => $trust,
            'property_details' => $property_details,
            'accoundant' => $accoundant,
            'financier' => $financier,
            'support' => $support,
        
        ]);


        return redirect('/estate_plan');
    }

    public function edit_estate_plan($id)
    {
        $edit=DB::table('cra_estate_planning')->where('id',$id)->first();

        return view('PracticeAreaManagement.edit_estate_plan',compact('edit','id'));
    }

    public function updateestateplan(Request $request)
    {
        $id=$request['id'];
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $estate_details =$request['estate_details'];
        $trust = $request['trust'];
        $property_details = $request['property_details'];
        $accoundant = $request['accoundant'];
        $financier =$request['financier'];
        $support =$request['support'];

        if(!empty($request->file('support'))){

            $this->validate($request,[
                'support' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('support')){
            $uploadedImage = $request->file('support');
            $imageName     = time() .'.'. $support->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $uploadedImage->move($destinationPath,$imageName);
            $support->file    = $destinationPath.$imageName;
        }

        DB::table('cra_estate_planning')->where('id',$id)->update([

            'id' => $id,
            'file_no' => $file_no,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'estate_details' => $estate_details,
            'trust' => $trust,
            'property_details' => $property_details,
            'accoundant' => $accoundant,
            'financier' => $financier,
            'support' => $support,
        
        ]);


        return redirect('/estate_plan');
    }

    public function deleteestateplan($id)
    {
        $delete_plan=DB::table('cra_estate_planning')->where('id',$id)->delete();

        return redirect('/estate_plan');
    }





    public function real_estate()
    {
        $view_estate=DB::table('cra_real_estate')->get();
        return view('PracticeAreaManagement.real_estate',compact('view_estate'));
    }

    public function addrealestate(Request $request)
    {
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $buyer =$request['buyer'];
        $attroney = $request['attroney'];
        $property = $request['property'];
        $close_statement = $request['close_statement'];
        $listing_realtor =$request['listing_realtor'];
        $selling_realtor =$request['selling_realtor'];
        $company_title =$request['company_title'];
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

        DB::table('cra_real_estate')->insert([

            'file_no' => $file_no,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'buyer' => $buyer,
            'attroney' => $attroney,
            'property' => $property,
            'close_statement' => $close_statement,
            'listing_realtor' => $listing_realtor,
            'selling_realtor' => $selling_realtor,
            'company_title' => $company_title,
            'support_detail' => $support_detail,
        
        ]);


        return redirect('/real_estate');
    }

    public function edit_real_estate($id)
    {
        $edit = DB::table('cra_real_estate')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_real_estate',compact('edit','id'));
    }

    public function updaterealestate(Request $request)
    {
        $id = $request['id'];
        $file_no = $request['file_no'];
        $client_name = $request['client_name'];
        $matter_type = $request['matter_type'];
        $buyer =$request['buyer'];
        $attroney = $request['attroney'];
        $property = $request['property'];
        $close_statement = $request['close_statement'];
        $listing_realtor =$request['listing_realtor'];
        $selling_realtor =$request['selling_realtor'];
        $company_title =$request['company_title'];
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

        DB::table('cra_real_estate')->where('id',$id)->update([

            'id' => $id,
            'file_no' => $file_no,
            'client_name' => $client_name,
            'matter_type' => $matter_type,
            'buyer' => $buyer,
            'attroney' => $attroney,
            'property' => $property,
            'close_statement' => $close_statement,
            'listing_realtor' => $listing_realtor,
            'selling_realtor' => $selling_realtor,
            'company_title' => $company_title,
            'support_detail' => $support_detail,
        
        ]);


        return redirect('/real_estate');
    }

    public function deleterealestate($id)
    {
        $delete_plan=DB::table('cra_real_estate')->where('id',$id)->delete();

        return redirect('/real_estate');
    }
    public function view_real_estate()
    {
        return view('PracticeAreaManagement.view_real_estate');
    }



    public function criminal_law()
    {
        $criminal_law=DB::table('cra_criminal_law')->get();
        return view('PracticeAreaManagement.criminal_law',compact('criminal_law'));
    }
    public function addcriminallaw(Request $request)
    {
        $matter_info = $request['matter_info'];
        $defendent = $request['defendent'];
        $matter_type = $request['matter_type'];
        $prosecutor =$request['prosecutor'];
        $case_detail = $request['case_detail'];
        $investigator = $request['investigator'];
        $victim = $request['victim'];
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

        DB::table('cra_criminal_law')->insert([

            'matter_info' => $matter_info,
            'defendent' => $defendent,
            'matter_type' => $matter_type,
            'prosecutor' => $prosecutor,
            'case_detail' => $case_detail,
            'investigator' => $investigator,
            'victim' => $victim,
            'support_detail' => $support_detail,
        
        ]);


        return redirect('/criminal_law');
    }

    public function view_criminal_law()
    {
        return view('PracticeAreaManagement.view_criminal_law');
    }

    public function edit_criminal_law($id)
    {
        $edit=DB::table('cra_criminal_law')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_criminal_law',compact('edit','id'));
    }

    public function updatecriminallaw(Request $request)
    {
        $id = $request['id'];
        $matter_info = $request['matter_info'];
        $defendent = $request['defendent'];
        $matter_type = $request['matter_type'];
        $prosecutor =$request['prosecutor'];
        $case_detail = $request['case_detail'];
        $investigator = $request['investigator'];
        $victim = $request['victim'];
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

        DB::table('cra_criminal_law')->where('id',$id)->update([
            
            'id' => $id,
            'matter_info' => $matter_info,
            'defendent' => $defendent,
            'matter_type' => $matter_type,
            'prosecutor' => $prosecutor,
            'case_detail' => $case_detail,
            'investigator' => $investigator,
            'victim' => $victim,
            'support_detail' => $support_detail,
        
        ]);


        return redirect('/criminal_law');
    }

    public function deletecriminallaw($id)
    {
        $delete_plan=DB::table('cra_criminal_law')->where('id',$id)->delete();
        return redirect('/real_estate');
    }



    public function civil_litigation()
    {
        $view_litigation = DB::table('cra_civil_litigation')->get();
        return view('PracticeAreaManagement.civil_litigation',compact('view_litigation'));
    }

    public function addcivillitigation(Request $request)
    {

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

        DB::table('cra_civil_litigation')->insert([

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

    public function view_civil_litigation()
    {
        return view('PracticeAreaManagement.view_civil_litigation');
    }
    public function edit_civil_litigation($id)
    {
        $edit = DB::table('cra_civil_litigation')->where('id',$id)->first();
        return view('PracticeAreaManagement.edit_civil_litigation',compact('edit','id'));
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
        return redirect('/real_estate');
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
    
   
   
    
    public function view_business_law()
    {
        return view('PracticeAreaManagement.view_business_law');
    }
    public function edit_business_law()
    {
        return view('PracticeAreaManagement.edit_business_law');
    }
    public function view_guardianship_law()
    {
        return view('PracticeAreaManagement.view_guardianship_law');
    }
    public function edit_guardianship_law()
    {
        return view('PracticeAreaManagement.edit_guardianship_law');
    }
    public function view_probate_law()
    {
        return view('PracticeAreaManagement.view_probate_law');
    }
    public function edit_probate_law()
    {
        return view('PracticeAreaManagement.edit_probate_law');
    }
    public function view_workers_compensation()
    {
        return view('PracticeAreaManagement.view_workers_compensation');
    }
    public function edit_workers_compensation()
    {
        return view('PracticeAreaManagement.edit_workers_compensation');
    }
}