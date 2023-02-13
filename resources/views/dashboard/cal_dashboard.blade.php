@extends('layouts.hmsmain')
@section('content')
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

<br>
<br>
<style>
    .fc-event{
        background-color: #1d1d50;
        color:white;
    }
    .fc-time{
        color:white;
    }
    .fc-title{
        color:white;
    }
</style>
<div class="row" style="width:100%">
    <div  style="width:65%">
        <div id="calendar">
        </div>
    </div>
    <div style="width:35%;padding-left:5%;">
        <h6><b>Today Events:-</b></h6>
        <i>under construction</i>
        <br>
        <br>
        <h6><b>This Week Events:-</b></h6>
        <i>under construction</i>
    </div>
</div>

<div id="eventModal" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding: 0px;">
                    @csrf
                    <div class="modal-body" id="slotdata">
                        <div class="modal-header" style="width:50%;margin:0% 25% 0% 25%;">
                            <h5 id="hdbtb" style="color:white;background-color:#1d1d50;">Create Event</h5>
                        </div> 
                        <div class="modal-body">
                            <div class="row">
                                <div class="" style="width: 100%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="title" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Tilte</label>
                                        <input type="text" placeholder="Enter Title " style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;" class="form-control" name="title" id="title" value="">
                                        <span id="titleError" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 50%">
                                    <div class="">
                                        <label for="start" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start Date</label><br>
                                        {{-- <span id="start"></span> --}}
                                        <input type="datetime-local" style="border-color:green;width=45%;border-radius: 7px;height:35px;" class="form-control" name="start" id="start" value="">
                                    </div>
                                </div>
                                <div class="" style="width: 50%">
                                    <div class="">
                                        <label for="end" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End Date</label>
                                        <input type="datetime-local" placeholder="End " style="border-color:red;width=45%;border-radius: 7px;height:35px;" class="form-control" name="end" id="end" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-12">
                                    <div class="form-group">
                                        <label style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description</label>
                                        <textarea rows="4" cols="50" name="description" class="form-control" style="border-radius: 7px;" id="description"
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
                                <button type="submit" id="saveBtn"class="btn btn-primary float:left;" Style="width:50%;color:white;background-color:#1d1d50;">Save</button>
                                <button type="button" class="btn btn-primary " data-bs-dismiss="modal" Style="margin-left:10px;width:40%;float:right;">Close</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<div id="editeventModal" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="padding: 0px;">
                <form id="editevent"  method="post">
                    @csrf
                    <div class="modal-body" id="slotdata">
                        <div class="row">
                            <div class="modal-header" style="width:65%;*/margin:0% 25% 0% 25%;">
                                <h5 id="" style="color:#1d1d50;"><b>Edit/update Event:-</b></h5>
                            </div> 
                            <div style="width:35%">
                                <button type="button" id="deleteBtn"class="btn btn-primary " data-bs-dismiss="modal" Style="margin-left: 50%;width: 50%;float: left;color: white;background-color: #FF6F61;">Delete</button>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="" style="width: 100%">
                                    <div class=""><span style="color: red">*</span>
                                        <label for="e_title" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Tilte</label>
                                        <input type="text" placeholder="Enter Title " style="border-color: #1d1d50;width=45%;border-radius: 7px;height:35px;" class="form-control" name="e_title" id="e_title" value=""required>
                                        <span id="titleError" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="" style="width: 50%">
                                    <div class="">
                                        <label for="e_start" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Start Date</label><br>
                                        {{-- <span id="start"></span> --}}
                                        <input type="datetime-local" style="border-color:green;width=45%;border-radius: 7px;height:35px;" class="form-control" name="e_start" id="e_start" value=""required>
                                    </div>
                                </div>
                                <div class="" style="width: 50%">
                                    <div class="">
                                        <label for="e_end" style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">End Date</label>
                                        <input type="datetime-local" placeholder="End " style="border-color:red;width=45%;border-radius: 7px;height:35px;" class="form-control" name="e_end" id="e_end" value=""required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-12">
                                    <div class="form-group">
                                        <label style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Description</label>
                                        <textarea rows="4" cols="50" name="e_description" class="form-control" style="border-radius: 7px;" id="e_description"
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
                                <button type="submit" onclick="e_checkdate()"id="updateBtn"class="btn btn-primary float:left;" Style="width:50%;color:white;background-color:#1d1d50;">Update</button>
                                <button type="button" class="btn btn-primary " data-bs-dismiss="modal" Style="margin-left:10px;width:40%;float:right;">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){// ---------------------------------------------------------calender script start
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var calendar =$('#calendar').fullCalendar({
            
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"{{route('calendar_data')}}",
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDays) {
                $('#eventModal').modal('toggle');
                var start_date = moment(start).format('YYYY-MM-DD');
                var start_time = moment(start).format('HH:mm');
                var end_date = moment(end).format('YYYY-MM-DD');
                var end_time = moment(end).format('HH:mm');
                document.getElementById("start").value = start_date+"T"+start_time;
                document.getElementById("end").value = end_date+"T"+end_time;
                $('#saveBtn').click(function(){
                    var title = $('#title').val();
                    var start_date_m = $('#start').val();
                    var end_date_m = $('#end').val();
                    var description = $('#description').val();
                    $.ajax({
                        url:"{{ route('calendar/store') }}",
                        type:"POST",
                        dataType:'json',
                        data:{ title, start_date_m, end_date_m, description  },
                        success:function(response){
                            $('#eventModal').modal('hide')
                            $('#calendar').fullCalendar('renderEvent', {
                                'title': response.title,
                                'start' : response.start,
                                'end'  : response.end,
                                'color' : response.color
                            });
                            },
                        error:function(error){
                            if(error.responseJSON.errors) {
                            $('#titleError').html(error.responseJSON.errors.title);
                            }
                        },
                    });
                });
            },
            editable: true,
            eventDrop: function(event){
                var id = event.id;
                var start_date = moment(event.start).format('YYYY-MM-DD');
                var end_date = moment(event.end).format('YYYY-MM-DD');
                $.ajax({
                    url:'calendar/update/' + id,
                    type:"PATCH",
                    dataType:'json',
                    data:{ start_date, end_date },
                    success:function(response){
                        swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: "Event Updated!",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    },
                    error:function(error){
                        console.log(error)
                    },
                });
            },
            eventClick: function(event){
                var id = event.id;
                document.getElementById("e_start").value =event.start._i ;
                document.getElementById("e_title").value =event.title ;
                document.getElementById("e_description").value =event.description ;
                $('#editevent').attr('action',"{{ url('update_calendar') }}"+"/"+id);
                $('#editeventModal').modal('toggle');
                document.getElementById("e_end").value =event.end._i??null ;
                $('#deleteBtn').click(function(){
                    if(confirm('Are you sure want to remove it')){
                        $.ajax({
                            url:'calendar/delete/' + id,
                                type:"DELETE",
                                dataType:'json',
                                success:function(response){
                                    $('#calendar').fullCalendar('removeEvents', response);
                                    swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: "Event Deleted!",
                                        showConfirmButton: false,
                                        timer: 1000
                                    });
                                },
                                error:function(error){
                                    console.log(error)
                                },
                        });
                    }
                });
            },
            selectAllow: function(event){
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
            },
        });
        $("#eventModal").on("hidden.bs.modal", function () {
                $('#saveBtn').unbind();
            
        });
        
        $('.fc-event').css('font-size', '13px');
        $('.fc-event').css('width', '20px');
        $('.fc-event').css('border-radius', '50%');
        $('.fc-event').css('background-color', '#1d1d50');
        $('.fc-event').css('textcolor', 'white');
        $('.fc-title').css('background-color', '#1d1d50');
        $('.fc-title').css('textcolor', 'white');
    });// ---------------------------------------------------------calender script end


    function e_checkdate() {// to  check End Date must be greater than Strat Date
        var e_start_ck = document.getElementById("e_start").value;
        var e_end_ck = document.getElementById("e_end").value;
        if (e_start_ck > e_end_ck) {
            alert("End Date must be greater than Strat Date");
                return false;
        }
        return true;
    }
</script>

@endsection