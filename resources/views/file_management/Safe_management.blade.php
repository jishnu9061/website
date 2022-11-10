@extends('layouts.hmsmain')
@section('content')






            
        {{-- heading --}}
    <h4 id="hdtpa"><b>Safe Manangement</b></h4>
    <br>
  
 
 
         
       

       
      
        {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Register Safe Item</button></a> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Register Safe
            Item</button>
        <br>
        <br>
        <div class="table-responsive">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                    <table class="table table-bordered" id="new-item">
                        <thead style="font-size:15px; width:100%;">
                            <tr>
                                <th class="text-center">*</th>
                                <th class="text-center">Doc<br>No</th>
                                <th class="text-center">Registered By</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">File No</th>
                                <th class="text-center">File Name</th>
                                <th class="text-center">Doc Type</th>
                                <th class="text-center">Document</th>
                                <th class="text-center">Return<br>Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action </th>
                                {{-- <th class="text-center"><input type="checkbox" id="vehicle1" name="vehicle1"
                                        value="Bike">
                                </th> --}}


                            </tr>
                        </thead>

                        <tbody>
                                @foreach($safe_management as $management)
                            <tr id="data">

                                <td scope="row" class="text-center">{{$management->id}}</td>
                                <td scope="row" class="text-center">{{$management->doc_no}}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">{{$management->client}}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">{{$management->file}}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">{{$management->document}}</td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center"></td>
                                <td scope="row" class="text-center">
                                    <select name="" id="">
                                        <option value=""> <a href="">Action</a> </option>
                                        <option value=""> <a href=""></a>View</option>
                                        <option value=""> <a href=""></a>Edit</option>
                                        <option value=""> <a href=""></a>Delete</option>
                                    </select>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>

                    </table>
                <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"style="color:#1D1D50;">Next</a></li>
                                </ul>
                            </nav>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" >

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="text-center"><b>Register Documents In Safe</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="{{ url('new_Safe_management') }}"
                                            enctype="multipart/form-data">
                                            @csrf




                                            <div class="row">



                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username"> Date</label>
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
                                                            <option>Client 1</option>
                                                            <option>Client 2</option>
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
                                                            <option>File 1</option>
                                                            <option>File 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <br>
                                            <div class="row">


                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Safe Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="safe_name" id="cars">
                                                            <option>select</option>
                                                            <option>Safe 1</option>
                                                            <option>Safe 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Ref No.In Safe</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <input type="text" class="form-control" name="ref_no"
                                                                id="age">
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                Incorporation is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username">Approver</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                            </div>
                                                            <select name="approver" id="cars">
                                                            <option>select</option>
                                                            <option>Person 1</option>
                                                            <option>Person 2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>

                                           
                                            <div id="test" style="height:20px;"></div>
                                  



                                <br>
                                <!-- <h3 class="text-center" style="color: #070344;"><b>Documents</b></h3> -->

                                

                                
                                <!-- <div class="modal-header">
                                        <b><u>Documents</u></b></span></div><br> -->
                                        <div class="modal-header">
                                    <h2 class="text-center"><b>Documents</b></h2>

                                </div>
                                <div class="tab-content" id="myTabContent">
                                <div class="table-responsive">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        
                                        <table class="table table-bordered" id="new-item">
                                            <thead style="font-size:15px; width:100%;">
                                                <tr>
                                                    <th class="text-center">Doc No</th>
                                                    <th class="text-center">Catrgory</th>
                                                    <th class="text-center">Document</th>
                                                    <th class="text-center">Action</th>


                                                    </th>


                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr id="data">

                                                    <td 
                                                    scope="row" class="text-center"  style="width:100px;"><input
                                                            type="text" name="doc_no" id="age"></td>

                                                    <td scope="row">
                                                        <select style="width:100%;" name="category">
                                                            <option >select</option>
                                                        </select>
                                                    </td>


                                                    <td scope="row" class="text-center"  style="width:40%;"><input
                                                            type="text" name="document" style="width:100%;">
                                                    </td>
                                                    <td scope="row" class="text-center"><a href=""><i
                                                                style="color:black;" class="fa fa-edit"
                                                                aria-hidden="true"></td>

                                                </tr>



                                            </tbody>

                                        </table>
                                        <br>


                                            {{-- <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <button type="" class="btn btn-primary submit_btn"
                                                            style=" margin-left:0px; width:200px;">New Document</button>
                                                    </div>
                                                </div>
                                            </div> --}}
                                    </div>


                                </div>
                                <br> <div class="row">
                       <div class="col-sm">

                       </div>
                       <div class="col-sm">

                       </div>
                       <div class="col-sm">
                           <br>
                           <button type="submit" class="btn btn-primary float:right;" Style="width:60%;">Save</button>
                           <button type="button" class="btn btn-primary float:right;" data-dismiss="modal">Cancel</button>
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


                                <!-- <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <br>
                                        <button type="submit" class="btn btn-primary float:right;"
                                            Style="width:46%;">Upload</button>
                                        <button type="button" class="btn btn-primary float:left"
                                            Style="width:45%;">Close</button>
                                    </div>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div> -->
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
                var medicine_manufactuure_name = $(this).closest('#data').find('#medicine_manufactuure_name')
                    .val();
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