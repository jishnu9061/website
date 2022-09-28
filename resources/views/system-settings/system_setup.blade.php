@extends('layouts.hmsmain')
@section('content')
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
      <style >
     
     
         .container{
         margin-left:0px;
         width:auto;
         border:1px solid black;
         height:100%;
         }
        
         .col-sm
         {
        margin-left:2px;
         margin-top:6px;
         width:400px;
         /* background-color:#f0e7ce; */
         height:350px;
         }
         
         
     
     
            form{
                margin-left:4px;
            }
            table{
                background-color:#f0e7ce; 
                border:hidden;
                font-size:medium;
                color:black;
            
            }
           th,td,tr{
            border:hidden;
            color:black;

           }
           li
           {
            color:blue;
          }
           
       </style>
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
    <div class="col-sm-4 " > <a href="{{url('letter_types')}}"><button type="button" class="btn btn-primary btn_align_btn" > Paired Accounts</button></a></div>
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

<form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form>

</body>
</html>
  @endsection
      










    


   