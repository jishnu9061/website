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
    </section>
    <br>
    <div class="row">
        <div class="p-2" style="background-color: white;width:70%;padding:2%" id="calender">
        </div>
        <div style="width:30%">
            <h4>Today Event:-</h4>
        </div>
    </div>
    <div class="p-2" style="background-color: white;width:70%;padding:2%" id="calender">
    </div>
    <div id="exampleModal" class="modal modal-top fade calendar-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form id="add-event" action="#" method="post">
                        @csrf
                        <div class="modal-body" id="slotdata">
                            <div class="modal-header">
                                <h5 id="hdbtb">Add Event</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="sur_date"
                                                placeholder="Event Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Date From</label>
                                            <input type="text" id="enamez" class="form-control" name="sur_date">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>End Date To</label>
                                            <input type="date" class="form-control" name="sur_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea rows="4" cols="50" name="discription" class="form-control"
                                                type="text" placeholder="About Event"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Save</button>
                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
            }
            //  else {
            //     alert("This is previous day");
            // }
            $('#exampleModal').modal('show');


            if (title) {
                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                $.ajax({
                    url: "/calendar_event/action",
                    type: "POST",
                    data: {
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    success: function(data) {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Created Successfully");
                    }
                })
            }
        },
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
@endsection