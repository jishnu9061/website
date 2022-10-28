@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}


   

            <br>
    <div class="container">
        <!-- <h3 class="text-center" style="color: #070344;"><b>Diary(Calender Events)</b></h3> -->
        <div>
        {{-- heading --}}
    <h4 id="hdtpa"><b>Diary(Calender Events)</b></h4>
    <br>
  
 
 
         
       
        
            </div>
            

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
                            <th class="text-center">Submitted <br>By</th>

                            <th class="text-center">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                    @foreach($event as $list)
                        <tr id="data">

                            <td scope="row" class="text-center">{{$list->id}}</td>
                            <td scope="row" class="text-center">{{$list->Title}}</td>
                            <td scope="row" class="text-center">{{$list->Client}}</td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center">{{$list->File}}</td>
                            <td scope="row" class="text-center">{{$list->Start_Date}}</td>
                            <td scope="row" class="text-center">{{$list->End_Date}}</td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center">
                            <button style="background-color:#FFFBF4;"class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           
                                <a href="{{url('edit_event',$list->id)}}" class="dropdown-item" >Edit</a>
                            
                           
                                <a href="{{url('event_delete',$list->id)}}" class="dropdown-item" >Delete</a>
                        
                               
                            </td>
                        </tr>
<!-- <div> -->

@endforeach 
                    </tbody>

                </table>
                <br>
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
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-center"><b>Add Event</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add-event') }}"
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
                                <option>---select---</option>
                                                            <option>event type 1</option>
                                                            <option>event type 2</option>
                                                            <option>event type 3</option>
                                                            <option>event type 4</option>
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
                                <option>---select---</option>
                                                            <option>Room 1</option>
                                                            <option>Room 2</option>
                                                            <option>Room 3</option>
                                                            <option>Room 4</option>
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
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-primary text-white"
                                                style="width:15%;background-color:#435ebe;"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"
                                                style="background-color:#435ebe;width:15%;">Update</button>
                                        </div>
                                </div> -->
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
                    <option>---select---</option>
                                                            <option>event 1</option>
                                                            <option>event 2</option>
                                                            <option>event 3</option>
                                                            <option>event 4</option>
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
                    <textarea class="form-control" name="others" id="form7Example7" rows="3"></textarea>
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
                    <option>---select---</option>
                                                            <option>Client 1</option>
                                                            <option>Client 2</option>
                                                            <option>Client 3</option>
                                                            <option>Client 4</option>
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
                    <option>---select---</option>
                                                            <option>file 1</option>
                                                            <option>file 2</option>
                                                            <option>file 3</option>
                                                            <option>file 4</option>
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
                    <option>---select---</option>
                                                            <option>Repetition 1</option>
                                                            <option>Repetition 2</option>
                                                            <option>Repetition 3</option>
                                                            <option>Repetition 4</option>
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
                    <option>---select---</option>
                                                            <option>Reminder 2</option>
                                                            <option>Reminder 3</option>
                                                            <option>Reminder 1</option>
                                                            <option>Reminder 4</option>
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

<!-- <div class="row">
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
</div> -->

<div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
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