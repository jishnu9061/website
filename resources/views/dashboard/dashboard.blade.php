@extends('layouts.hmsmain')
@section('content')

<style>
.fc-time {
    display: none;
}
</style>



<section>

    <script src="{{asset('/')}}assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="{{asset('/')}}assets/js/pages/dashboard.js"></script>
    <script src="{{asset('/')}}assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
    </script>
    <script>
    var mquery = window.matchMedia("(max-width:767.98px)");
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script>
    $(document).ready(function() {
        var SITEURL = "{{ url('/') }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var calendar = $('#full_calendar_events').fullCalendar({
            editable: true,
            editable: true,
            events: SITEURL + "/calendar-event",
            displayEventTime: true,
            eventRender: function(event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function(event_start, event_end, allDay) {
                var event_name = prompt('Event Name:');
                if (event_name) {
                    var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                    var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: SITEURL + "/calendar-crud-ajax",
                        data: {
                            event_name: event_name,
                            event_start: event_start,
                            event_end: event_end,
                            type: 'create'
                        },
                        type: "POST",
                        success: function(data) {
                            displayMessage("Event created.");
                            calendar.fullCalendar('renderEvent', {
                                id: data.id,
                                title: event_name,
                                start: event_start,
                                end: event_end,
                                allDay: allDay
                            }, true);
                            calendar.fullCalendar('unselect');
                        }
                    });
                }
            },
            eventDrop: function(event, delta) {
                var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                $.ajax({
                    url: SITEURL + '/calendar-crud-ajax',
                    data: {
                        title: event.event_name,
                        start: event_start,
                        end: event_end,
                        id: event.id,
                        type: 'edit'
                    },
                    type: "POST",
                    success: function(response) {
                        displayMessage("Event updated");
                    }
                });
            },
            eventClick: function(event) {
                var eventDelete = confirm("Are you sure?");
                if (eventDelete) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/calendar-crud-ajax',
                        data: {
                            id: event.id,
                            type: 'delete'
                        },
                        success: function(response) {
                            calendar.fullCalendar('removeEvents', event.id);
                            displayMessage("Event removed");
                        }
                    });
                }
            }
        });
    });

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }
    </script>

</section>

{{-- {{request()->id}} --}}
{{-- <h4>{{ $operation_t[0]->theatre_name }}</h4> --}}
{{-- <br />
    <h1 class="text-center text-primary">Full Calender</h1> --}}

<br />


<!-- <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio1">Main Dashboard</label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio2"> System Analytics
    </label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio3"> Banking
        Dashboard</label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio4"> KPI Dashboard</label>
</div>
<br>
<br> -->

<div id="calender"></div>


