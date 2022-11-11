@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
<head>
  

    <style>
   

    /* tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}   */
    </style>

</head>



    <body>
        <div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>View
                        Roles </u></b></span></button><br> -->
                        {{-- heading --}}
    <h4 id="hdtpa"><b>View Roles</b></h4>
    <br>
           
        </div>
        <div class="container">
    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>
         
        </div>
      </div>
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
    </div>
   
       
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Roles per User</h3>
<div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">

                <thead>

                    <tr>
                        <th class="text-center">User ID</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">User Group</th>
                        <th class="text-center">User Roles</th>
                        <th class="text-center">Edit</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"><a href="{{url('edit_view_roles')}}"><i style="color:black;" class="fa fa-edit" aria-hidden="true"></i></td>


                    </tr>
                </tbody>


            </table><br>
        </div>
        <!--		Start Pagination -->
    <div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->
    </body>
</div>
</html>

@endsection