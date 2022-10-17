<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addNewclient(){

        return view('client-management.add-newclient');
    }
    public function storeClient(Request $Request)
    {
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
        ]);
        
        return redirect('/client_list');

    }

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

         
        DB::table('cra_individual_client_details')->where('id',$id)->insert([
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

    // end individual
    
    public function document(){
        
        return view('client-management.client-document');
    }


    public function addDocument(){

        return view('client-management.add-document');
    }


    public function viewDocument(){

        return view('client-management.view-document');
    }

    //Pickup-client

    public function clientPickup(){
        $client_pickup = DB::table('cra_client_pickup_reception')->get();
        return view('client-management.client-pickup',compact('client_pickup'));
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


    public function complaintList(){
        return view('client-management.complaint-list');
    }



    public function addComplaint(){
        return view('client-management.add-complaint');
    }


    public function editComplaint(){
        return view('client-management.edit-complaint');
    }


    public function followup(){
        return view('client-management.follow-up');
    }


    public function addFollow(){
        return view('client-management.add-followup');
    }


    public function editFollow(){
        return view('client-management.edit-followup');
    }


    public function service(){
        return view('client-management.client-service');
    }


    public function addService(){
        return view('client-management.add-client-service');
    }


    public function Quotation(){
        return view('client-management.Quotation');
    }


    public function newQuotation(){
        return view('client-management.new-Quotation');
    }


    public function editQuotation(){
        return view('client-management.edit-Quotation');
    }


    public function customer(){
        return view('client-management.customer-registration');
    }


    public function addCustomer(){
        return view('client-management.add-customer');
    }


    public function editCustomer(){
        return view('client-management.edit-customer');
    }



    public function viewRegistration(){
        return view('client-management.view-registration');
    }



    public function addRegistration(){
        return view('client-management.add-registration');
    }



    public function editRegistration(){
        return view('client-management.edit-registration');
    }

    //communication

    public function listCommunication(){
        $list_communication = DB::table('cra_conversations')->get();
        return view('client-management.communication-list',compact('list_communication'));
    }

    
    public function indexCommunication(){
        return view('client-management.add-communication');
    }

    public function addCommunication(Request $Request){
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
        ]);

        return redirect('/communication-list');
    }


    public function editCommunication($id){
        $edit = DB::table('cra_conversations')->where('id',$id)->first();
        return view('client-management.edit-communication',compact('edit','id'));
    }

    //end communication
     //client-Search

    public function listSearch(){
        $list_search = DB::table('cra_client_search_detials')->get();
        return view('client-management.search-list',compact('list_search'));
    }


    public function registerClient(){
        return view('client-management.register-client');
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

    public function addCorporate(){

        return view('client-management.add-corporate');
    }

  

    public function storeCorporate(Request $Request){

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
            'Client_no' => $number,
            'Client_type' =>  $client_type,
            'Cityzen_status' => $citizen_status,
            'Certificate_of_incorporation' =>  $corporation,
            'Country' =>  $country,
            'Telephone_No' =>   $telephone,
            'Fax_no' =>  $fax_no,
            'Email_address' =>  $email,
            'Website' =>  $website ,
            'Brought_in_by' =>  $brought,
            'Status_reporting_day' =>  $status,
            'Client_source' => $source,
            'Client_source_naration' =>  $client_narration,
            'Client_name' =>    $client_name,
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


    public function listCorporate(){

        $corporate_list=DB::table('cra_corporate_client_details')->get();
        return view('client-management.corporate-list',compact('corporate_list'));
    }

    public function edit_corporate($id)
    {
        $corporate_details= DB::table('cra_corporate_client_details')->where('id',$id)->first();
        return view('client-management.edit_client',compact('corporate_details','id'));
    }

    public function Update_corporate(Request $Request){
        $id     = $Request['id'];
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

        DB::table('cra_corporate_client_details')->where('id',$id)->update([
            'Client_no' => $number,
            'Client_type' =>  $client_type,
            'Cityzen_status' => $citizen_status,
            'Certificate_of_incorporation' =>  $corporation,
            'Country' =>  $country,
            'Telephone_No' =>   $telephone,
            'Fax_no' =>  $fax_no,
            'Email_address' =>  $email,
            'Website' =>  $website ,
            'Brought_in_by' =>  $brought,
            'Status_reporting_day' =>  $status,
            'Client_source' => $source,
            'Client_source_naration' =>  $client_narration,
            'Client_name' =>    $client_name,
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


    public function Corporate_destroy($id){
        DB::table('cra_corporate_client_details')->where('id',$id)->delete();
        return redirect('/corporate-list');
    }
   
}