@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
    <style>
  .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination {
margin: 0;
}

.pagination li:hover{
cursor: pointer;
}

.header_wrap {
padding:30px 0;
}
.num_rows {
width: 20%;
float:left;
}
.tb_search{
width: 20%;
float:right;
}
.pagination-container {
width: 70%;
float:left;
}

.rows_count {
width: 20%;
float:right;
text-align:right;
color: #999;
}
</style>     
    </head>
    <body>
        
         {{-- heading --}}
         <h4 id="hdtpa"><b>Instructions Past TAT</b></h4>
         

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

       
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                    <thead >
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Post <br> Date</th>
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

                            <td scope="row" class="text-center">{{$instruction->id}}</td>
                            <td scope="row" class="text-center">{{$instruction->Date_From}}</td>
                            <td scope="row" class="text-center">{{$instruction->Client_name}}</td>
                            <td scope="row" class="text-center">{{$instruction->file_name}}</td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center">
                                <select name="" id="">
                                    <option value=""> <a href="">Action</a> </option>
                                    <option value=""> <a href=""></a>Edit </option>
                                    <option value=""> <a href=""></a>Delete </option>
                                </select>
                            </td>
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