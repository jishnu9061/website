<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClientManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //individual
    public function index()
    {
        return view('client-management.client-index');
    }



    public function view(){

        $client_list = DB::table('cra_individual_client_details')->get();
        return view('client-management.client-list',compact('client_list'));
    }


  // Asign Lawyer
    public function asignlawyer()
    {
        $asign_lawyer = DB::table('cra_asign_lawyer')->get();
        return view('client-management.Asign lawyer',compact('asign_lawyer'));


    }
    public function add_lawyer(Request $Request)
    {
        $company_id=Auth::user()->company_id;
        $branch_id=Auth::user()->branch_id ?? null;
        $client_number = $Request['client_number'];
        $client_type  = $Request['client_type '];
        $client_name  = $Request['client_name '];
        $file_number  = $Request['file_number'];
        $lawyer_name = $Request['lawyer_name'];
        $court_name = $Request['court_name'];

        DB::table('cra_asign_lawyer')->insert([
            'client_number' => $client_number,
            'client_type' => $client_type ,
            'client_name' => $client_name,
            'file_number' => $file_number,
            'lawyer_name' => $lawyer_name,
            'court_name' => $court_name,
            'company_id'=>$company_id,
            'branch_id'=>$branch_id,
        ]);
        return redirect('/asign_lawyer');

    }


    public function edit_lawyer($id)
    {
        $asign_lawyer = DB::table('cra_asign_lawyer')->where('id',$id)->first();
        return view('client-management.edit_lawyer',compact('asign_lawyer','id'));

    }
    public function update_lawyer(Request $Request)
    {
        $id = $Request['id'];
        $client_number = $Request['client_number'];
        $client_type = $Request['client_type '];
        $client_name = $Request['client_name '];
        $file_number = $Request['file_number'];
        $lawyer_name = $Request['lawyer_name'];
        $court_name = $Request['court_name'];



        $update_lawyer = array(
            'client_number' => $client_number,
            'client_type' => $client_type,
            'client_name' => $client_name,
            'file_number' => $file_number,
            'lawyer_name' => $lawyer_name,
            'court_name' => $court_name,
        );
        DB::table('cra_asign_lawyer')->where('id', $id)->update($update_lawyer );

       return redirect('/asign_lawyer');
            }

    public function view_lawyer($id)
    {
        $asign_lawyer = DB::table('cra_asign_lawyer')->where('id',$id)->first();
        return view('client-management.view_lawyer', compact('asign_lawyer' ,'id'));


    }

    public function delete_lawyer($id)
    {
        DB::table('cra_asign_lawyer')->where('id',$id)->delete();
        return redirect('/asign_lawyer');
    }















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addNewclient(Request $Request){
        $company_id=Auth::user()->company_id;
        $branch_id=Auth::user()->branch_id ?? null;
        $number = $Request['number'];
        $client_type = $Request['type'];
        $citizen_status = $Request['citizen'];
        $incorporation = $Request['incorporation'];
        $country = $Request['country'];
        $telephone = $Request['telephone'];
        $fax_no = $Request['faxno'];
        $email = $Request['email'];
        $website = $Request['website'];
        $brought = $Request['brought'];
        $status = $Request['status'];
        $source = $Request['source'];
        $client_narration = $Request['narration'];
        $client_name = $Request['name'];
        $industry = $Request['industry'];
        $pin_no = $Request['pin'];
        $address = $Request['address'];
        $postal_code = $Request['code'];
        $town = $Request['town'];
        $physical_address = $Request['physical'];
        $Notes = $Request['notes'];


        DB::table('cra_individual_client_details')->insert([
            'client_number' => $number,
            'client_type' =>  $client_type,
            'citizen_status' => $citizen_status,
            'certificate_of_incorporation' => $incorporation ,
            'country' =>  $country,
            'telephone_no' =>   $telephone,
            'fax_no' =>  $fax_no,
            'email_address' =>  $email,
            'website' =>  $website ,
            'brought_in_by' =>  $brought,
            'reporting_day' =>  $status,
            'client_source' => $source,
            'client_source_narration' =>  $client_narration,
            'client_name' =>    $client_name,
            'client_industry' =>   $industry,
            'pin_no' =>    $pin_no,
            'postal_address' =>   $address,
            'postal_code' =>  $postal_code ,
            'town' =>      $town ,
            'physical_address' =>   $physical_address,
            'notes' => $Notes,
            'company_id'=>$company_id,
            'branch_id'=>$branch_id,
        ]);

        DB::table('cra_mixed_table')->insertGetId([
            'client_name' =>    $client_name,
        ]);

        return redirect("/client_list/".$company_id);
    }

    //Asign Lawyer//


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client_individual = DB::table('cra_individual_client_details')->where('id',$id)->first();
        return view('client-management.view-client',compact('client_individual','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_person($id)
    {
        $edit_client = DB::table('cra_individual_client_details')->where('id',$id)->first();
        return view('client-management.edit_person',compact('edit_client','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateClient(Request $Request)
    {
        $id     = $Request['id'];
        $number = $Request['number'];
        $client_type = $Request['type'];
        $citizen_status = $Request['citizen'];
        $incorporation = $Request['incorporation'];
        $country = $Request['country'];
        $telephone = $Request['telephone'];
        $fax_no = $Request['faxno'];
        $email = $Request['email'];
        $website = $Request['website'];
        $brought = $Request['brought'];
        $status = $Request['status'];
        $source = $Request['source'];
        $client_narration = $Request['narration'];
        $client_name = $Request['name'];
        $industry = $Request['industry'];
        $pin_no = $Request['pin'];
        $address = $Request['address'];
        $postal_code = $Request['code'];
        $town = $Request['town'];
        $physical_address = $Request['physical'];
        $Notes = $Request['notes'];


        DB::table('cra_individual_client_details')->where('id',$id)->update([
            'client_number' => $number,
            'client_type' =>  $client_type,
            'citizen_status' => $citizen_status,
            'certificate_of_incorporation' => $incorporation,
            'country' =>  $country,
            'telephone_no' =>   $telephone,
            'fax_no' =>  $fax_no,
            'email_address' =>  $email,
            'website' =>  $website ,
            'brought_in_by' =>  $brought,
            'reporting_day' =>  $status,
            'client_source' => $source,
            'client_source_narration' =>  $client_narration,
            'client_name' =>    $client_name,
            'client_industry' =>   $industry,
            'pin_no' =>    $pin_no,
            'postal_address' =>   $address,
            'postal_code' =>  $postal_code ,
            'town' =>      $town ,
            'physical_address' =>   $physical_address,
            'notes' => $Notes,
        ]);

        return redirect('/client_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteClient($id)
    {
        DB::table('cra_individual_client_details')->where('id',$id)->delete();
        return redirect('/client_list');
    }




    //complaint


    //end complaint


    //communication


    //end communication
     //client-Search


    public function registerClient(){
        return view('client-management.register-client');
    }



  //end client-search

  public function addCorporate(Request $Request){
    $company_id=Auth::user()->company_id;
    $branch_id=Auth::user()->branch_id ?? null;
    $number = $Request['number'];
    $client_type = $Request['type'];
    $citizen_status = $Request['citizen'];
    $corporation = $Request['corporation'];
    $country = $Request['country'];
    $telephone = $Request['telephone'];
    $fax_no = $Request['faxno'];
    $email = $Request['email'];
    $website = $Request['website'];
    $brought = $Request['brought'];
    $status = $Request['status'];
    $source = $Request['source'];
    $client_narration = $Request['narration'];
    $client_name = $Request['name'];
    $industry = $Request['industry'];
    $pin_no = $Request['pin'];
    $address = $Request['address'];
    $postal_code = $Request['code'];
    $town = $Request['town'];
    $physical_address = $Request['physicaladdress'];
    $Notes = $Request['notes'];
    $Person_Name = $Request['person'];
    $Designation = $Request['Designation'];
    $mobile_no = $Request['no'];
    $person_email = $Request['person_email'];

    DB::table('cra_corporate_client_details')->insert([
        'client_number' => $number,
        'Client_type' =>  $client_type,
        'Cityzen_status' => $citizen_status,
        'Certificate_of_incorporation' =>  $corporation,
        'Country' =>  $country,
        'Telephone_No' =>   $telephone,
        'Fax_no' =>  $fax_no,
        'Email_address' =>  $email,
        'Website' =>  $website ,
        'Brought_in_By' =>  $brought,
        'Status_reporting_day' =>  $status,
        'Client_source' => $source,
        'Client_source_naration' =>  $client_narration,
        'client_name' =>    $client_name,
        'Client_industry' =>   $industry,
        'Pin_no' =>    $pin_no,
        'postal_address' =>   $address,
        'postal_code' =>  $postal_code ,
        'town' =>      $town ,
        'physical_address' =>   $physical_address,
        'notes' => $Notes,
        'contact_person' => $Person_Name ,
        'designation' =>  $Designation,
        'Mobile_no' => $mobile_no,
        'email' =>$person_email,
        'company_id'=>$company_id,
        'branch_id'=>$branch_id,
    ]);

    DB::table('cra_mixed_table')->insertGetId([
        'client_name' =>    $client_name,
    ]);

    return redirect("/corporate-list/".$company_id);

    }

    public function CorporateDocument($corporate_id){
        $corporate_docs= DB::table('cra_corporate_client_details')->where('corporate_id',$corporate_id)->first();
        return view('client-management.corporate-document',compact('corporate_docs','corporate_id'));
    }


    public function viewCorporateDocument($corporate_id){

        $view_corporate_document = DB::table('cra_document_detials')
        ->join('cra_corporate_client_details','cra_corporate_client_details.corporate_id','=','cra_document_detials.corporate_id')
        ->where('cra_document_detials.corporate_id',$corporate_id)
        ->get();

        return view('client-management.corporate-document-detail',compact('view_corporate_document','corporate_id'));
    }

    public function editCorporateDocument($id){
            $edit_corporate_document = DB::table('cra_document_detials')->where('id',$id)->first();
            return view('client-management.edit-corporate-document',compact('edit_corporate_document','id'));
    }



    public function addCorporatedocument(Request $request){

       $testname    = count($request->input('testname'));
       $insertdoc   = [];


       for($i = 0; $i < $testname; $i++){

        $file = $request->file('file')[$i];

        if(request()->hasfile('file')){
            $uploadedImage = $file;
            $imageName     = time() .'.'. $file->getClientOriginalExtension();
            $destinationPath = public_path('images/file');
            $uploadedImage->move($destinationPath,$imageName);
            $file->file    = $destinationPath.$imageName;
        }else{
            $file = '';
        }

        $insertdoc[] = [

            'document_type' => $request->input('testname')[$i],
            'file'          =>  $imageName,
            'client_types'  =>  $request->input('client'),
            'date'          =>  $request->input('date')[$i],
            'corporate_id'  =>  $request->input('corporate_id')
        ];

       }

        DB::table('cra_document_detials')->insert($insertdoc);
        return redirect('/corporate-list');

    }

    public function updateDocumentDetails(Request $request){
        $id   = $request['id'];
        $type = $request['type'];
        $file = $request['file'];
        $client_type = $request['client'];

        if(!empty($request->file('file'))){

            $this->validate($request,[
                'file' => 'required|mimes:jpeg,jpg,png,gif,pdf,svg'
            ]);
        }
        if(request()->hasfile('file')){
            $uploadedImage = $request->file('file');
            $imageName     = time() .'.'. $file->getClientOriginalExtension();
            $destinationPath = public_path('images/file');
            $uploadedImage->move($destinationPath,$imageName);
            $file->file    = $destinationPath.$imageName;
        }

        DB::table('cra_document_detials')->where('id',$id)->update([

            'document_type' =>  $type,
            'file' =>   $imageName,
            'client_types'=> $client_type,
        ]);
        return redirect('/corporate-document-details');
    }

    public function viewDocummentDetails($id){
        $view_document_details = DB::table('cra_document_detials')->where('id',$id)->first();
        return view('client-management.view-corporate-document',compact('view_document_details','id'));
    }

    //end document//

    public function listCorporate(){

        $list_designation = DB::table('cra_add_user_roles')->get();
        $corporate_list=DB::table('cra_corporate_client_details')->get();
        return view('client-management.corporate-list',compact('corporate_list','list_designation'));
    }

    public function edit_corporate($corporate_id)
    {
        $corporate_details= DB::table('cra_corporate_client_details')->where('corporate_id',$corporate_id)->first();
        return view('client-management.edit_client',compact('corporate_details','corporate_id'));
    }

    public function Update_corporate(Request $Request){
        $corporate_id = $Request['corporate_id'];
        $number = $Request['number'];
        $client_type = $Request['type'];
        $citizen_status = $Request['citizen'];
        $corporation = $Request['corporation'];
        $country = $Request['country'];
        $telephone = $Request['telephone'];
        $fax_no = $Request['faxno'];
        $email = $Request['email'];
        $website = $Request['website'];
        $brought = $Request['brought'];
        $status = $Request['status'];
        $source = $Request['source'];
        $client_narration = $Request['narration'];
        $client_name = $Request['name'];
        $industry = $Request['industry'];
        $pin_no = $Request['pin'];
        $address = $Request['address'];
        $postal_code = $Request['code'];
        $town = $Request['town'];
        $physical_address = $Request['physicaladdress'];
        $Notes = $Request['notes'];
        $Person_Name = $Request['person'];
        $Designation = $Request['Designation'];
        $mobile_no = $Request['no'];
        $person_email = $Request['person_email'];

        DB::table('cra_corporate_client_details')->where('corporate_id',$corporate_id)->update([
            'client_number' => $number,
            'Client_type' =>  $client_type,
            'Cityzen_status' => $citizen_status,
            'Certificate_of_incorporation' =>  $corporation,
            'Country' =>  $country,
            'Telephone_No' =>   $telephone,
            'Fax_no' =>  $fax_no,
            'Email_address' =>  $email,
            'Website' =>  $website ,
            'Brought_in_By' =>  $brought,
            'Status_reporting_day' =>  $status,
            'Client_source' => $source,
            'Client_source_naration' =>  $client_narration,
            'client_name' =>    $client_name,
            'Client_industry' =>   $industry,
            'Pin_no' =>    $pin_no,
            'postal_address' =>   $address,
            'postal_code' =>  $postal_code ,
            'town' =>      $town ,
            'physical_address' =>   $physical_address,
            'notes' => $Notes,
            'contact_person' => $Person_Name ,
            'designation' =>  $Designation,
            'Mobile_no' => $mobile_no,
            'email' =>$person_email,
        ]);

        return redirect("/corporate-list");
    }


    public function Corporate_destroy($corporate_id){
        DB::table('cra_corporate_client_details')->where('corporate_id',$corporate_id)->delete();
        return redirect('/corporate-list');
    }

    //end corporate_client

//document


    public function document(){
        $client_document = DB::table('cra_individual_client_details')
        ->select('*')
        ->join('cra_document_detials','cra_document_detials.individual_id','=','cra_individual_client_details.id')
        ->get();
    

        return view('client-management.client-document',compact('client_document'));
    }


    public function createDocument($id){
        $client_doc = DB::table('cra_individual_client_details')->where('id',$id)->first();
        return view('client-management.add-document',compact('client_doc','id'));
    }

    public function addDocument(Request $request){

        $testname = count($request->input('testname'));
        $insertdoc   = [];




        for($i = 0; $i < $testname; $i++){

            $file = $request->file('file')[$i];

            if (request()->hasFile('file')){
                $uploadedImage = $file;
                $imageName = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('/images/file');
                $uploadedImage->move($destinationPath, $imageName);
                $file->file = $destinationPath . $imageName;
            }

            $insertdoc[] = [
                'file'          => $imageName,
                'document_type' => $request->input('testname')[$i],
                'client_types'  => $request->input('client'),
                'individual_id' => $request->input('individual_id'),
                'date'          => $request->input('date')[$i],

            ];
        }

        DB::table('cra_document_detials')->insert($insertdoc);

        return redirect('/client_list');

    }


    public function viewDocument($id){
        $view_document = DB::table('cra_document_detials')->where('id',$id)->first();
        return view('client-management.view-document',compact('view_document','id'));
    }

    public function editDocument($id){
        $edit_documents = DB::table('cra_document_detials')->where('id',$id)->first();
        return view('client-management.edit-documents',compact('edit_documents','id'));
    }

    public function updatedocument(Request $Request){

        $id  = $Request['document_id'];
        $document_type = $Request['testname'];
        $client_type =  $Request['client'];
        $file = $Request['file'];


        if (request()->hasFile('file')){
            $uploadedImage = $Request->file('file');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images/file');
            $uploadedImage->move($destinationPath, $imageName);
            $file->file = $destinationPath . $imageName;
        }


        DB::table('cra_document_detials')->where('id',$id)->update([

            'document_type' =>  $document_type,
            'file' =>   $imageName,
            'client_types' =>$client_type,
        ]);
        return redirect('/client-document');
    }

    public function showcorporatedocument($id){
      $view_document = DB::table('cra_document_detials')->where('id',$id)->first();
       return view('client-management.view_corporate_document',compact('view_document','id'));
   }

    public function deleteDocument($id){
        DB::table('cra_document_detials')->where('id',$id)->delete();
        return redirect('/corporate-list');
    }

    //document

    //Pickup-client

    public function clientPickup(){
        $get_items  = DB::table('cra_individual_client_details')->get();
        $client_pickup = DB::table('cra_client_pickup_reception')->get();
        return view('client-management.client-pickup',compact('client_pickup','get_items'));
    }


    public function formPickup(){
        return view('client-management.add-pickup');
    }


    public function storePickup(Request $Request){

        $client = $Request['client'];
        $file_name = $Request['file'];
        $mobile = $Request['mobile'];
        $persion_handling = $Request['persion'];
        $email = $Request['email'];
        $client_name = $Request['name'];
        $persion_picking_handling = $Request['handling'];
        $reason = $Request['reason'];
        $visitors = $Request['visitors'];
        $time_in = $Request['time-in'];
        $time_out = $Request['time-out'];

        DB::table('cra_client_pickup_reception')->insert([
            'client' =>  $client,
            'file_name' =>   $file_name,
            'mobile' => $mobile,
            'persion_handling' =>$persion_handling,
            'email' =>  $email,
            'client_name' =>  $client_name,
            'persion_picking_handling' =>  $persion_picking_handling,
            'reason' =>  $reason,
            'visitors' =>  $visitors ,
            'time_in' => $time_in,
            'time_out' =>  $time_out,
        ]);
        return redirect('/client-pickup');
    }

    public function viewPickups($id){
        $view_pickup = DB::table('cra_client_pickup_reception')->where('id',$id)->first();
        return view('client-management.view-pickup',compact('view_pickup','id'));
    }

    public function deletePickup($id){
        DB::table('cra_client_pickup_reception')->where('id',$id)->delete();
        return redirect('/client-pickup');
    }

    //end pickup

    //complaint

    public function complaintList(){
        $complaint_list = DB::table('cra_complaint_register')->get();
        return view('client-management.complaint-list',compact('complaint_list'));
    }


    public function addComplaint(Request $Request){

        $date = $Request['date'];
        $client_type = $Request['type'];
        $files = $Request['files'];
        $customer_name = $Request['name'];
        $staff_handling = $Request['Staff'];
        $complaint_about = $Request['Complaint'];
        $telephone_no = $Request['Telephone'];
        $email = $Request['email'];
        $others = $Request['Others'];
        $action_plan = $Request['plan'];
        $complaint_description = $Request['Description'];

        DB::table('cra_complaint_register')->insert([
            'date' =>  $date,
            'client_type' =>  $client_type,
            'files' => $files,
            'customer_name' =>$customer_name,
            'staff_handling' => $staff_handling,
            'complaint_about' =>  $complaint_about,
            'telephone_no' =>  $telephone_no,
            'email' =>   $email,
            'others' =>   $others ,
            'action_plan' => $action_plan,
            'complaint_description' => $complaint_description,
        ]);

        return redirect('/complaint-list');
    }


    public function editComplaint($id){
        $edit_complaint = DB::table('cra_complaint_register')->where('id',$id)->first();
        return view('client-management.edit-complaint',compact('edit_complaint','id'));
    }

    public function updateComplaint(Request $Request){
        $id   = $Request['id'];
        $date = $Request['date'];
        $client_type = $Request['type'];
        $files = $Request['files'];
        $customer_name = $Request['name'];
        $staff_handling = $Request['Staff'];
        $complaint_about = $Request['Complaint'];
        $telephone_no = $Request['Telephone'];
        $email = $Request['email'];
        $others = $Request['Others'];
        $action_plan = $Request['plan'];
        $complaint_description = $Request['Description'];

        DB::table('cra_complaint_register')->where('id',$id)->update([
            'date' =>  $date,
            'client_type' =>  $client_type,
            'files' => $files,
            'customer_name' =>$customer_name,
            'staff_handling' => $staff_handling,
            'complaint_about' =>  $complaint_about,
            'telephone_no' =>  $telephone_no,
            'email' =>   $email,
            'others' =>   $others ,
            'action_plan' => $action_plan,
            'complaint_description' => $complaint_description,
        ]);

        return redirect('/complaint-list');
    }

    public function viewComplaint($id){
        $view_complaint = DB::table('cra_complaint_register')->where('id',$id)->first();
        return view('client-management.view-complaint',compact('view_complaint','id'));
    }

    public function deleteComplaint($id){
        $delete_complaint = DB::table('cra_complaint_register')->where('id',$id)->delete();
        return redirect('/complaint-list');
    }

    //end complaint

    //customer Followup
    public function followup(){
        $followup = DB::table('cra_customer_followup')->get();
        $client   = DB::table('cra_mixed_table')->get();
        return view('client-management.follow-up',compact('followup','client'));
    }

    public function addFollowup(Request $Request){

        $followup_date = $Request['date'];
        $client = $Request['client'];
        $followup_type = $Request['type'];
        $staff_responsible = $Request['responsible'];
        $send_remainder_to = $Request['Remainder'];
        $next_bringup_date = $Request['Bring'];
        $alert_period = $Request['Alert'];
        $email = $Request['email'];
        $registered_by = $Request['Registered'];
        $description = $Request['description'];

        DB::table('cra_customer_followup')->insert([
            'followup_date' => $followup_date ,
            'customer' =>  $client,
            'followup_type' => $followup_type,
            'staff_responsible' =>$staff_responsible,
            'send_remainder_to' => $send_remainder_to,
            'next_bringup_date' =>  $next_bringup_date,
            'alert_period' =>  $alert_period,
            'email' =>   $email,
            'registered_by' =>  $registered_by,
            'description' => $description,
        ]);
        return redirect('/follow-up');
    }


    public function editFollow($id){
        $edit_follow = DB::table('cra_customer_followup')->where('id',$id)->first();
        return view('client-management.edit-followup',compact('edit_follow','id'));
    }

    public function updateFollow(Request $Request){

        $id            = $Request['id'];
        $followup_date = $Request['date'];
        $customer = $Request['client'];
        $followup_type = $Request['type'];
        $staff_responsible = $Request['responsible'];
        $send_remainder_to = $Request['Remainder'];
        $next_bringup_date = $Request['date'];
        $alert_period = $Request['Alert'];
        $email = $Request['email'];
        $registered_by = $Request['Registered'];
        $description = $Request['description'];

        DB::table('cra_customer_followup')->where('id',$id)->update([
            'followup_date' => $followup_date ,
            'customer' => $customer ,
            'followup_type' => $followup_type,
            'staff_responsible' =>$staff_responsible,
            'send_remainder_to' => $send_remainder_to,
            'next_bringup_date' =>  $next_bringup_date,
            'alert_period' =>  $alert_period,
            'email' =>   $email,
            'registered_by' =>  $registered_by,
            'description' => $description,
        ]);
        return redirect('/follow-up');
    }

    public function deleteFollow($id){
        $delete_follow = DB::table('cra_customer_followup')->where('id',$id)->delete();
        return redirect('/follow-up');
    }

    //end customer Followup

    //service-at-pickup

    public function service(){
        $get_items  = DB::table('cra_individual_client_details')->get();
        $service = DB::table('cra_client_service_at_reception')
        ->leftjoin('cra_company_branch_details','cra_company_branch_details.id','=','cra_client_service_at_reception.id')
        ->get();
        return view('client-management.client-service',compact('service','get_items'));
    }


    public function addService(Request $Request){

        $receipt_no = $Request['Receipt'];
        $client_name = $Request['Name'];
        $mobile = $Request['Mobile'];
        $amount_paid = $Request['amount'];
        $date = $Request['date'];
        $email = $Request['email'];
        $code = $Request['code'];
        $payment_method = $Request['Method'];

        DB::table('cra_client_service_at_reception')->insert([
            'receipt_no' =>  $receipt_no ,
            'client_name' =>   $client_name ,
            'mobile' => $mobile,
            'amount_paid' =>$amount_paid,
            'date' => $date,
            'email' =>  $email,
            'code' =>   $code,
            'payment_method' =>   $payment_method,
        ]);
        return redirect('/client-service');
    }

    public function editService($id){
        $edit_service = DB::table('cra_client_service_at_reception')->where('id',$id)->first();
        return view('client-management.edit-service',compact('edit_service','id'));
    }

    public function updateService(Request $Request){
        $id            = $Request['id'];
        $receipt_no = $Request['Receipt'];
        $client_name = $Request['Name'];
        $mobile = $Request['Mobile'];
        $amount_paid = $Request['amount'];
        $date = $Request['date'];
        $email = $Request['email'];
        $code = $Request['code'];
        $payment_method = $Request['Method'];

        DB::table('cra_client_service_at_reception')->where('id',$id)->update([
            'receipt_no' =>  $receipt_no ,
            'client_name' =>   $client_name ,
            'mobile' => $mobile,
            'amount_paid' =>$amount_paid,
            'date' => $date,
            'email' =>  $email,
            'code' =>   $code,
            'payment_method' =>   $payment_method,
        ]);

        return redirect('/client-service');
    }

    public function deleteService($id){
        $delete_service = DB::table('cra_client_service_at_reception')->where('id',$id)->delete();
        return redirect('/client-service');
    }

    //service-at-pickup

    //quotation

    public function Quotation(){
        $quotation = DB::table('cra_customer_quotation')->get();
        return view('client-management.Quotation',compact('quotation'));
    }


    public function addQuotation(Request $Request){

        $document_type = $Request['document'];
        $issue_date = $Request['issue'];
        $customer = $Request['client'];
        $client_ref_no = $Request['ref'];
        $currency = $Request['currency'];
        $exchange_rate = $Request['rate'];
        $approver = $Request['approver'];
        $bank_account = $Request['account'];
        $billing_information = $Request['Information'];
        $attender = $Request['attender'];
        $subject = $Request['subject'];
        $type = $Request['type'];
        $particulers_of_service_rendered = $Request['Rendered'];
        $amount = $Request['amount'];
        $vat = $Request['vat'];
        $comments = $Request['comments'];

        DB::table('cra_customer_quotation')->insert([
            'document_type' => $document_type ,
            'issue_date' => $issue_date,
            'customer' =>   $customer,
            'client_ref_no' => $client_ref_no,
            'currency' =>$currency,
            'exchange_rate' => $exchange_rate,
            'approver' =>  $approver,
            'bank_account' =>  $bank_account,
            'billing_information' =>  $billing_information,
            'attender' => $attender,
            'subject' => $subject,
            'type' =>  $type,
            'particulers_of_service_rendered' => $particulers_of_service_rendered,
            'amount' => $amount ,
            'vat' =>  $vat,
            'comments' => $comments,
        ]);
        return redirect('/Quotation');
    }


    public function editQuotation($id){
        $edit_quotation = DB::table('cra_customer_quotation')->where('id',$id)->first();
        return view('client-management.edit-Quotation',compact('edit_quotation','id'));
    }

    public function updateQuotation(Request $Request){

        $id            = $Request['id'];
        $document_type = $Request['document'];
        $issue_date = $Request['issue'];
        $customer = $Request['client'];
        $client_ref_no = $Request['ref'];
        $currency = $Request['currency'];
        $exchange_rate = $Request['rate'];
        $approver = $Request['approver'];
        $bank_account = $Request['account'];
        $billing_information = $Request['Information'];
        $attender = $Request['attender'];
        $subject = $Request['subject'];
        $type = $Request['type'];
        $particulers_of_service_rendered = $Request['Rendered'];
        $amount = $Request['amount'];
        $vat = $Request['vat'];
        $comments = $Request['comments'];

        DB::table('cra_customer_quotation')->where('id',$id)->update([
            'document_type' => $document_type ,
            'issue_date' => $issue_date,
            'customer' =>   $customer,
            'client_ref_no' => $client_ref_no,
            'currency' =>$currency,
            'exchange_rate' => $exchange_rate,
            'approver' =>  $approver,
            'bank_account' =>  $bank_account,
            'billing_information' =>  $billing_information,
            'attender' => $attender,
            'subject' => $subject,
            'type' =>  $type,
            'particulers_of_service_rendered' => $particulers_of_service_rendered,
            'amount' =>$amount,
            'vat' =>  $vat,
            'comments' => $comments,
        ]);
        return redirect('/Quotation');
    }

    public function deleteQuotation($id){
        $edit_quotation = DB::table('cra_customer_quotation')->where('id',$id)->delete();
        return redirect('/Quotation');
    }

    //end quotation


    //communication

    public function ListCommunication(){
        $list_communication = DB::table('cra_conversations')->get();
        return view('client-management.communication-list',compact('list_communication'));
    }

    public function addCommunication(Request $Request){
        $company_id=Auth::user()->company_id;
        $branch_id=Auth::user()->branch_id ?? null;
        $communication_date = $Request['date'];
        $client = $Request['Client'];
        $file = $Request['File'];
        $customer = $Request['Customer'];
        $telephone_no = $Request['telephone'];
        $email = $Request['Email'];
        $communication_source = $Request['Sources'];
        $mode_of_communication = $Request['Communication'];
        $communicated = $Request['Communicated'];
        $duration = $Request['Duration'];
        $person_handling = $Request['Handling'];
        $time = $Request['Timer'];
        $others = $Request['Others'];
        $communicated_description = $Request['Description'];
        $action_plan = $Request['Action'];

        DB::table('cra_conversations')->insert([
            'communication_date' => $communication_date,
            'client' =>   $client,
            'file' => $file,
            'customer' =>$customer,
            'telephone_no' => $telephone_no,
            'email' =>  $email,
            'communication_source' =>  $communication_source,
            'mode_of_communication' =>  $mode_of_communication,
            'communicated' => $communicated ,
            'duration' => $duration,
            'person_handling' =>  $person_handling,
            'time' =>  $time,
            'others' => $others ,
            'communicated_description' =>  $communicated_description,
            'action_plan' =>  $action_plan,
            'company_id'=>$company_id,
            'branch_id'=>$branch_id,
        ]);


        return redirect('/communication-list/'.$company_id);
    }


    public function indexCommunication(){
        return view('client-management.add-communication');
    }

    public function editCommunication($id){
        $edit = DB::table('cra_conversations')->where('id',$id)->first();
        return view('client-management.edit-communication',compact('edit','id'));
    }

    public function updateCommunication(Request $Request){

        $id                 = $Request['id'];
        $communication_date = $Request['date'];
        $client = $Request['Client'];
        $file = $Request['File'];
        $customer = $Request['Customer'];
        $telephone_no = $Request['telephone'];
        $email = $Request['Email'];
        $communication_source = $Request['Sources'];
        $mode_of_communication = $Request['Communication'];
        $communicated = $Request['Communicated'];
        $duration = $Request['Duration'];
        $person_handling = $Request['Handling'];
        $time = $Request['Timer'];
        $others = $Request['Others'];
        $communicated_description = $Request['Description'];
        $action_plan = $Request['Action'];


        DB::table('cra_conversations')->where('id',$id)->update([
            'communication_date' => $communication_date,
            'client' =>   $client,
            'file' => $file,
            'customer' =>$customer,
            'telephone_no' => $telephone_no,
            'email' =>  $email,
            'communication_source' =>  $communication_source,
            'mode_of_communication' =>  $mode_of_communication,
            'communicated' => $communicated ,
            'duration' => $duration,
            'person_handling' =>  $person_handling,
            'time' =>  $time,
            'others' => $others ,
            'communicated_description' =>  $communicated_description,
            'action_plan' =>  $action_plan,
        ]);

        return redirect('/communication-list');
    }

    public function deleteCommunication($id){
        $del_communication = DB::table('cra_conversations')->where('id',$id)->delete();
        return redirect('/communication-list');
    }


    //end communication

     //client-Search

    public function listSearch(){
        $list_search = DB::table('cra_client_search_detials')->get();
        return view('client-management.search-list',compact('list_search'));
    }

    public function addRegister(Request $Request){

        $client_type = $Request['type'];
        $client_category = $Request['Category'];
        $file_type = $Request['File'];
        $country = $Request['country'];
        $status = $Request['Status'];
        $registration_date = $Request['date'];

        DB::table('cra_client_search_detials')->insert([

            'client_type'     => $client_type,
            'client_category' => $client_category,
            'file_type'       => $file_type,
            'country'         => $country,
            'status'          => $status,
            'registration_date'=>$registration_date ,
        ]);

        return redirect('/search-list');
    }

  //end client-search




}
