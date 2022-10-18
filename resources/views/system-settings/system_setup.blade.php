@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
<div class="container">
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css"
                href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
            <link rel="stylesheet" href="public/assets/css/logo">
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

   </head>
   <body>
   <p style="text-align:right;">

<a href="{{url('Knowledge_Base')}}"style="color:#1D1D50;">Knowledge Base</a> |
<a href="{{url('Referral_Program')}}"style="color:#1D1D50;">Referral Program</a> |
<a href="{{url('Write_us_Review')}}"style="color:#1D1D50;">Write us a Review</a> |
<a href="{{url('Send_Memo')}}"style="color:#1D1D50;">Send Memo</a> |
<a href="{{url('Calendar')}}"style="color:#1D1D50;">Calendar</a> |
<a href="{{url('Phone_Book')}}"style="color:#1D1D50;">Phone Book</a> |
<a href="{{url('Audit_Trail')}}"style="color:#1D1D50;">Audit Trail</a> |
<a href="{{url('Change_password')}}"style="color:#1D1D50;">Change password</a> |
<a href="{{url('Logout')}}"style="color:#1D1D50;">Logout</a> 
</p>
<br>
   <div>
        
        <button class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>System Setup</u></b></button><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
    </div>
    <!-- <h2 class="text-center">Configuration Details</h2><br> -->
    <button class="btn btn-primary float-left"
                    style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">Company Details</button><br><br><br>
    
  
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

<button class="btn btn-primary float-left"
style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">More Setups</button><br><br><br>
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
<button class="btn btn-primary float-left"
style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">System Menus</button><br><br><br>



    
  
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
      






    


   