{{-- {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button> --}}

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> --}}
<div id="exampleModal" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="add-event" action="{{url('add_ot_patient')}}" method="post">
                @csrf
                <div class="modal-body" id="slotdata">
                    <div class="modal-header">
                        <h4 style="text-align:center;" class="text-white"><b>Add Events</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-lg-12">
                                <div class="form-group">
                                    <label style="color:white">Date</label>
                                    <input type="text" id="enamez" class="form-control" name="sur_date">
                                </div>
                            </div>
                            {{-- <div class="col-md-8 col-lg-8"> --}}
                            {{-- <div class="form-group">
                                        <label>Title</label> --}}
                            {{-- <input type="hidden" value="Booked" class="form-control" name="sur_title" style="text-align:center;"> --}}
                            {{-- </div> --}}
                            <div class="col-md-8 col-lg-12">
                                <div class="form-group">
                                    <label style="color:white">Event Name</label>
                                    <input type="text" value="" class="form-control" name="sur_title"
                                        style="text-align:center;">
                                    {{-- @php
                                      $users=DB::table('users')->where('id',Auth::user()->id)->get(); 
                                    @endphp --}}
                                    {{-- <select class="form-control" id="doctor_name" name="doctor_name" style="pointer-events:none">
                                      <option>Select</option> 
                                      @foreach ($users as $doc)
                                          <option value="{{$doc->id}}"{{($doc->id==Auth::user()->id) ? "selected" : ""}}>{{ $doc->name }}
                                    </option>
                                    @endforeach
                                    </select> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Choose Color</label>
                                            <input type="color" name="color" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}
                        <div class="row">
                            {{-- <div class="col-md-4 col-lg-4">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" id="enamez" class="form-control" name="sur_date">
                                        </div>
                                    </div> --}}
                            <div class="col-md-6 col-lg-6">
                                <?php
                                            date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                                          ?>
                                <div class="form-group">
                                    <label style="color:white">Start Time</label>
                                    <input type="time" name="start_time" id="start_time" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <?php
                                            date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                                          ?>
                                <div class="form-group">
                                    <label style="color:white">End Time</label>
                                    <input type="time" name="end_time" id="end_time" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                    <label>Department</label>
                                    @php
                                        $department=DB::table('users')->where('departments',Auth::user()->departments)->get();
                                    @endphp
                                    <select class="form-control" name="dept_name" id="dept_name" style="pointer-events:none">
                                        <option>Select</option>

                                        @foreach ($department as $dept)
                                          <option value="{{$dept->departments}}"{{ ($dept->departments==Auth::user()->departments) ? "selected" : ""}}>{{$dept->departments}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                </div>
        </div> --}}
        {{-- <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Operation Theatre </label>
                                        <select class="form-control" name="theatre_name" id="theatre_name" style="pointer-events:none">
                                            <option>Select</option>
                                            @foreach ($operation_t as $theatre)
                                            <option value="{{$theatre->id}}"{{($theatre->id==$operation_t[0]->id) ? "selected" : "" }}>{{ $theatre->theatre_name }}
        </option>
        @endforeach
        </select>

    </div>
</div>
<div class="col-md-6 col-lg-6">
    <div class="form-group">
        <input type="hidden" name="patient_id" value="{{ $patient_id[0]->id}}">
        <label>Patient Name</label>
        <select class="form-control" id="ot_patient" name="ot_patient" style="pointer-events:none">
            <option>select</option>
            @foreach ($patient_details as $pt)
            <option value="{{ $pt->id }}" {{ ($pt->id==$patient_id[0]->id) ? "selected" : "" }}>{{$pt->firstname}}
            </option>
            @endforeach
        </select>
    </div>
</div>
</div> --}}
{{-- <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="mb-3">
                                      <div class="form-group">
                                    <label>Surgery name</label>
                                    @php
                                         $surgery=DB::table('surgery_types')->get();
                                    @endphp
                                    <select class="form-control" aria-label="Default select example" name="sur_name" id="sur_name" required>
                                      <option value="">Select</option>
                                    @foreach ($surgery as $key )
                                        <option value="{{ $key->id }}">{{ $key->surgery_name }}</option>
@endforeach
</select>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6">
    <div class="mb-3">
        <div class="form-group">
            <label>Doctor</label>
            @php
            $users=DB::table('users')->where('id',Auth::user()->id)->get();
            @endphp
            <select class="form-control" id="doctor_name" name="doctor_name" style="pointer-events:none">
                <option>Select</option>
                @foreach ($users as $doc)
                <option value="{{$doc->id}}" {{($doc->id==Auth::user()->id) ? "selected" : ""}}>{{ $doc->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
</div> --}}
</div>
<div class="modal-footer">
    {{-- <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> --}}
    <button type="button" class="btn  text-white" data-bs-dismiss="modal" style="width:30%" data-dismiss="modal"> <i
            class="bx bx-x d-block d-sm-none"></i>
        <span class="d-none d-sm-block"></span><b>Close</b></button>
    <button type="submit" class="btn text-white" style="width:30%"><b>Save</b></button>
</div>

</div>
</form>
</div>
</div>
</div>
{{-- event viewmodal --}}
{{-- <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h5 class="h4"><span class="mr-3 event-icon weight-400"></span><span class="event-title"></span></h5>
                            <div class="event-body"></div>
                            <h5 class="h4"><span class="mr-3 event-icon weight-400"></span><span class="event-start"></span></h5>
                            <div class="event-body"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> --}}
{{-- <div class="modal fade" id="modal-view-event" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-header" style="background-color:#5e829d">
                                <h4 style="text-align:center;" class="text-white"><b>Appointment Details</b></h4>
                            </div>
                            Doctor:
                            <br/>
                            <input type="text" class="form-control" name="doc_name" id="doc_name">
                            Start time:
                            <br />
                            <input type="text" class="form-control" name="start_timez" id="start_timez">
            
                            End time:
                            <br />
                            <input type="text" class="form-control" name="finish_time" id="finish_time">
                        </div>
            
                        <div class="modal-footer">
                            <button type="button" class="btn btn text-white" data-dismiss="modal" style="background-color:#5e829d;">Close</button>
                        </div>
                    </div>
                </div>
            </div> --}}
{{-- event_viewmodal end --}}
<script>
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calender').fullCalendar({
        editable: true,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: '/calendar_event/',
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            var dat = $.fullCalendar.formatDate(start, 'DD-MM-Y');
            //    alert (dat);
            $('#enamez').val(dat);
            // var title = prompt('Event Title:');
            var date = moment();
            // var currentDate = date.format('D-MM-YYYY');
            // console.log(currentDate);
            if (dat >= date.format('D-MM-YYYY')) {
                $('#exampleModal').modal('show');
            } else {
                alert("This is previous day");
            }
            // $('#exampleModal').modal('show');


            // if(title)
            // {
            //     var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

            //     var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

            //     $.ajax({
            //         url:"/calendar_event/action",
            //         type:"POST",
            //         data:{
            //             title: title,
            //             start: start,
            //             end: end,
            //             type: 'add'
            //         },
            //         success:function(data)
            //         {
            //             calendar.fullCalendar('refetchEvents');
            //             alert("Event Created Successfully");
            //         }
            //     })
            // }
        },
        // eventClick: function(event, jsEvent, view) {
        //     console.log(event.start);
        // 		jQuery('.event-icon').html("<i class='fa fa-"+event.icon+"'></i>");
        // 		jQuery('.event-title').html(event.title);
        // 		jQuery('.event-start').html(event.start);
        // 		jQuery('.event-body').html(event.description);
        // 		jQuery('.eventUrl').attr('href',event.url);
        // 		jQuery('#modal-view-event').modal();
        // 	},
        eventClick: function(calEvent, jsEvent, view) {
            console.log(calEvent.doctor);
            $('#sur_title').val(calEvent.title);
            $('#doc_name').val(calEvent.doctor);
            $('#start_timez').val(moment(calEvent.start).format('HH:mm:ss'));
            $('#finish_time').val(moment(calEvent.end).format('HH:mm:ss'));
            $('#modal-view-event').modal();
        }
    });

});
</script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}


@endsection