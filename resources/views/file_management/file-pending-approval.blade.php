@extends('layouts.hmsmain')
@section('content')
  {{-- heading --}}
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
  <h4 id="hdtpa"><b>Files Pending Approval</b></h4>
  
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
           
	 <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	
                    <thead>
                        <tr>
                            <th class="text-center">*</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File No</th>
                            <th class="text-center">File Name</th>
                            <th class="text-center">File Type</th>
                            <th class="text-center">Responsible <br>Advocate</th>
                            <th class="text-center">Date <br>Opened</th>
                            <th class="text-center">Action</th>
                            <!-- <th class="text-center"> <input type="checkbox" name="" id=""> </th> -->

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
                            <td scope="row" class="text-center">
                                <select name="" id="">
                                <option value=""> <a href="">Action</a> </option>
                                    <option value=""> <a href="">Edit</a> </option>
                                    <option value=""> <a href=""></a>Delete </option>
                                </select>
                            </td>
                            <!-- <td scope="row" class="text-center"> <input type="checkbox" name="" id=""></td> -->
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
                                                <input type="text" name="reorder" id="edit_reorder" class="form-control"
                                                    placeholder=""><br>
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
                                                <input type="file" name="editimage" id="edit_image" class="form-control"
                                                    placeholder="Image"><br>
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
                                                <input type="hidden" class="form-control" id="edit_id" name="method_id">

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