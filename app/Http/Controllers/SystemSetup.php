<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemSetup extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
        public function index()
    {
       return view('system-settings.system_setup');
     
    }
    public function company()
    {
       return view('system-settings.company_details');
     
    }
    public function addcompany()
    {
       return view('system-settings.add_company_details');
     
    }
    public function editcompany()
    {
       return view('system-settings.edit_company_details');
     
    }
    public function viewcompany()
    {
       return view('system-settings.view_company_details');
     
    }
    public function holiday()
    {
        return view('system-settings.weekend_holiday');
    }
    public function addholiday()
    {
        return view('system-settings.add_new_holiday');
    }
    public function holiday2017()
    {
        return view('system-settings.holiday_2017');
    }
    public function holiday2018()
    {
        return view('system-settings.holiday_2018');
    }
    public function holiday2019()
    {
        return view('system-settings.holiday_2019');
    }
    public function holiday2020()
    {
        return view('system-settings.holiday_2020');
    }
    public function holiday2021()
    {
        return view('system-settings.holiday_2021');
    }
    public function holiday2022()
    {
        return view('system-settings.holiday_2022');
    }
    public function editholiday()
    {
        return view('system-settings.edit_holiday');
    }
    public function othrconftn()
    {
        return view('system-settings.other_confgn');
    }
    public function branch()
    {
        return view('system-settings.company_branch');
    }
    public function addbranch()
    {
        return view('system-settings.add_company_branch');
    }
    public function editbranch()
    {
        return view('system-settings.edit_company_branch');
    }
    public function Configtn()
    {
        return view('system-settings.configu_ration');
    }
    public function Courts()
    {
        return view('system-settings.courts');
    }
    public function addcourt()
    {
        return view('system-settings.add_court');
    }
    public function editcourt()
    {
        return view('system-settings.edit_court');
    }
    public function addcourtcategory()
    {
        return view('system-settings.add_court_category');
    }
    public function lettertype()
    {
        return view('system-settings.letter_types');
    }
    public function addlettercategory()
    {
        return view('system-settings.add_letter_category');
    }
    public function documentlettercategory()
    {
        return view('system-settings.document_letter_category');
    }
    public function paymentitem()
    {
        return view('system-settings.payment_items');
    }
    public function addpaymentitem()
    {
        return view('system-settings.add_payment_item');
    }
    public function descriptionselection()
    {
        return view('system-settings.description_selectn');
    }
    public function descsel()
    {
        return view('system-settings.add_desc_sel');
    }
    public function taxchart()
    {
        return view('system-settings.tax_chart');
    }
    public function addtaxchart()
    {
        return view('system-settings.add_tax_chart');
    }
    public function addtaxexcise()
    {
        return view('system-settings.add_tax_excise');
    }
    public function addtaxvat()
    {
        return view('system-settings.add_tax_vat');
    }
    public function addtaxwht()
    {
        return view('system-settings.add_tax_wht');
    }

    public function addtaxwhtvat()
    {
        return view('system-settings.add_tax_wht-vat');
    }
    
    public function notifications()
    {
        return view('system-settings.notifications');
    }
    public function templatecategory()
    {
        return view('system-settings.template_category');
    }
    public function addtemplatecategory()
    {
        return view('system-settings.add_template_category');
    }
    public function documenttemplatecategory()
    {
        return view('system-settings.document_template_category');
    }
    public function edittemplatecategory()
    {
        return view('system-settings.edit_template_category');
    }


   



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
