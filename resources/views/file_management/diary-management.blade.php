@extends('layouts.hmsmain')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

{{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>

    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Diary(Calender Events)</b></h3> -->
        <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Diary(Calender Events)</u></b></span></div><br>
            <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->

        
            </div>
            <br>

        <!-- <a href="{{url('add-event')}}"><button class="btn btn-primary add-btn" style="width: 20%; ">Add
                Event</button></a> -->
                {{-- <a href="{{('add-event')}}"><button class="btn btn-primary">Add Event</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add
                Event</button>
        

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <br>
                <div class="table-responsive">
                <table class="table table-bordered" id="new-item">
                    <thead >
                        <tr>
                            <th class="text-center">*</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File No</th>
                            <th class="text-center">File Name</th>
                            <th class="text-center">Start</th>
                            <th class="text-center">End</th>
                            <th class="text-center">Submitted </br>By</th>

                            <th class="text-center">Action</th>

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
                        </tr>



                    </tbody>

                </table>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-center"><b>Add Event</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-corporate') }}"
                                                enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Event Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="event" id="cars">
                                    <option value="volvo">type 1</option>
                                    <option value="car">type 2</option>
                                    <option value="bus">type 3</option>
                                </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Title</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="title" id="username" required>
                                <br>
                            </div>
                        </div>
                    </div>
                   
</div>
<br>
<div class="row">

                    <div class="col-md-5">
                        <div class="mb-1">
                            <label for="username">Meeting Room</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="room" id="cars">
                                    <option value="volvo">room 1</option>
                                    <option value="car">room 2</option>
                                    <option value="bus">room 3</option>
                                </select>

                            </div>
                        </div>
                    </div>



                    <div class="col-md-1">
                        <div class="mb-1">
                            <label for="username"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <a href="{{url('meeting-rooms')}}"> <i class="fa fa-plus"
                                        style="font-size:24px"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Location</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="location" id="username" required>
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
                            <label for="username">Start Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="start_date" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="time" class="form-control" name="time" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
       
   



    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">End Date</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="date" class="form-control" name="end_date" id="confirm_password" required>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Time</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="time" class="form-control" name="time_1" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Telephone Number is required.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Event Booked For?</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="event" id="cars">
                        <option value="volvo">event 1</option>
                        <option value="car">event 2</option>
                        <option value="bus">event 3</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">User Invited</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="user" id="age">
                    <div class="invalid-feedback" style="width: 100%;">
                        Incorporation is required
                    </div>
                </div>
            </div>
        </div>
</div>
<br>
<div class="row">
        <div class="col-md-12">
            <div class="mb-1">
                <label for="username">Other Invites[Email Addresses,Seperated By Commas(,)]</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                        Telephone Number is required.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Client </label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="client" id="cars">
                        <option value="2">client 1</option>
                        <option value="3">client 2</option>
                        <option value="4">client 3</option>
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
                        <option value="volvo">file 1</option>
                        <option value="car">file 2</option>
                        <option value="bus">file 3</option>
                    </select>
                    <div class="invalid-feedback" style="width: 100%;">
                        Incorporation is required
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Notes</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="notes" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Telephone Number is required.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Set Repetition</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="repetition" id="cars">
                        <option value="volvo">demo 1</option>
                        <option value="car">semo 2</option>
                        <option value="bus">demo 3</option>
                    </select>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Repetition End</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="date" class="form-control" name="repetition_end" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Set Reminder</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="reminder" id="cars">
                        <option value="volvo">demo</option>
                        <option value="car">demo</option>
                        <option value="bus">demo</option>
                    </select>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>


        </div>
        <div id="test" style="height:20px;"></div>
    </div>

<br>

<div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                            <button type="button" class="btn btn-primary float:right;" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
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

        function openwindow()
{
var newwindow= window.open('', '', 'width=300, height=300');
newwindow.document.write("<button onclick='window.close()'>Close Window</button>");
}
        </script>
        {{-- Supplier Edit End --}}
        @endsection