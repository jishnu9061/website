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
    <div class="container">
        <div class="col-sm">




            <div>

              
    <h4 id="hdtpa"><b>File Instructions</b></h4>
    <br>
  
 
 
         
        
               
            </div>

            

            <div id="mydatatable_filter" class="dataTables_filter">
                <label><b>Search:</b><input type="search" class="box" placeholder="search"
                        aria-controls="mydatatable"></label>

            </div>
            <!-- <a href="{{url('file_new_instruction')}}"><button class="btn btn-primary add-btn" Style="width:200px;">Add
                New Instructions</button></a> -->
            {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Instructions</button></a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New
                Instructions</button>
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
	

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <br>
                    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
                            <thead>

                                <tr>
                                    <th class="text-center">*</th>
                                    <th class="text-center">Execute</th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Post Date</th>
                                    <th class="text-center">Sender</th>
                                    <th class="text-center">Receiver</th>
                                    <th class="text-center">Details</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Client</th>
                                    <th class="text-center">File</th>
                                    <!-- <th class="text-center">Checked By</th>
                            <th class="text-center">Accepted By</th> -->
                                    <!-- <th class="text-center">Completed By</th>
                            <th class="text-center">Declined By</th>
                            <th class="text-center">Faild By</th> -->
                                    <th class="text-center">TAT Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($new_file_instruction as $instruction)
                                
                                <tr id="data">
                                    <td scope="row" class="text-center">{{$instruction->id}}</td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center">{{$instruction->date}}</td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center">{{$instruction->receiver}}</td>
                                    <td scope="row" class="text-center">{{$instruction->details}}</td>
                                    <td scope="row" class="text-center">{{$instruction->amount}}</td>
                                    <td scope="row" class="text-center">{{$instruction->client}}</td>
                                    <td scope="row" class="text-center">{{$instruction->file}}</td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"></td>
                                    <td scope="row" class="text-center"><a href="{{url('edit_file_instruction',$instruction->id)}}"><i
                                                style="color:black;" class="fa fa-edit" aria-hidden="true"></i>
                                            <a onClick="return myFunction();" href="{{url('delete_file',$instruction->id)}}" style="color:black;"><i
                                                    class="fas fa-trash-alt"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
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
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2 class="text-center"><b>Add Instruction</b></h2>

                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action="{{ url('file_new_instruction') }}"
                                        enctype="multipart/form-data">
                                        @csrf



                                        <div class="row">



                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username"> Date(to)</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input type="date" class="form-control" name="date"
                                                            id="username" required>
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Number is required.
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
                                                        <select name="client" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">File</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="file" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <br>
                                        <div class="row">


                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Instruction Type</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="instruction" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Instruction Category</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="category" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-1">
                                                    <label for="username">Receiver</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <select name="receiver" id="cars">
                                                            <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="test" style="height:20px;"></div>
                              



                            <div class="row">


                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Currency</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="currency" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>



                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Exchange Rate</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="exchange" id="age">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Turn-Around Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="turn_around" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Priority</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="priority" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label for="username">Amount</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="amount" id="age">
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Incorporation is required
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label for="username">Details</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea class="form-control" id="form7Example7" rows="3" name="details"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <hr class="mb-4">

                            <div class="row">


                                <div class="col-md-4">
                                    <div class="mb-1">
                                        <label for="username">Send Notification To</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <select name="send_notification" id="cars">
                                                <option>select</option>
                                                <option>demo 2</option>
                                                <option>demo 3</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                   
            <br>
            <!-- <div class="container">
                    <div class="row">
                      <div class="col-sm">
                      </div>
                      <div class="col-sm">
                      </div>
                      <div class="col-sm">
                        <button type="submit" class="btn btn-primary float:right" style="width:45%">Save</button>
                        <button type="submit" class="btn btn-primary float:left"style="width:45%">Close</button>
                      </div>
                    </div>
                  </div>
</form> -->
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <br>
                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                    <button type="submit" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

    </div>
    <div class="modal" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <input type="text" name="type" class="form-control" placeholder="Client Type">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal" id="my">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <input type="text" name="type" class="form-control" placeholder="Country">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    {{-- Supplier Edit start --}}

    <script>
    $(document).on('click', '#edit_medicine_details', function() {

        var medicine_id_hidden = $(this).closest('#data').find('#medicine_id_hidden').val();
        var medicine_name = $(this).closest('#data').find('#medicine_name_1').val();
        var medicine_brand_name = $(this).closest('#data').find('#medicine_brand_name').val();
        var medicine_group = $(this).closest('#data').find('#medicine_group').val();
        var medicicine_category_name = $(this).closest('#data').find('#medicine_category_name1').val();
        var medicine_generic_name = $(this).closest('#data').find('#medicine_generic_name').val();
        var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name').val();
        var medicine_supplier_name = $(this).closest('#data').find('#medicine_supplier_name').val();
        var medicine_minimum_level = $(this).closest('#data').find('#medicine_minimum_level').val();
        var medicine_reorder_level = $(this).closest('#data').find('#medicine_reorder_level').val();
        var medicine_unit_packing = $(this).closest('#data').find('#medicine_unit_packing').val();
        var medicine_composition = $(this).closest('#data').find('#medicine_composition').val();
        var medicine_notes = $(this).closest('#data').find('#medicine_notes').val();
        var medicine_images = $(this).closest('#data').find('#medicine_images').val();



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