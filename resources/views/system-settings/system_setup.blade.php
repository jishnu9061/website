@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Company</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="public/assets/css/logo">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

   </head>
   <body>
    <!-- <h2 class="text-center">Configuration Details</h2><br> -->
    <h4 style="text-align:center;">Company Details</h4>
    <hr class="mb-4">.
    <div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('company_details')}}"><button type="button" class="btn btn-primary btn_align_btn" > Company</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('weekend_holiday')}}"><button type="button" class="btn btn-primary btn_align_btn" >Weekends &  Holidays</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('other_confgn')}}"><button type="button" class="btn btn-primary btn_align_btn" >Other Configurations</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Paired Accounts</button></a></div>
    <div class="col-sm-4 " > <a><button type="button" class="btn btn-primary btn_align_btn" > File Types</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Invoice Items</button></a></div>
    <div class="col-sm-4" > <a><button type="button" class="btn btn-primary btn_align_btn" > Currency List</button></a></div>
</div>
</div>

<h4 style="text-align:center; ">User Accounts</h4>
    <hr class="mb-4">.
    <div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Manage User Accounts</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Change User Password</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" >Manage User Groups</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > View Roles per User</button></a></div>
    <div class="col-sm-4 " > <a><button type="button" class="btn btn-primary btn_align_btn" > Manage User Roles</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Manage User Departments</button></a></div>
    <div class="col-sm-4" > <a><button type="button" class="btn btn-primary btn_align_btn" > Advocates Targets</button></a></div>
</div>
</div>

<h4 style="text-align:center;">Other Settings</h4>
    <hr class="mb-4">.
    <div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Database Backup</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Transport Zones</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" >Billable Activities</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Bank Account Details</button></a></div>
    <div class="col-sm-4 " > <a><button type="button" class="btn btn-primary btn_align_btn" > Leaves Days per Year</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Hourly Rates</button></a></div>
    <div class="col-sm-4" > <a><button type="button" class="btn btn-primary btn_align_btn" >Partner Revenue Share</button></a></div>
</div>
</div>

<h4 style="text-align:center;">System Menus</h4>
    <hr class="mb-4">.
    <div class="container-fluid">
  
  <div class="row sm">
    <div class="col-sm-4 " ><a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Menu Access Configuration</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('')}}"><button type="button" class="btn btn-primary btn_align_btn" > Useful Links</button></a></div>
        </div>
</div>

<!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->

</body>
</html>
  @endsection
      










    


   