@extends('layouts.hmsmain')
@section('content')

 
   <p style="text-align:right;">

<a href="{{url('Knowledge_Base')}}"style="color:#1D1D50;">Knowledge Base</a> |
<a href="{{url('Referral_Program')}}"style="color:#1D1D50;">Referral Program</a> |
<a href="{{url('Write_us_Review')}}"style="color:#1D1D50;">Write us a Review</a> |
<a href="{{url('Send_Memo')}}"style="color:#1D1D50;">Send Memo</a> |
<a href="{{url('Calendar')}}"style="color:#1D1D50;">Calendar</a> |
<a href="{{url('Phone_Book')}}"style="color:#1D1D50;">Phone Book</a> |
<a href="{{url('Audit_Trail')}}"style="color:#1D1D50;">Audit Trail</a> |
<a href="{{url('Change_password')}}"style="color:#1D1D50;">Change pasword</a> |
<a href="{{url('Logout')}}"style="color:#1D1D50;">Logout</a> 
</p>
<br>
  
        
 {{-- heading --}}
 <h4 id="hdtpa"><b>System Setup</b></h4>
 <br><br>
      
    
       {{--sub heading --}}
       <h5 id="hdbtb">Company Details</h5>
       <br>
  
    
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('company_details')}}"><img class="logo_size"src="assets\image\Company.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Company</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('weekend_holiday')}}"><img class="logo_size"src="assets\image\Weekend and Holidays.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >Weekends &  Holidays</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('other_confgn')}}"><img class="logo_size"src="assets\image\Other Configurations.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >Other Configurations</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('paired_account')}}"><img class="logo_size"src="assets\image\Paired Accounts.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Paired Accounts</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('file_types')}}"><img class="logo_size"src="assets\image\File Types.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > File Types</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('invoice_items')}}"><img class="logo_size"src="assets\image\Invoice Items.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Invoice Items</button></a></div>
    <div class="col-sm-4" > <a href="{{url('currency_list')}}"><img class="logo_size"src="assets\image\Currency List.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Currency List</button></a></div>

</div>
<br>
<h5 id="hdbtb">More Setups</h5>
<br>


<div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('database_backup')}}"><img class="logo_size"src="assets\image\Database backup.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Database Backup</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('transport_zones')}}"><img class="logo_size"src="assets\image\Transport zones.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Transport Zones</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('billable_activities')}}"><img class="logo_size"src="assets\image\Billable activity.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Billable Activities</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('bank_details')}}"><img class="logo_size"src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Bank Account Details</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('leave_days_year')}}"><img class="logo_size"src="assets\image\Leaves day per year.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Leaves Days per Year</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('hourly_rates')}}"><img class="logo_size"src="assets\image\Hourly rates.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Hourly Rates</button></a></div>
    <div class="col-sm-4" > <a href="{{url('partner_revenue_share')}}"><img class="logo_size"src="assets\image\Partner revenue share.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Partner Revenue Share</button></a></div>
</div>
<br>
<h5 id="hdbtb">System Menus</h5>
<br>






    
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('menu_access_configuration')}}"><img class="logo_size"src="assets\image\Menu access configuration.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Menu Access Configuration</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('useful_links')}}"><img class="logo_size"src="assets\image\Useful links.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" > Useful Links</button></a></div>
        </div>



<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->

</body>
</div>
</html>
  @endsection
      






    


   