@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">Document Manager</a>
</nav>
<br><br>
<html>

<head>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Document Manager(DMS)</b></h3> -->

        <div>{{-- heading --}}
            <h4 id="hdtpa"><b>Document Manager(DMS)</b></h4>


        </div>
        <br>

        <div class="dropdown">
            <button class="btn btn-primary add-btn" type="button" style="width:20%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px; "
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Upload Document
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <!-- <a class="dropdown-item" href="{{url('upload-document')}}">File Upload</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px; margin-bottom:1px;" data-target="#myModal">
                    File Upload </button>
                <!-- <a class="dropdown-item" href="{{url('generate-document')}}">Generate Document</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    style="width:100%;margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;margin-bottom:1px;" data-target="#myModal-1">
                    Generate Document </button>
            </div>
        </div>


        <div class="header_wrap">
            <div class="num_rows">
                <div class="form-group">
                    <!--		Show Numbers Of Rows 		-->
                    <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows">

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
                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                    class="form-control">
            </div>


            <div class="table-responsive">
                <table class="table table-striped table-class" id="table-id">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <table class="table table-bordered" id="new-item">
                            <thead>
                                <tr>

                                    <th class="text-center">Type</th>
                                    <th class="text-center">Description</t>
                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($new_document as $document)
                                <tr id="data">


                                    <td scope="row" class="text-center"> <img
                                            src="{{asset('/image/'.$document->document_upload)}}" width="80px"
                                            height="50px" alt="image"></td>
                                    <td scope="row" class="text-center"> <img
                                            src="{{asset('/image/'.$document->folder_upload)}}" width="80px"
                                            height="50px" alt="image"></td>
                                    <td scope="row" class="text-center">
                                        <div class="btn-group">
                                            <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View Document</a>
                                                <a class="dropdown-item" href="#">Edit Document</a>
                                                <a class="dropdown-item" href="#">Delete
                                                    Document</a>

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


                    <!-- START   FILE UPLOAD -->
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                              
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <form method="post" action="{{ url('upload-document') }}"
                                            enctype="multipart/form-data">


                                            <div class="row">

                                                <div class="col-md-12 order-md-1">

                                                    <form method="post" action="" id="form">
                                                        @csrf
                                                        <h4 class=""><b>Upload Documents:-</b></h4>
                                                        <div class="row">
                                                            <div class="col-md-4" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="client"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                        name="client" id="" required>
                                                                        <option>---select---</option>
                                                                        <option>client 1</option>
                                                                        <option>client 2</option>
                                                                        <option>client 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="file"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                        name="file" id="" required>
                                                                        <option>---select---</option>
                                                                        <option>file 1</option>
                                                                        <option>file 2</option>
                                                                        <option>file 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="other_file"
                                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Other
                                                                        Files</label>
                                                                    <input type="text" placeholder=""
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="other_file" id=""
                                                                        value="" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="document_category"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Document
                                                                        Category</label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                        name="document_category" id="" required>
                                                                        <option>---select---</option>
                                                                        <option>category_1</option>
                                                                        <option>category_2</option>
                                                                        <option>category_3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="document_title"
                                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Document
                                                                        Title</label>
                                                                    <input type="text" placeholder=""
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="document_title" id=""
                                                                        value="" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div style="width:50%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="nature_document"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Nature
                                                                        Of Document</label>
                                                                    <textarea class="outer" rows="4"
                                                                        style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                                        cols="41" placeholder="" name="nature_document"
                                                                        form="addemployee"></textarea>
                                                                </div>
                                                            </div>
                                                            <div style="width:50%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="search"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Keyword
                                                                        Search/ Tags</label>
                                                                    <textarea class="outer" rows="4"
                                                                        style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                                        cols="41" placeholder="" name="search"
                                                                        form="addemployee"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="document_owner"
                                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Document
                                                                        Category</label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                        name="document_owner" id="" required>
                                                                        <option>---select---</option>
                                                                        <option>doc_owner_1</option>
                                                                        <option>doc_owner_2</option>
                                                                        <option>doc_owner_3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="final_aggrement"
                                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Final
                                                                        Aggrement</label>
                                                                    <input type="text" placeholder=""
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="final_aggrement"
                                                                        id="" value="" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="document_upload"
                                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Documet
                                                                        To Upload</label>
                                                                    <input type="file" placeholder=""
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="document_upload"
                                                                        id="" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="width: 33%">
                                                                <div class=""><span style="color: red">*</span>
                                                                    <label for="folder_upload"
                                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Folder
                                                                        To Upload</label>
                                                                    <input type="file" placeholder=""
                                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                        class="form-control" name="folder_upload" id=""
                                                                        value="" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm">

                                                            </div>
                                                            <div class="col-sm">

                                                            </div>
                                                            <div class="col-sm">
                                                                <br>
                                                                <button type="submit"
                                                                    class="btn btn-primary float:right;"
                                                                    Style="width:45%;">Upload</button>
                                                                <button type="button" Style="width:45%;"
                                                                    class="btn btn-primary float:right;"
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
                                                    <input type="text" name="type" class="form-control"
                                                        placeholder="Client Type">
                                                    <button class="btn btn-primary sub_btnn"
                                                        type="submit">submit</button>
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
                                                <input type="text" name="type" class="form-control"
                                                    placeholder="Country">
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
                      
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <form method="post" action="{{ url('generate-document') }}"
                                    enctype="multipart/form-data">


                                    <div class="row">

                                        <div class="col-md-12 order-md-1">

                                            <form method="post" action="" id="form">
                                                @csrf
                                                <h4 class=""><b>Generate Document:-</b></h4>
                                                <div class="row">
                                                    <div class="col-md-3" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="client" id="" required>
                                                                <option>---select---</option>
                                                                <option>client 1</option>
                                                                <option>client 2</option>
                                                                <option>client 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="file"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="file" id="" required>
                                                                <option>---select---</option>
                                                                <option>File 1</option>
                                                                <option>File 2</option>
                                                                <option>File 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="document_category"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Document
                                                                Category</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="document_category" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="document_title"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Document
                                                                Title</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="document_title" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div style="width:50%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="nature_document"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Nature
                                                                Of Document</label>
                                                            <textarea class="outer" rows="4"
                                                                style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                                cols="41" placeholder="" name="nature_document"
                                                                form="addemployee"></textarea>
                                                        </div>
                                                    </div>
                                                    <div style="width:50%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="search"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Keyword
                                                                Search/ Tags</label>
                                                            <textarea class="outer" rows="4"
                                                                style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                                cols="41" placeholder="" name="search"
                                                                form="addemployee"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="document_owner"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Documet
                                                                Owner</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="document_owner" id="" required>
                                                                <option>---select---</option>
                                                                <option>owner 1</option>
                                                                <option>owner 2</option>
                                                                <option>owner 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="viewer"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Viewer</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="viewer" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="document_template"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Document
                                                                Template</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="document_template" id=""
                                                                value="" required>
                                                        </div>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">

                                        </div>
                                        <div class="col-sm">

                                        </div>
                                        <div class="col-sm">
                                            <br>
                                            <button type="submit" class="btn btn-primary float:right;"
                                                Style="width:45%;">Generate</button>
                                            <button type="button" Style="width:45%;" class="btn btn-primary float:right;"
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
                        <form method="post" action="{{url('update_medicine')}}" enctype="multipart/form-data">
                            @csrf
                            <h4 class="text-center"><b>Medicine Details</b></h4><br>
                            <div class="row">
                                <div class="col-sm">
                                    <label for="">Brand Name</label>

                                </div>
                                <div class="col-sm">
                                    <label for="">Medicine Name</label>
                                    <input type="text" id="edit_medicine_name" name="medicine_name" class="form-control"
                                        required><br>
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
                                    <input type="text" name="unit_packing" id="edit_unit_packing" class="form-control"
                                        placeholder=""><br>
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
                                    <textarea class="form-control" id="edit_medicine_details1" name="medicine_detailss"
                                        rows="3" placeholder=""></textarea><br>
                                </div>
                                <div class="col-sm">
                                    <label>Notes</label>
                                    <textarea class="form-control" id="edit_medicine_note" name="medicine_note" rows="3"
                                        placeholder=""></textarea><br>
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
                                    style="width:15%;background-color:#435ebe" data-bs-dismiss="modal">Close</button>
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