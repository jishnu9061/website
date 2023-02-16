@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="#" style="color: #1D1D50;">Client Quotation</a>
</nav>
<br><br>
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
    
        <!-- <h3 class="text-center" style="color: #070344; "><b>New Quotation</b></h3> -->
       
          
            <div class="container">
        <!-- <div id="mydatatable_filter" class="dataTables_filter">
            <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
        </div> -->
        
         <div class="container">
        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New
            Quotation</button>
            </div>
         <div class="col-sm-4" style="">
                <h4
                    style="border: 0.5px solid #f1d9b0;
                    border-radius: 25px;
                    background-color: #f1d9b0;
                    padding: 2%;
                    width: 100%;
                    height:90%;
                    text-align:center;
                    box-shadow: inset 0 0 3px #d3d0ca;
                    opacity: .9;">
                    <b style="font-size:18px;"> Quotation Details</b>
                </h4>
            </div>
       
            

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


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <br>
                <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
                        <thead>
                            <tr>
                                <!-- <th class="text-center">No</th> -->
                                <th class="text-center">Issue Date</th>
                                <th class="text-center">Document No</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Posted By</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quotation as $list)
                            <tr id="data">
                                <!-- <td scope="row" class="text-center">{{$list->id}}</td> -->
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->issue_date}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1"></td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->customer}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1">{{$list->amount}}</td>
                                <td scope="row" class="text-center" id="medicine_name_1"></td>
                                <td scope="row" class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="#">View Quotation</a>
                                                    <a class="dropdown-item"
                                                        href="{{url('edit-Quotation',$list->id)}}">Edit Quotation</a>
                                                    <a class="dropdown-item"
                                                        href="{{url('delete-Quotation',$list->id)}}">Delete Quotation</a>

                                                </div>
                                            </div>
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
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="text-center"><b>Add Quotation</b></h2>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 order-md-1">
                                                <form method="post" action="{{url('add-Quotation')}}" id="form">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Document Type</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="document" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>Type 1</option>
                                                                        <option>Type 2</option>
                                                                        <option>Type 3</option>
                                                                        <option>Type 4</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Issue Date</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="date" class="form-control" name="issue"
                                                                        id="age" value="" placeholder="corporation"
                                                                        min="0" max="99">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Age is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Client Name</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="client" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>client 1</option>
                                                                        <option>client 2</option>
                                                                        <option>client 3</option>
                                                                        <option>client 4</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Client Ref No</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control" name="ref"
                                                                        id="age" value="" placeholder="" min="0"
                                                                        max="99">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Age is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Currency</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="currency" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>currency 1</option>
                                                                        <option>currency 2</option>
                                                                        <option>currency 3</option>
                                                                        <option>currency 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Exchange Rate</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control" name="rate"
                                                                        value="" id="confirm_password" placeholder="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Approver</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <select name="approver" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>Approver 1</option>
                                                                        <option>Approver 2</option>
                                                                        <option>Approver 3</option>
                                                                        <option>Approver 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Bank Account</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                    </div>
                                                                    <select name="account" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>43556737</option>
                                                                        <option>44556737</option>
                                                                        <option>335567373</option>
                                                                        <option>667567374</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-1">
                                                                <label for="username">Billing Information</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control" id="form7Example7"
                                                                        rows="3" name="Information"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Postal Address is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">To the Attender of</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control"
                                                                        name="attender" value="" id="confirm_password"
                                                                        placeholder="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Subject / Title</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control"
                                                                        name="subject" value="" id="confirm_password"
                                                                        placeholder="">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <!-- <h2 style="text-align:center;"> Quotation Items</h2> -->
                                                  
                                                        <div class="text-center">
                                                            <h4><b> Quotation Items</b></h4>

                                                        </div><br>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Type</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="type" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>Type 1</option>
                                                                        <option>Type 2</option>
                                                                        <option>Type 3</option>
                                                                        <option>Type 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Particulers Of Service
                                                                    Rendered</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control" id="form7Example7"
                                                                        rows="2" name="Rendered"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Postal Address is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Amount</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control"
                                                                        name="amount" id="age" value="" placeholder=""
                                                                        min="0" max="99">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Age is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">V.A.T</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">

                                                                    </div>
                                                                    <select name="vat" id="cars">
                                                                        <option>---select---</option>
                                                                        <option>V.A.T 1</option>
                                                                        <option>V.A.T 2</option>
                                                                        <option>V.A.T 3</option>
                                                                        <option>V.A.T 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <a href=""><button class="btn btn-primary ">New
                                                                Item</button></a>
                                                        <a href=""><button class="btn btn-primary ">Delete
                                                                Item</button></a>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Comments</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control" id="form7Example7"
                                                                        rows="2" name="Rendered"
                                                                        name="comments"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Postal Address is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-sm">

                                                        <div class="row">
                                                            <div class="col-sm">

                                                            </div>
                                                            <div class="col-sm">

                                                            </div>
                                                            <div class="col-sm">
                                                                <br>
                                                                <button type="submit"
                                                                    class="btn btn-primary float:right;"
                                                                    Style="width:50%;">Save</button>
                                                                <button type="button" class="btn btn-primary float:left"
                                                                    Style="width:45%;"
                                                                    data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="editmed">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header" style="background-color:#435ebe">
                                    <h4 class="text-white">Edit Medicine</h4>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="{{url('update_medicine')}}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h4 class="text-center"><b>Medicine Details</b></h4><br>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <label for="">Brand Name</label>

                                                </div>
                                                <div class="col-sm">
                                                    <label for="">Medicine Name</label>
                                                    <input type="text" id="edit_medicine_name" name="medicine_name"
                                                        class="form-control" required><br>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="col-sm">
                                                        <label for="">Medicine Group</label>

                                                    </div>

                                                </div>
                                                <div class="col-sm">
                                                    <label for="">Medicine Category Name</label>


                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <label for="">Generic name</label>

                                                </div>
                                                <div class="col-sm">
                                                    <label>Manufacturer Name</label>

                                                </div>
                                                <div class="col-sm">
                                                    <label>Supplier Name</label>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <label for="">Minimum Level</label>
                                                    <input type="text" id="edit_minimum_level" name="minimum_level"
                                                        class="form-control"><br>
                                                </div>
                                                <div class="col-sm">
                                                    <label>Reorder Level</label>
                                                    <input type="text" name="reorder" id="edit_reorder"
                                                        class="form-control" placeholder=""><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <label class="text-color:white;">Unit/Packing</Label>
                                                    <input type="text" name="unit_packing" id="edit_unit_packing"
                                                        class="form-control" placeholder=""><br>
                                                </div>
                                                <div class="col-sm">
                                                    <label>Upload Medicine Image</label>
                                                    <input type="file" name="editimage" id="edit_image"
                                                        class="form-control" placeholder="Image"><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <label>Medicine Composition</label>
                                                    <textarea class="form-control" id="edit_medicine_details1"
                                                        name="medicine_detailss" rows="3" placeholder=""></textarea><br>
                                                </div>
                                                <div class="col-sm">
                                                    <label>Notes</label>
                                                    <textarea class="form-control" id="edit_medicine_note"
                                                        name="medicine_note" rows="3" placeholder=""></textarea><br>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="hidden" class="form-control" id="edit_id"
                                                        name="method_id">

                                                </div>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary text-white"
                                                    style="width:15%;background-color:#435ebe"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    style="background-color:#435ebe;width:15%;">Update</button>
                                            </div>
                                    </div>
                                    <div class="container">

                                    </div>
                                </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <!-- Supplier modal Edit End -->

                <!-- Delete  confirmation Message -->

                <!-- End delete confirmation message -->
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
                var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
                var medicine_brand_name = $(this).closest('#data').find(
                    '#medicine_brand_name').val();
                var medicine_group = $(this).closest('#data').find('#medicine_group').val();
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
                var medicine_notes = $(this).closest('#data').find('#medicine_notes').val();
                var medicine_images = $(this).closest('#data').find('#medicine_images')
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