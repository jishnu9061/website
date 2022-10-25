
@extends('layouts.hmsmain')
@section('content')
<html>
  
   <head>
 
   <style>

          body
        {
          background-color: white;
        }

             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}


          </style>
   </head>
   <body>

      {{-- heading --}}
      <h4 id="hdtpa"><b>Fee Notes / DRN / Interim Fee Notes</b></h4>
      <br><br>

            <br>
    <a href="{{('new_drn_fee_notes')}}"><button class="btn btn-primary add-btn" style="width=10%;height=100%;">New Fee Note</button></a> <br>
            <br>
    


    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;"><b>Client Fee Notes</b></h3>
    <div class="table-responsive">    
    <table class="table table-bordered" id="new-item">
      
      <thead>

                        <tr>
                        <th class="text-center" >*</th>
                        <th class="text-center" >Issue Date</th>
                        <th class="text-center" >Name</th>
                        <th class="text-center" >Doc Type</th>
                        <th class="text-center" >Doc No</th>
                        <th class="text-center" >Client</th>
                        <th class="text-center" >File No</th>
                        <th class="text-center" >File Name </th>
                        <th class="text-center" >Balance Amount</th>
                        <th class="text-center" >User Assigned</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                        <th class="text-center"><input type="checkbox"></th>
                    </tr>
</thead>
             <tbody>
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"style="color:rgb(13, 1, 56);">
                      <div class="dropdown">
                            <button style="background-color:#FFFBF4;"class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="" class="dropdown-item" ></a>
                                <a href=""class="dropdown-item" ></a>
                                <a href="" class="dropdown-item" ></a>
                              
                             
                            </div>
                        </div> 

                       </td>
                     
                     </tr>
                     </tbody>
               
                    </table><br>
</div>        
        </body>
            
</html>

  @endsection
      














   