@extends('layouts.hmsmain')
@section('content')

{{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


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
    <div class="container">
        <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Client
                    Conversation</u></b></div><br><br> -->
            {{-- heading --}}
            <h4 id="hdtpa"><b>Client Conversation</b></h4>
            <br>

            <div>
                <button type="submit" class="btn btn-primary float:right;" data-toggle="modal" data-target="#myModal"
                    Style="width:18%;">Add Comminication</button>
                <a href="{{url('client-pickup')}}"><button type="submit" class="btn btn-primary float:right;"
                        Style="width:14%;">Client Pickup</button></a>
                <a href="{{url('client-service')}}"><button type="submit" class="btn btn-primary float:right;"
                        Style="width:14%;"> Client Services</button></a>
                <button type="submit" class="btn btn-primary float:right;" Style="width:13%;">Client Portal</button>
                <button type="submit" class="btn btn-primary float:right;" Style="width:16%;">Internal Message</button>
                <button type="submit" class="btn btn-primary float:right;" Style="width:11%;">Phone Log</button>
                <button type="submit" class="btn btn-primary float:right;" Style="width:11%;">Email Log</button>
            </div>
           
            <br>

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

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
                        <thead>
                            <tr>
                                <th class="text-center">Date</th>
                                <th class="text-center">Time</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">File</th>
                                <th class="text-center">Telephone</th>
                                <th class="text-center">Mode</th>
                                <th class="text-center">Communicated</th>
                                <th class="text-center">Nature</th>
                                <th class="text-center">Person</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_communication as $communication)
                            <tr id="data">
                                <td scope="row" class="text-center" id="medicine_name_1">
                                    {{$communication->	communication_date}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$communication->	time}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$communication->	client}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$communication->	file}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">
                                    {{$communication->	telephone_no}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">
                                    {{$communication->	mode_of_communication}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">
                                    {{$communication->	communicated}}
                                </td>
                                <td scope="row" class="text-center" id="medicine_name_1">
                                    {{$communication->	communication_date}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">
                                    {{$communication->	person_handling}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">Active</td>
                                <td class="text-center"><a href="{{url('edit-communication',$communication->id)}}"><i style="color:black;"
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                            <span class="m-1"><span>
                                        <a onClick="return myFunction();"
                                            href="{{url('delete-communication',$communication->id)}}" style="color:black;"><i
                                                class="fas fa-trash-alt"></i></a>
                                </td>

                            </tr>
                            @endforeach
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


                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="text-center"><b>Add Communication</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="post" action="{{url('add-communication')}}" id="form">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication Date</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="date" class="form-control" name="date"
                                                                        id="date" value="" placeholder="" required>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Date is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Time</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="time" class="form-control" name="Timer"
                                                                        id="username" value="" placeholder="" required>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Date is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Client</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Client" id="cars">
                                                                        <option>Select</option>
                                                                        <option>Client Category1
                                                                        </option>
                                                                        <option>Client Category2
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">File </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <select name="File" id="cars">
                                                                        <option>Select</option>
                                                                        <option>Type 1</option>
                                                                        <option>Type 2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Customer</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Customer" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Telephone Number</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="telephone" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">E-mail</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control" name="Email"
                                                                        id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication Source</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Sources" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Mode of Communication</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Communication" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication With </label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Communicated" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Duration (Minutes)</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Duration" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Communication Description</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Description" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Action Plan</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Action" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Person Handling</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="Handling" id="cars">
                                                                        <option>Select</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 1</option>
                                                                        <option>demo 3</option>
                                                                        <option>demo 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Other</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        name="Others" id="age">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Incorporation is required
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">
                                                            <br>
                                                            <button type="submit" class="btn btn-primary float:right;"
                                                                Style="width:45%;">Save</button>
                                                            <button type="button" class="btn btn-primary float:left"
                                                                Style="width:45%;">Cancel</button>
                                                        </div>
                                                    </div>

                                            </div>
                                            <br>

                                        </div>
                                        <script>
                                        function myFunction() {
                                            if (!confirm("Are you sure to delete this"))
                                                event.preventDefault();
                                        }
                                        </script>
                                        <script>
                                        $(function() {
                                            $("#new-item").dataTable();
                                        })
                                        </script>

                                        {{-- Search booking script --}}
                                        <script>
                                        $(document).ready(function() {
                                            $('.searchingBook').select2();
                                        });
                                        </script>
                                        {{-- search booking script end --}}
                                        <!-- Delete  confirmation Message -->
                                        <script>
                                        function myFunction() {
                                            if (!confirm("Are you sure to delete this"))
                                                event.preventDefault();
                                        }
                                        </script>
                                        <!-- End delete confirmation message -->

                                        <script src="{{ url('assets/js') }}/jquery.min.js"></script>
                                        <script type="text/javascript" charset="utf8"
                                            src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
                                        </script>
                                        <script type="text/javascript" charset="utf8"
                                            src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js">
                                        </script>

                                        {{-- Supplier Edit start --}}

                                        <script>
                                        $(document).on('click', '#edit_medicine_details', function() {

                                            var medicine_id_hidden = $(this).closest('#data').find(
                                                '#medicine_id_hidden').val();
                                            var medicine_name = $(this).closest('#data').find(
                                                    '#medicine_name_1')
                                                .val();
                                            var medicine_brand_name = $(this).closest('#data').find(
                                                '#medicine_brand_name').val();
                                            var medicine_group = $(this).closest('#data').find(
                                                    '#medicine_group')
                                                .val();
                                            var medicicine_category_name = $(this).closest('#data').find(
                                                '#medicine_category_name1').val();
                                            var medicine_generic_name = $(this).closest('#data').find(
                                                '#medicine_generic_name').val();
                                            var medicine_manufactuure_name = $(this).closest('#data').find(
                                                '#medicine_manufactuure_name').val();
                                            var medicine_supplier_name = $(this).closest('#data').find(
                                                '#medicine_supplier_name').val();
                                            var medicine_minimum_level = $(this).closest('#data').find(
                                                '#medicine_minimum_level').val();
                                            var medicine_reorder_level = $(this).closest('#data').find(
                                                '#medicine_reorder_level').val();
                                            var medicine_unit_packing = $(this).closest('#data').find(
                                                '#medicine_unit_packing').val();
                                            var medicine_composition = $(this).closest('#data').find(
                                                '#medicine_composition').val();
                                            var medicine_notes = $(this).closest('#data').find(
                                                    '#medicine_notes')
                                                .val();
                                            var medicine_images = $(this).closest('#data').find(
                                                    '#medicine_images')
                                                .val();



                                            $("#edit_id").val(medicine_id_hidden);
                                            $("#edit_medicine_name").val(medicine_name);
                                            $("#edit_brand_name").val(medicine_brand_name);
                                            $("#edit_medicine_group").val(medicine_group);
                                            $("#edit_category_name").val(medicine_category_name);
                                            $("#edit_generic_name").val(medicicine_genric_name);
                                            $("#edit_manufacture_name").val(medicine_manufactuure_name);
                                            $("#edit_supplier_name").val(medicine_supplier_name);
                                            $("#edit_minimum_level").val(medicine_minimum_level);
                                            $("#edit_reorder").val(medicine_reorder_level);
                                            $("#edit_minimum_level").val(medicine_minimum_level);
                                            $("#edit_unit_packing").val(medicine_unit_packing);
                                            $("#edit_medicine_details1").val(medicine_composition);
                                            $("#edit_medicine_note").val(medicine_notes);
                                            $("#edit_image").val(medicine_images);
                                        });
                                        </script>
                                        {{-- Supplier Edit End --}}
                                        @endsection