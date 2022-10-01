<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client-management.client-index');
    }


    public function view(){

        return view('client-management.client-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client-management.add-newclient');
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
    public function show()
    {
        return view('client-management.view-client');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_corporate()
    {
        return view('client-management.edit_client');
    }
    public function edit_person()
    {
        return view('client-management.edit_person');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function document(){
        
        return view('client-management.client-document');
    }


    public function addDocument(){

        return view('client-management.add-document');
    }


    public function viewDocument(){

        return view('client-management.view-document');
    }


    public function clientPickup(){
        return view('client-management.client-pickup');
    }


    public function addPickups(){
        return view('client-management.add-pickup');
    }


    public function viewPickups(){
        return view('client-management.view-pickup');
    }


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


    public function listCommunication(){
        return view('client-management.communication-list');
    }

    
    public function addCommunication(){
        return view('client-management.add-communication');
    }


    public function editCommunication(){
        return view('client-management.edit-communication');
    }


    public function listSearch(){
        return view('client-management.search-list');
    }


    public function registerClient(){
        return view('client-management.register-client');
    }


    public function addCorporate(){
        return view('client-management.add-corporate');
    }


    public function listCorporate(){
        return view('client-management.corporate-list');
    }
}