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
   <div>
        
        <div class="btn btn-primary"
        style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Client Invoicing</u></b></div><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
    </div>
    <!-- <h2 class="text-center">Configuration Details</h2><br> -->
    <div class="btn btn-primary float-left"
                    style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">Billable Items</div><br><br><br>
    <div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('')}}"><img class="logo_size"src="assets\image\Company.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Capture Billable Item</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Weekend and Holidays.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >View Billable Item</button></a></div>
   
</div>
</div>
<br>
<div class="btn btn-primary float-left"
style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">Fee Notes & Credit</div><br><br><br>
    <div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('')}}"><img class="logo_size"src="assets\image\Manage User Accounts.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Notes / DRN / Interim Fee Notes</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Change user password.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Credit Notes</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Manage user group.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Qutation / Perfoma Fee Notes</button></a></div>
    
    
</div>
</div>
<br>
<div class="btn btn-primary float-left"
style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">Receipts</div><br><br><br>
<div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('')}}"><img class="logo_size"src="assets\image\Database backup.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Issue Client Receipt</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Transport zones.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Receipt Re-Print</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Billable activity.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Reverce Receipt</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Receipts Report</button></a></div>
    
</div>
<br>
<div class="btn btn-primary float-left"
style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">Reports</div><br><br><br>



    <div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('')}}"><img class="logo_size"src="assets\image\Menu access configuration.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" >Debtors Aging Reports</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Useful links.png" alt=""><button type="button"style="width:70%;" class="btn btn-primary btn_align_btn" >Debtors List</button></a></div>
    <div class="col-sm-4 " ><a href="{{url('')}}"><img class="logo_size"src="assets\image\Database backup.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Note Item Billed</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Transport zones.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Note Item Received</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Billable activity.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Outstanding Fee Note Report</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Other Reports</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Billable activity.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Quotation Item Receipt</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><img class="logo_size"src="assets\image\Bank account detail.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Fee Expected Per Advocate</button></a></div>
    
    
 </div>
</div>


<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->

</body>
</div>
</html>
  @endsection
      






    


   