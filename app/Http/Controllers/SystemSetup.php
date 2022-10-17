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
    
////////////////////////COMPANY_DETAILS///////////////////////////////////
    public function company()
    {
        $company_details=DB::table('cra_company_details')->get();
        return view('system-settings.company_details',compact('company_details'));
     
     
    }
    public function addcompany(Request $Request)
    {
        $company_name= $Request['name'];
        $address = $Request['address'];
        $town_city = $Request['city'];
        $company_website = $Request['website'];
        $email= $Request['email'];
        $company_type= $Request['type'];
        $pin_no = $Request['pinnum'];
        $vat_no = $Request['vatnum'];
        $NHIF= $Request['nhifcode'];
        $NSSF_no = $Request['nnum'];
       
///////////////////////////////////////////////////////////////////
        $Add_Logo = $Request['image'];
        // $image=$request->input('image');
        if(!empty($Request->file('image'))){
            $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);}
            $input = $Request->all();

            if ($image = $Request->file('image')) {

                $destinationPath = 'image/company_details/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $paths = $profileImage;

            }else{
                $paths = '';
            }
////////////////////////////////////////////////////////////////////
        DB::table('cra_company_details')->insert([
            'company_name' => $company_name,
            'address' => $address,
            'town_city' => $town_city,
            'company_website' => $company_website,
            'email' => $email,
            'company_type' => $company_type,
            'pin_no' => $pin_no,
            'vat_no' => $vat_no,
            'NHIF' => $NHIF,
            'NSSF_no' => $NSSF_no,
            'Add_Logo' => $Add_Logo,
        ]);
   
       return view('system-settings.add_company_details');
     
    }
    public function editcompany($id)
    {
     $company_details= DB::table('cra_company_details')->where('id',$id)->first();
       return view('system-settings.edit_company_details',compact('company_details','id'));
     
    }
    public function updatecompany(Request $Request){
        $id     = $Request['id'];
        $company_name = $Request['name'];
        $address = $Request['address'];
        $town_city = $Request['city'];
        $company_website = $Request['website'];
        $email = $Request['email'];
        $company_type = $Request['type'];
        $pin_no = $Request['pinnum'];
        $vat_no = $Request['vatnum'];
        $NHIF = $Request['nhifcode'];
        $NSSF_no = $Request['nnum'];
//////////////////////////////////////////////////////////////////////////////////////////////
        $Add_Logo = $Request['image'];
        if(!empty($Request->file('image'))){
            $this->validate($Request, [

                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);}
            $input = $Request->all();

            if ($image = $Request->file('image')) {

                $destinationPath = 'image/medicine/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $paths = $profileImage;
            }

            else{
                $filtheimage=DB::table('cra_company_details')->where('id',$id)->first();
                $fetchimage=$filtheimage->upload_image;
                $paths=$fetchimage;
                 }
/////////////////////////////////////////////////////////////////////////////////////////////////
 $update_company_details = array(
            'company_name' => $company_name,
            'address' =>  $address,
            'town_city' => $town_city,
            'company_website' =>  $company_website,
            'email' =>  $email,
            'company_type' =>  $company_type,
            'pin_no' =>   $pin_no,
            'vat_no' =>  $vat_no,
            'NHIF' =>  $NHIF,
            'NSSF_no' =>  $NSSF_no ,
            'Add_Logo' =>  $Add_Logo,
            
        );
        DB::table('cra_company_details')->where('id', $id)->update( $update_company_details );
        return redirect('/company_details');

    }
    public function viewcompany()
    {
       return view('system-settings.view_company_details');
     
    }
    ////////////////////////END COMPANY_DETAILS///////////////////////////////////

////////////////////////WEEKEND & HOLIDAY///////////////////////////////////

    public function holiday()
    {
        $holiday_details=DB::table('cra_weekend_and_holiday')->get();
        return view('system-settings.weekend_holiday',compact('holiday_details'));
    }
  
    public function addholiday(Request $Request)
    {
        
        $Date = $Request['date'];
        $Day = $Request['day'];
     
        DB::table('cra_weekend_and_holiday')->insert([
            'Date' => $Date,
            'Day' => $Day,
        ]);
        
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
    public function editholiday($id)
    {
         $weekend_and_holiday=DB::table('cra_weekend_and_holiday')->where('id',$id)->first();
        return view('system-settings.edit_holiday',compact('weekend_and_holiday','id'));
        
    } 
  

    public function updateholiday(Request $Request)
    {
        $id = $Request['id'];
        $Date = $Request['date'];
        $Day = $Request['day'];
        
        $update_holiday = array(
            'Date' => $Date,
            'Day' =>  $Day,
        );
        DB::table('cra_weekend_and_holiday')->where('id', $id)->update( $update_holiday );
        return redirect('/weekend_holiday');
    }
    public function deleteholiday($id)
    {
        DB::table('cra_weekend_and_holiday')->where('id',$id)->delete();
        return redirect('/weekend_holiday');
    }
    ////////////////////////END WEEKEND & HOLIDAY///////////////////////////////////
    
    public function othrconftn()
    {
        return view('system-settings.other_confgn');
    }
        //////////////////////// COMPANY_BRANCH///////////////////////////////////
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
       //////////////////////// END COMPANY_BRANCH///////////////////////////////////

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
    ///////////////////////DESCRIPTION SELECTION//////////////////////////////////
    public function descriptionselection()
    {
        $description_selection=DB::table('cra_description_selection')->get();
        return view('system-settings.description_selectn',compact('description_selection'));
     }
    public function adddescsel(Request $Request)
    {
        $Description_Selection_Name = $Request['desselname'];
        $Selection_Description = $Request['seldes'];
        
        DB::table('cra_description_selection')->insert([
            'Description_Selection_Name' => $Description_Selection_Name,
            'Selection_Description' => $Selection_Description,
        ]);
        return view('system-settings.add_desc_sel');
    }

    public function editdescsel($id)
    {
        $description_selection=DB::table('cra_description_selection')->where('id',$id)->first();
        return view('system-settings.edit_desc_sel',compact('description_selection','id'));
    }

public function updatedescsel(Request $Request)
    {
        $id = $Request['id'];
        $Description_Selection_Name = $Request['desselname'];
        $Selection_Description = $Request['seldes'];
        
        $update_descsel = array(
            'Description_Selection_Name' => $Description_Selection_Name,
            'Selection_Description' =>  $Selection_Description,
        );
        DB::table('cra_description_selection')->where('id', $id)->update( $update_descsel );
        return redirect('/description_selectn');
    }
    public function deletedescsel($id)
    {
        DB::table('cra_description_selection')->where('id',$id)->delete();
        return redirect('/description_selectn');
    }
        ///////////////////////END DESCRIPTION SELECTION//////////////////////////////////

        //////////////////tax chart//////////////////////////////
    public function taxchart()
    {
        $tax_chart=DB::table('cra_tax_chart')->get();
        return view('system-settings.tax_chart',compact('tax_chart'));
    }
   
    public function addtaxchart(Request $Request)
    {
        $tax_brand=$Request['taxband'];
        $lower_limit=$Request['limit'];
        $upper_limit=$Request['ulimit'];
        $rate=$Request['rate'];
        $status=$Request['status'];
        $factor_with_housing=$Request['withhousing'];
        $factor_without_housing=$Request['wouthousing'];
        DB::table('cra_tax_chart')->insert([
            'tax_brand' => $tax_brand,
            'lower_limit' => $lower_limit,
            'upper_limit' => $upper_limit,
            'rate' => $rate,
            'status' => $status,
            'factor_with_housing' => $factor_with_housing,
            'factor_without_housing' => $factor_without_housing,
            
        ]);
        return view('system-settings.add_tax_chart');
    }
    public function edittaxchart($id)
    {
        $tax_chart=DB::table('cra_tax_chart')->where('id',$id)->first();
        return view('system-settings.edit_tax_chart',compact('tax_chart','id'));
    }

public function updatetaxchart(Request $Request)
    {
        $id = $Request['id'];
        $tax_brand=$Request['taxband'];
        $lower_limit=$Request['limit'];
        $upper_limit=$Request['ulimit'];
        $rate=$Request['rate'];
        $status=$Request['status'];
        $factor_with_housing=$Request['withhousing'];
        $factor_without_housing=$Request['wouthousing'];
        $update_taxchart = array(
            'tax_brand' => $tax_brand,
            'lower_limit' => $lower_limit,
            'upper_limit' => $upper_limit,
            'rate' => $rate,
            'status' => $status,
            'factor_with_housing' => $withhousing,
            'factor_without_housing' => $factor_without_housing,
            
        );
        DB::table('cra_tax_chart')->where('id', $id)->update( $update_taxchart );
        return redirect('/tax_chart');
    }
    public function deletetaxchart($id)
    {
        DB::table('cra_tax_chart')->where('id',$id)->delete();
        return redirect('/tax_chart');
    }
     /////////////////////////end tax chart//////////////////////////
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
