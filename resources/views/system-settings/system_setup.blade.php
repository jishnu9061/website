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
          body
        {
          background-color: white;
        }
        h2
        {
            font-size:large;
            font-weight:bold;
             color:rgb(13, 1, 56); 
             background-color:rgb(177, 127, 62);
             padding:15px;
            }
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
         /* background-color:#f0e7ce;  */
         height:350px;
         }
         
         
         h3
        {
            font-size:medium;
            font-weight:bold;
             color:white;
             background-color:rgb(13, 1, 56);
             padding:10px;
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
 
        <div class="row">
            <div class="col-sm">
                <h3> Company Details</h3>
                <table class="table">
                    <tbody>
                        <ul>
                        <tr>
                            <td style="width:30%"><li ><a href="{{url('company_details')}}" >Company</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('weekend_holiday')}}" >Weekends and Holidays</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('other_confgn')}}" >Other Configurations</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Paired Accounts</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >File Types</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Invoice Items</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Currency List</li></a></td>
                           </tr>
                        </ul>
        </tbody>
    </table>
</div>
<div class="col-sm">
     <h3>User Accounts</h3>
      <table class="table">
        <tbody>
            <ul>
                <tr>
                    <td style="width:30%"><li ><a href="{{url('')}}" >Manage User Accounts</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Change User Password</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Manage User Groups</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >View Roles per User</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Manage User Roles</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Manage User Departments</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Advocates Targets</li></a></td>
                           </tr>
                           
                        </ul>

         </tbody>
         
      </table> 
     
        </div>

        </div>

<br>
<br>
<br>


<div class="row">
    <div class="col-sm">
     <h3>Other Settings</h3>
     <table class="table">
        <tbody>
        <ul>
                <tr>
                    <td style="width:30%"><li ><a href="{{url('')}}" >Database Backup</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Transport Zones</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Billable Activities</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Bank Account Details</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Leaves Days per Year</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Hourly Rates</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Partner Revenue Share</li></a></td>
                           </tr>
                           
                        </ul>
       
        </tbody>
      </table>

        </div>
      <br>

     
      
    <div class="col-sm">
     <h3>System Menus</h3>
      <table class="table">
        <tbody>
              <ul>
                <tr>
                    <td style="width:30%"><li ><a href="{{url('')}}" >Menu Access Configuration</li></a></td>
                           </tr>
                           <tr>
                            <td style="width:30%"><li><a href="{{url('')}}" >Useful Links</li></a></td>
                           </tr>
                          </ul>
    </tbody>
      </table> 

        </div>
        </div>
        
   
    
        </body>
</html>
  @endsection
      










    


   