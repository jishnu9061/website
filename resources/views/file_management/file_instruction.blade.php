@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">File Management</a> /
    <a href="#" style="color: #1D1D50;">File Instructions</a>
</nav>
<br><br>

<html>

<head>
    <style>

    </style>
</head>

<body>
    <div class="container">





        <div>


            <h4 id="hdtpa"><b>File Instructions</b></h4>
            <br>
        </div>

        <div class="row" style="height:50px;">
            <div class="col-sm-4" style="padding-top:5px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;    --clr: #1D1D50;
                --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New
                    Instructions</button>
            </div>


            <!-- <a href="{{url('file_new_instruction')}}"><button class="btn btn-primary add-btn" Style="width:200px;">Add
                New Instructions</button></a> -->

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



                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped table-class" id="table-id">

                                <thead>

                                    <tr>
                                        <!-- <th class="text-center">*</th> -->
                                        <th class="text-center">Execute</th>
                                        <!-- <th class="text-center">ID</th> -->
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
                                        <!-- <td scope="row" class="text-center">{{$instruction->id}}</td> -->
                                        <td scope="row" class="text-center"></td>
                                        <!-- <td scope="row" class="text-center"></td> -->
                                        <td scope="row" class="text-center">{{$instruction->date}}</td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center">{{$instruction->receiver}}</td>
                                        <td scope="row" class="text-center">{{$instruction->details}}</td>
                                        <td scope="row" class="text-center">{{$instruction->amount}}</td>
                                        <td scope="row" class="text-center">{{$instruction->client}}</td>
                                        <td scope="row" class="text-center">{{$instruction->file}}</td>
                                        <td scope="row" class="text-center">{{$instruction->turn_around}}</td>
                                        <td scope="row" class="text-center"></td>
                                        <td scope="row" class="text-center">
                                            <div class="btn-group">
                                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#edit_instruction"
                                                        href="#">Edit
                                                        File
                                                        Instruction</a>
                                                    <a class="dropdown-item"
                                                        href="{{url('delete_file',$instruction->id)}}">Delete
                                                        File Instruction</a>

                                                </div>
                                            </div>
                                        </td>

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
                                  
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('file_new_instruction') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <h4 class=""><b>Add Instruction:-</b></h4>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="date"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date(to)</label>
                                                            <input type="date" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="date" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="client"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="client" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
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
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="instruction"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Instruction
                                                                Type</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="instruction" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="category"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Instruction
                                                                Category</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="category" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="receiver"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Receiver</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="receiver" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="currency"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Currency</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="currency" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="exchange"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Exchange
                                                                Rate</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="exchange" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="turn_around"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Turn-Around
                                                                Time</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="turn_around" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="priority"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Turn-Around
                                                                Time</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="priority" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="amount"
                                                                style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Amount</label>
                                                            <input type="text" placeholder=""
                                                                style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                                class="form-control" name="amount" id="" value=""
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div style="width:205%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="details"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Details</label>
                                                            <textarea class="outer" rows="4"
                                                                style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                                cols="41" placeholder="Physical Address" name="details"
                                                                form="addemployee"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-4">
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class=""><span style="color: red">*</span>
                                                            <label for="send_notification"
                                                                style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                                                Notification To</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                                name="send_notification" id="" required>
                                                                <option>-----select-----</option>
                                                                <option>demo 2</option>
                                                                <option>demo 3</option>
                                                            </select>
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
                                                            Style="width:45%;">Save</button>
                                                        <button type="submit" class="btn btn-primary float:left"
                                                            Style="width:45%;">Cancel</button>
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
                    <div class="modal" id="my">
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

                <!---------------------------------------------------------- START EDIT FILE INSTRUCTION -------------------------------------------------------->
                <div class="modal fade" id="edit_instruction">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                        
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <form method="post" action=""
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h4 class=""><b>Edit Instruction:-</b></h4>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="date"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Date(to)</label>
                                                    <input type="date" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="date" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="client"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Client</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="client" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="file"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">File</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="file" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="instruction"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Instruction
                                                        Type</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="instruction" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="category"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Instruction
                                                        Category</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="category" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="receiver"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Receiver</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="receiver" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="currency"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Currency</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="currency" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="exchange"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Exchange
                                                        Rate</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="exchange" id="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="turn_around"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Turn-Around
                                                        Time</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="turn_around" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="priority"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Turn-Around
                                                        Time</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="priority" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="amount"
                                                        style="width: 110px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Amount</label>
                                                    <input type="text" placeholder=""
                                                        style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;"
                                                        class="form-control" name="amount" id="" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div style="width:205%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="details"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Details</label>
                                                    <textarea class="outer" rows="4"
                                                        style="border-color:#1d1d50;border-radius:7px;width:100%;"
                                                        cols="41" placeholder="Physical Address" name="details"
                                                        form="addemployee"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-4">
                                        <div class="row">
                                            <div class="col-md-4" style="width: 33%">
                                                <div class=""><span style="color: red">*</span>
                                                    <label for="send_notification"
                                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Send
                                                        Notification To</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        style="height:35px;border-color: #1d1d50;width=45%;border-radius: 7px;"
                                                        name="send_notification" id="" required>
                                                        <option>-----select-----</option>
                                                        <option>demo 2</option>
                                                        <option>demo 3</option>
                                                    </select>
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
                                                    Style="width:45%;">Save</button>
                                                <button type="submit" class="btn btn-primary float:left"
                                                    Style="width:45%;">Cancel</button>
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
        <!---------------------------------------------------------- END EDIT FILE INSTRUCTION ---------------------------------------------------------->










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