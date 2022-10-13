<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $branch_details=DB::table('cra_company_branch_details')->get();
        return view('system-settings.company_branch',compact('branch_details'));
    }


    public function addbranch(Request $Request)
    {
         $branch_no = $Request['bnum'];
        $branch_code = $Request['bcodes'];
        $branch_name = $Request['bname'];
        $address = $Request['paddress'];
        $physical_address = $Request['physicaladd'];
        $telephone = $Request['tel'];
        $mobile = $Request['mobile'];
        $fax = $Request['fax'];
        $town = $Request['town'];
         $email = $Request['email'];
        $website = $Request['website'];
   
       
DB::table('cra_company_branch_details')->insert([
            'branch_no' => $branch_no,
            'branch_code' => $branch_code,
            'branch_name' => $branch_name,
            'address' => $address,
            'physical_address' => $physical_address,
            'telephone' => $telephone,
            'mobile' => $mobile,
            'fax' => $fax,
            'town' => $town,
            'email' => $email,
            'website' => $website,
           
        ]);

     return view('system-settings.add_company_branch');
    }




    public function editbranch($id)
    {
        
        $company_branch_details= DB::table('cra_company_branch_details')->where('id',$id)->first();
        return view('system-settings.edit_company_branch',compact('company_branch_details','id'));
    
    }
    public function updatebranch(Request $Request){
        $id     = $Request['id'];
        $branch_no = $Request['bnum'];
      
        $branch_code = $Request['bcodes'];
        $branch_name = $Request['bname'];
        $address = $Request['paddress'];
        $physical_address = $Request['physicaladd'];
        $telephone = $Request['tel'];
        $mobile = $Request['mobile'];
        $fax = $Request['fax'];
        $town = $Request['town'];
        $email = $Request['email'];
        $website = $Request['website'];
     

        $update_company_branch = array(
            'branch_no' => $branch_no,
            'branch_code' =>  $branch_code,
            'branch_name' => $branch_name,
            'address' =>  $address,
            'physical_address' =>  $physical_address,
            'telephone' =>  $telephone,
            'mobile' =>   $mobile,
            'fax' =>  $fax,
            'town' =>  $town,
            'email' =>  $email ,
            'website' =>  $website,
            
        );
        DB::table('cra_company_branch_details')->where('id', $id)->update( $update_company_branch );
        return redirect('/company_branch');
    }
    public function deletebranch($id){
        DB::table('cra_company_branch_details')->where('id',$id)->delete();
        return redirect('/company_branch');
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
    public function editlettertype()
    {
        return view('system-settings.edit_letter_type');
    }
    public function paymentitem()
    {
        return view('system-settings.payment_items');
    }
    public function addpaymentitem()
    {
        return view('system-settings.add_payment_item');
    }
    public function editpaymentitem()
    {
        return view('system-settings.edit_payment_item');
    }
    public function descriptionselection()
    {
        return view('system-settings.description_selectn');
    }
    public function adddescsel()
    {
        return view('system-settings.add_desc_sel');
    }
    public function editdescsel()
    {
        return view('system-settings.edit_desc_sel');
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
    public function edittaxchart()
    {
        return view('system-settings.edit_tax_chart');
    }
    public function edittaxexcise()
    {
        return view('system-settings.edit_tax_excise');
    }
    public function edittaxvat()
    {
        return view('system-settings.edit_tax_vat');
    }
    public function edittaxwht()
    {
        return view('system-settings.edit_tax_wht');
    }

    public function edittaxwhtvat()
    {
        return view('system-settings.edit_tax_wht-vat');
    }
    
    public function notifications()
    {
        return view('system-settings.notifications');
    }

    public function templatecategory()
    {

        $template_category=DB::table('cra_template_category')->get();
        return view('system-settings.template_category',compact('template_category'));
    }

    public function addtemplatecategory(Request $Request)
    {
        $Template_Category = $Request['temcategory'];
            $Category_Type	 = $Request['cattype'];
         
    DB::table('cra_template_category')->insert([
                'Template_Category' => $Template_Category,
                'Category_Type' => $Category_Type,
                
            ]);
    
        return view('system-settings.add_template_category');
    }
    public function documenttemplatecategory()
    {
        return view('system-settings.document_template_category');
    }



    public function edittemplatecategory($id)
    {
        $template=DB::table('cra_template_category')->where('id',$id)->get();
        return view('system-settings.edit_template_category',compact('template','id'));
    }

    public function update_template_category(Request $Request){
  
        $Template_Category=$Request['temcategory'];
        $Category_Type=$Request['cattype'];
        $edittemplate=array('temcategory'=>$Template_Category,'cattype'=> $Category_Type);
        DB::table('cra_template_category')->where('id',$id)->update($edittemplate);
        return back()->withInput();
    }



    public function pairedaccount()
    {
        return view('system-settings.paired_account');
    }
    public function addaccountpairs()
    {
        return view('system-settings.add_account_pairs');
    }
    public function editaccountpairs()
    {
        return view('system-settings.edit_account_pairs');
    }
    public function filetypes()
    {
        return view('system-settings.file_types');
    }
    public function addfiletypes()
    {
        return view('system-settings.add_file_types');
    }
    public function editfiletypes()
    {
        return view('system-settings.edit_file_types');
    }
    public function invoiceitems()
    {
        return view('system-settings.invoice_items');
    }
    public function addinvoiceitem()
    {
        return view('system-settings.add_invoice_item');
    }
    public function editinvoiceitem()
    {
        return view('system-settings.edit_invoice_item');
    }
    public function addglaccount()
    {
        return view('system-settings.add_gl_account');
    }
    public function currencylist()
    {
        return view('system-settings.currency_list');
    }
    public function addcurrency()
    {
        return view('system-settings.add_currency');
    }
    public function editcurrency()
    {
        return view('system-settings.edit_currency');
    }
    public function manageuseraccount()
    {
        return view('system-settings.manage_user_account');
    }
    public function useredit()
    {
        return view('system-settings.user_edit');
    }
    public function regnewuser()
    {
        return view('system-settings.reg_new_user');
    }
    public function attachments()
    {
        return view('system-settings.user_attachments');
    }
    public function comments()
    {
        return view('system-settings.user_comments');
    }
    public function changepassword()
    {
        return view('system-settings.change_user_password');
    }
    public function manageusergrp()
    {
        return view('system-settings.manage_user_group');
    }
    public function addnewusergrp()
    {
        return view('system-settings.add_new_user_grp');
    }
    public function editnewusergrp()
    {
        return view('system-settings.edit_new_user_grp');
    }
    public function rolesperuser()
    {
        return view('system-settings.view_roles_per_user');
    }
    public function editviewroles()
    {
        return view('system-settings.edit_view_roles');
    }
    

    public function manageuserroles()
    {
        return view('system-settings.manage_user_roles');
    }
    public function adduserrole()
    {
        return view('system-settings.add_user_roles');
    }
    public function edituserrole()
    {
        return view('system-settings.edit_user_roles');
    }
    public function manageuserdepartment()
    {
        return view('system-settings.manage_user_department');
    }
    public function adduserdepartment()
    {
        return view('system-settings.add_user_department');
    }
    public function edituserdepartment()
    {
        return view('system-settings.edit_user_department');
    }
    public function advocatestarget()
    {
        return view('system-settings.advocates_target');
    }
    public function addnew()
    {
        return view('system-settings.add_new_entry');
    }
    public function editadvocatetarget()
    {
        return view('system-settings.edit_advocate_target');
    }
    public function advocatestarget2021()
    {
        return view('system-settings.advocates_target_2021');
    }
    public function advocatestarget2022()
    {
        return view('system-settings.advocates_target_2022');
    }
    public function advocatestarget2023()
    {
        return view('system-settings.advocates_target_2023');
    }
    public function advocatestarget2024()
    {
        return view('system-settings.advocates_target_2024');
    }
    public function advocatestarget2025()
    {
        return view('system-settings.advocates_target_2025');
    }
    public function advocatestarget2026()
    {
        return view('system-settings.advocates_target_2026');
    }
    public function databasebackup()
    {
        return view('system-settings.database_backup');
    }
  
    public function transportzone()
    {
        $transportzone=DB::table('cra_transport_zone')->get();

        return view('system-settings.transport_zones',compact('transportzone'));
    }

    public function addtransportzone(Request $Request)
    {
        $zone_name = $Request['zone_name'];
        $zone_areas = $Request['zone_areas'];
        $cost = $Request['cost'];

        DB::table('cra_transport_zone')->insert([
            'zone_name' => $zone_name,
            'zone_areas' =>  $zone_areas,
            'cost' =>  $cost,
        ]);

       return view('system-settings.add_transport_zone');
    }


    public function edittransportzone()
    {
        return view('system-settings.edit_transport_zone');
    }
    public function billableactivities()
    {
        return view('system-settings.billable_activities');
    }
    public function addbillableactivities()
    {
        return view('system-settings.add_billable_activities');
    }
    public function editbillableactivities()
    {
        return view('system-settings.edit_billable_activities');
    }

    public function bankdetails()
    {
        
        $bank_details=DB::table('cra_bank_details')->get();
        
        return view('system-settings.bank_details',compact('bank_details'));
    }


    public function addbankaccount(Request $Request)
    {
        $bank = $Request['bank'];
        $branch = $Request['branch'];
        $account_name = $Request['account_name'];
        $account_no = $Request['account_no'];
        $bank_code = $Request['bank_code'];
        $branch_code = $Request['branch_code'];
        $swift_code = $Request['swift_code'];
        $mpesa_no = $Request['mpesa_no'];
        $bank_gl_ac = $Request['bank_gl_ac'];

        DB::table('cra_bank_details')->insert([
            'bank' => $bank,
            'branch' => $branch,
            'account_name' => $account_name,
            'account_number' => $account_no,
            'bank_code' =>  $bank_code,
            'branch_code' => $branch_code,
            'swift_code' => $swift_code,
            'mpesa_code' =>$mpesa_no,
            'bank_gl_ac' =>$bank_gl_ac,
           
        ]);
  

        return view('system-settings.add_bank_account');
    }
    
    public function editbankaccount()
    {
        return view('system-settings.edit_bank_account');
    }
    public function bankdocument()
    {
        return view('system-settings.add_bank_document');
    }
  
    public function leavedays()
    {
        return view('system-settings.leave_days_year');
    }
  
    public function addleavedays()
    {
        return view('system-settings.add_leave_days');
    }
    public function editleavedays()
    {
        return view('system-settings.edit_leave_days');
    }
    public function hourlyrates()
    {
        return view('system-settings.hourly_rates');
    }
    public function addhourlyrates()
    {
        return view('system-settings.add_hourly_rates');
    }
    public function edithourlyrates()
    {
        return view('system-settings.edit_hourly_rates');
    }
    public function partnerrevenueshare()
    {
        return view('system-settings.partner_revenue_share');
    }
    public function addpartnerrevenue()
    {
        return view('system-settings.add_partner_revenue');
    }
    public function menuaccess()
    {
        return view('system-settings.menu_access_configuration');
    }
    public function usefullinks()
    {
        return view('system-settings.useful_links');
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
