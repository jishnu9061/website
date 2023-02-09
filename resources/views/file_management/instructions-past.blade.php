@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
  <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
  <a href="#" style="color: #1D1D50;">File Management</a> /
  <a href="#" style="color: #1D1D50;">Instructions Past TAT</a>
</nav>
<br><br>
<html>
    <head>
    <style>

</style>
    </head>
    <body>
    <div class="container">


         {{-- heading --}}
         <h4 id="hdtpa"><b>Instructions Past TAT</b></h4>



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
                    <thead >
                        <tr>
                            <!-- <th class="text-center">ID</th> -->
                            <th class="text-center">Post Date</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File</th>
                            <th class="text-center">Sender</th>
                            <th class="text-center">Receiver</th>
                            <th class="text-center">Details</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">TAT<br> Date</th>
                            <th class="text-center">TAT<br> Period</th>
                            <th class="text-center">Duration<br> Past<br> TAT</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </thead>




                    <tbody>
                    @foreach($instruction_past as $instruction)
                        <tr id="data">

                            <!-- <td scope="row" class="text-center">{{$instruction->id}}</td> -->
                            <td scope="row" class="text-center">{{$instruction->Date_From}}</td>
                            <td scope="row" class="text-center">{{$instruction->client_name}}</td>
                            <td scope="row" class="text-center">{{$instruction->file_name}}</td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td  scope="row"class="text-center">
                        <a href=""><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>


                        <a href=""> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>
</div>
</body>
</html>
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
