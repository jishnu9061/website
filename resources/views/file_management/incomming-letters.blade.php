@extends('layouts.hmsmain')
@section('content')

 {{-- heading --}}
 <h4 id="hdtpa"><b>Clients Incomming Letters</b></h4>
 <br><br>

            <br>

        <!-- <a href="{{url('add-incomming-letters')}}"><button class="btn btn-primary add-btn"
                style="width: 20%;">Add Incomming Letter</button></a> -->
                {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Add Incomming Letter</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Incomming Letter</button>
        <br>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<br>
            <div class="table-responsive">
                <table class="table table-bordered" id="new-item">
                    <thead >
                        <tr>
                            <th class="text-center">*</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File No.</th>
                            <th class="text-center">Received From</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Letter Name</th>
                            <th class="text-center">Delivered To</th>
                            <th class="text-center">Action</th>
                            <th class="text-center"> <input type="checkbox" name="" id=""> </th>

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
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center">
                                <select name="" id="">
                                    <option value=""> <a href="">Action</a> </option>
                                    <option value=""> <a href=""></a> </option>
                                </select>
                            </td>
                            <td scope="row" class="text-center"><input type="checkbox" name="" id=""></td>
                        </tr>



                    </tbody>

                </table>

               <!-- The Modal -->
               <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-center"><b>Add Incomming Letter</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-corporate') }}"
                                                enctype="multipart/form-data">
                                                @csrf


                                         <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Letter Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="letter_date" id="confirm_password" required>
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
                            <label for="username">Received From</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="received_form" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Document Category</label>
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
                            <label for="username">Letter Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="letter_name" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Delivered By</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="delivered" id="cars">
                                <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
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
                                <input type="text" class="form-control" name="other" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Delivered To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="delivered" id="cars">
                                <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>


     >
    <br>



    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Viewer(s)</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="viewer" id="cars">
                    <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                    </select>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Upload a Copy</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="file" class="form-control" name="upload_copy" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>

        </div>





    </div>
    <br>
    
    <!-- <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
                        </div>
                    </div>
                </div>





</div>





</tbody>
</table>
</div>
</div> -->
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