@extends('layouts.hmsmain')
@section('content')


<body>
    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Document Manager(DMS)</b></h3> -->
        
        <div>{{-- heading --}}
    <h4 id="hdtpa"><b>Document Manager(DMS)</b></h4>
    <br><br>
            
            </div>
        <br>

        <div class="dropdown">
            <button class="btn btn-primary add-btn" type="button" style="width:20%;" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Upload Document
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <!-- <a class="dropdown-item" href="{{url('upload-document')}}">File Upload</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal">
                    File Upload </button>
                <!-- <a class="dropdown-item" href="{{url('generate-document')}}">Generate Document</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal"  style="width:100%;" data-target="#myModal-1">
                Generate Document </button>
            </div>
        </div>
        <br>


        <div class="table-responsive">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <table class="table table-bordered" id="new-item">
                    <thead
                    
                    >
                        <tr>
                            <th class="text-center">*</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Description</t>
                            <th class="text-center">Action</th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr id="data">

                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>

                            <td scope="row" class="text-center">
                                
                                <select name="" id="">
                                    <option value=""> <a href=""></a>Action </option>
                                    <option value=""> <a href=""></a> </option>
                                </select>
                            </td>
                        </tr>



                    </tbody>

                </table>


                                         <!-- START   FILE UPLOAD -->
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" >

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Upload Documents</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('upload-document') }}" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12 order-md-1">

                                    <form method="post" action="" id="form">
                                        @csrf
                                        <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Other Files</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
</div>
<br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Document Category</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Document Title</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                </br>


                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Nature Of Document</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Keyword Search/ Tags</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                </div>


        </div>
    </div>
    <br>



    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Documet Owner</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="country" id="cars">
                        <option value="volvo"></option>
                    </select>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Final Aggrement</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
</div>
<br>
        
        <div class="row"> 
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Documet To Upload</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="file" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Folder To Upload </label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="file" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
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
                                            Style="width:60%;">Upload</button>
                                        <button type="button" class="btn btn-primary float:right;"
                                            data-dismiss="modal">Cancel</button>
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
    <div class="modal" id="my-1">
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
                                         <!-- END FILE UPLOAD -->


                                         <!-- START GENERATE DOCUMENT -->
<!-- The Modal -->
<div class="modal fade" id="myModal-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Generate Document</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('upload-document') }}" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12 order-md-1">

                                    <form method="post" action="" id="form">
                                        @csrf
                                        <div class="row">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Document Category</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Document Title</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="website" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                </br>


                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Nature Of Document</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Keyword Search/ Tags</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                </div>


        </div>
    </div>
    <br>



    <div class="row">
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Documet Owner</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="country" id="cars">
                        <option value="volvo"></option>
                    </select>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Viewer</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Document Template</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="website" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>







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
                                            Style="width:60%;">Generate</button>
                                        <button type="button" class="btn btn-primary float:right;"
                                            data-dismiss="modal">Cancel</button>
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
    <div class="modal" id="my-1">
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
                                         <!-- END GENERATE DOCUMENT -->










                

                <!-- The Modal -->
                <div class="modal fade" id="editmed">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
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