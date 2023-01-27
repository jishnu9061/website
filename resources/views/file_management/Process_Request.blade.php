@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:12px;">
      <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
      <a href="#" style="color: #1D1D50;">File Management-Process Request</a>
</nav>
<br><br>
 {{-- heading --}}
 <html>
    <head>
    <style>
 
</style>    
    </head>
 <div class="container">

 <h4 id="hdtpa"><b>Process Request</b></h4>
 


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
   

       
            <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                    <thead style="font-size:15px; width:100%;">
                        <tr>
                            <th class="text-center">Req.ID</th>
                            <th class="text-center">Requested By</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File NO</th>
                            <th class="text-center">File Name</th>
                            <th class="text-center">Documents</th>
                            <th class="text-center">Approved By</th>
                           

                            </th>


                        </tr>
                    </thead>

                    <tbody>

                        <tr id="data">

                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                           


                        </tr>



                    </tbody>

                </table>
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
 
                <!-- The Modal -->
                
        {{-- Supplier Edit End --}}
        @endsection