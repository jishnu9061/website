@extends('layouts.hmsmain')
@section('content')


<body>

    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Request Safe Item</b></h3> -->
        <div>
        {{-- heading --}}
    <h4 id="hdtpa"><b>Request Safe Item</b></h4>
    <br>
  
 
 
         
       

        </div>
        
        {{-- <a href="{{('add-corporate')}}"><button class="btn btn-primary">Register Safe Item</button></a> --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Register Safe
            Item</button>
        <br>
        <br>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-bordered" id="new-item">
                        <thead style="font-size:15px; width:100%;">
                            <tr>
                                <th class="text-center">*</th>
                                <th class="text-center">Data <br>Registered</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">File NO</th>
                                <th class="text-center">File Name</th>
                                <th class="text-center">Documents</th>
                                <th class="text-center">Requested By</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>

                                </th>


                            </tr>
                        </thead>

                        <tbody>

                            <tr id="data">

                                <td scope="row" class="text-center">1</td>
                                <td scope="row" class="text-center"></td>
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

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h2 class="text-center"><b>Request Safe Item</b></h2>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="{{ url('add-corporate') }}"
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
                                            <label for="username">Send Instruction To</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <select name="send_instruction" id="cars">
                                                <option>select</option>
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                </select>
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
                                                            <option>demo 2</option>
                                                            <option>demo 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div id="test" style="height:20px;"></div>
                            </div>
                       
     
                <div>
                    <div class="container">
                    <br> <div class="row">
                       <div class="col-sm">

                       </div>
                       <div class="col-sm">

                       </div>
                       <div class="col-sm">
                           <br>
                           <button type="submit" class="btn btn-primary float:right;" Style="width:60%;">Request
                                    Doc</button>
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
                                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Request
                                    Doc</button>
                                <button type="button" class="btn btn-primary float:left"
                                    Style="width:45%;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>



        </div>





    </div>
    </div> -->
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
        var medicicine_category_name = $(this).closest('#data').find('#medicine_category_name1')
            .val();
        var medicine_generic_name = $(this).closest('#data').find('#medicine_generic_name').val();
        var medicine_manufactuure_name = $(this).closest('#data').find(
            '#medicine_manufactuure_name').val();
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