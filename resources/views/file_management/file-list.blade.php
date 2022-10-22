@extends('layouts.hmsmain')
@section('content')

  {{-- heading --}}
  <h4 id="hdtpa"><b>File List</b></h4>
  <br><br>



            <div >
                <input class="btn btn-primary" type="button" value="All">
                <input class="btn btn-primary" type="button" value="Open">
                <input class="btn btn-primary" type="button" value="Pending">
                <input class="btn btn-primary" type="button" value="Closed">
             </div>
<br>

                <div id="mydatatable_filter" class="dataTables_filter">
                    <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-1">Columns
                  </button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Filter
                  </button>
                </div>
                {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Corporate</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New
                  File</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="new-item">
                                <thead>
                                    <tr>
                                        <th class="text-center"> <input type="checkbox"></th>
                                        <th class="text-center">Actions</th>
                                        <th class="text-center">Matter</th>
                                        <th class="text-center">Client</th>
                                        <th class="text-center">Responsible</br>Solicitor</th>
                                        <th class="text-center">Originating</br>Solicitor</th>
                                        <th class="text-center">Matter</br>Notifications</th>
                                        <th class="text-center">Practice Area</th>
                                        <th class="text-center">Open Date</th>
                                        <th class="text-center">Close Date</th>
                                        <th class="text-center">Pending Date</th>
                                        <th class="text-center">State Of Limitations Date</th>
                                        <th class="text-center">Last</br>Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- @foreach ($file_list as $file) -->
                                        <tr id="data">
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                            <td scope="row"></td>
                                        </tr>
                                    <!-- @endforeach -->
                                </tbody>
                            </table>
                        </div>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New File</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-new-file') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="client_type" id="cars">
                                                                    <option>Select</option>
                                                                    <option>Accord University</option>
                                                                    <option>Accounts And Books</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Associate Handling</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <select name="associate_handling" id="cars"
                                                                    disabled>
                                                                    <option>Corporate</option>
                                                                    <option>Individual</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Opening Date</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="date" class="form-control" name="opening_date" id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                <b><u>File List</u></b></span></div><br>
           
        
            </div>
            <br>
        <br>

                  <!-- COLUMNS -->
                  <div class="modal fade" id="myModal-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('') }}"
                                                enctype="multipart/form-data">

                                                @csrf

    <form action="/action_page.php">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check1">
      <label class="form-check-label" for="check1">Option 1</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="check2">
      <label class="form-check-label" for="check2">Option 2</label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input">
      <label class="form-check-label">Option 3</label>
    </div>
   
  </form>
                                            
              
                   <div class="row">
                       <div class="col-sm">

                       </div>
                       <div class="col-sm">

                       </div>
                       <div class="col-sm">
                           <br>
                           <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update Columns</button>
                           <button type="button" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
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

        <br>

                  <!-- END COLUMNS -->


      


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
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Client Ref.No or(Case No)</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="client_ref_no" id="age" value="" min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Our File Ref No</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="our_file_ref_no" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">File Name/Subject</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="file_name" id="age" value=""
                                                                 min="0" max="99">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Age is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Approval Partner</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                
                                                                </div>
                                                                <select name="approval_partner" id="cars">
                                                                    <option >Select</option>
                                                                    <option >Residensial</option>
                                                                    <option >Non Residensial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Customer Name</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="text" class="form-control" name="customer_name" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-1">
                                                            <label for="username">Amount</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"></div>
                                                                <input type="narration" class="form-control" name="amount" value=""
                                                                    id="confirm_password">
                                                                <div class="invalid-feedback" style="width: 100%;">
                                                                    Password is required.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-1">
                                                            <label for="username">Workflow</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                
                                                                </div>
                                                                <select name="workflow" id="cars">
                                                                    <option >Select</option>
                                                                    <option >In Progress</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer Tel</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="text" class="form-control" name="telephone" value=""
                                                                        id="confirm_password">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer E-mail</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <input type="email" class="form-control" name="email" value=""
                                                                        id="confirm_password">
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-1">
                                                                <label for="username">Customer Address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"></div>
                                                                    <textarea class="form-control" name="address" id="floatingTextarea"></textarea>
                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                        Password is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                                <br>
                                                    <div class="modal-footer" style="background-color:#d6ba8a">
                                                        <button type="submit" class="btn btn-primary"
                                                            data-dismiss="modal"
                                                            style="width:15%;background-color:white;color:black">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            style="width:15%;background-color:white;color:black">Save</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>





                            </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <br>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New File</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-corporate') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                        <form method="post" action="" id="form">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Client</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">

                                                                            </div>
                                                                            <select name="client_type" id="cars">
                                                                                <option>Select</option>
                                                                                <option>Accord University</option>
                                                                                <option>Accounts And Books</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Associate Handling</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">

                                                                            </div>
                                                                            <select name="associate_handling" id="cars"
                                                                                disabled>
                                                                                <option>Corporate</option>
                                                                                <option>Individual</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Opening Date</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="date" class="form-control" name="opening_date" id="age" value="" min="0" max="99">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Age is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Approval Partner</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                            
                                                                            </div>
                                                                            <select name="approval_partner" id="cars">
                                                                                <option >Select</option>
                                                                                <option >Residensial</option>
                                                                                <option >Non Residensial</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Customer Name</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="text" class="form-control" name="customer_name" value=""
                                                                                id="confirm_password">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Password is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-1">
                                                                        <label for="username">Amount</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"></div>
                                                                            <input type="narration" class="form-control" name="amount" value=""
                                                                                id="confirm_password">
                                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                                Password is required.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                         
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                            <div class="mb-1">
                                                                                <label for="username">Customer E-mail</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                    <input type="email" class="form-control" name="email" value=""
                                                                                        id="confirm_password">
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Password is required.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-1">
                                                                                <label for="username">Customer Address</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend"></div>
                                                                                    <textarea class="form-control" name="address" id="floatingTextarea"></textarea>
                                                                                    <div class="invalid-feedback" style="width: 100%;">
                                                                                        Password is required.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="modal-footer"
                                                                style="background-color:#d6ba8a">
                                                                <button type="submit" class="btn btn-primary"
                                                                    data-dismiss="modal"
                                                                    style="width:15%;background-color:white;color:black">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    style="width:15%;background-color:white;color:black">Save</button>
                                                            </div>
                                                               

                                                        </form>
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
                        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
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
