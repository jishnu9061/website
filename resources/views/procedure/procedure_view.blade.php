@extends('layouts.hmsmain')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
<style>
    .under_line
    {
        text-decoration: none;
    }
    .sample{
        width: 20px;
    height: 20px;
    border-radius: 0.5rem;
    background-color: red;
    float: right;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .sample_1{
        width: 20px;
    height: 20px;
    border-radius: 0.5rem;
    background-color: green;
    float: right;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .sample_2{
        width: 20px;
    height: 20px;
    border-radius: 0.5rem;
    background-color: blue;
    float: right;
    display: flex;
    align-items: center;
    justify-content: center;
    }
</style>
@if(Session::has('nopatient'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopatient')}}
   </div>
                          
@endif
<br>
<div class="row">
    <div class="col-md-6 col-lg-6">
    <h3 style="color:#435ebe;">Operation Theatre</h3>
    </div>
    <div class="col-md-2 col-lg-2">
        <i class="badge bg-info">Available</i>
    </div>
    <div class="col-md-2 col-lg-2">
        <i class="badge bg-danger">Not Available</i>
    </div>
</div>
     {{ Session::forget('nopatient')}}
 <hr class="mb-4">
           
                        <div class="row datas">
                            {{-- @php
                                dd($procedure);
                            @endphp --}}
                           @foreach($procedure as $data)
                           {{-- @if ($data->status==1 && $data->depname==$data->departments) --}}
                              @if($data->status==1) 
                          
                               <div class="col-3 col-lg-3 col-md-3 edits">

                               {{-- <form action="{{url('allocateamb')}}" method="post">
                                @csrf --}}
                                  <div class="card" style="background-color:rgba(238, 213, 233, 0.911);">
                                   {{-- <a class="under_line"  href="{{ url('calendar_event'.'/'.$data->id) }}" target="_blank"> <div class="card-body px-1 py-1-2" data-toggle="modal" id="patient" data-bs-toggle="modal" --}}
                                    <a class="under_line" href="{{ url('calendar_event') }}" target="_blank"> <div class="card-body px-1 py-1-2" data-toggle="modal" id="patient" data-bs-toggle="modal"

                            @if ($data->status==1):
                            data-bs-target="#default1" 
                            @else
                            data-bs-target="#default2" 
                            @endif
                           
                            
                            >
                                        <div class="row">
                                            <div class="col-md-3">
                                            @php
                                                    if($data->status==1){
                                                        $color_name="#0dcaf0";
                                                        $ot_status="Available";
                                                    }
                                                    
                                                    // elseif($data->status==2){
                                                    //     $color_name="green";
                                                    //     $ot_status="Active";

                                                    // }
                                            
                                                    else{
                                                        $color_name="red"  ;
                                                        $ot_status="Unavailable";

                                                    }
                                                   

                                                @endphp
                                                
                                                <div class="stats-icon purple" >
                                                    <i class="fas fa-bed" style="color:{{ $color_name }};"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                {{-- <h6 class="text-muted font-semibold">{{$data->id }}</h6> --}}
                                                <h5 style="color:rgba(22, 175, 48, 0.87);">{{$data->theatre_name }}</h5>
                                                <h6 style="color:rgba(36, 211, 20, 0.781);">{{$ot_status }}</h6>
                                                <input type="hidden" id="ot_id" value="{{$data->id }}">
                                                <input type="hidden" id="ot_name" value="{{$data->theatre_name }}">
                                                <input type="hidden" id="" value="{{$data->department}}">
                                                <input type="hidden" id="" value="{{$data->depname}}">
                                                <input type="hidden" id="" value="{{$data->status}}">
                                            </div>
                                            
  
                                        </div>
                                    </div></a>
                                    {{-- @if(isset($data->patient))
    
                                   
                                    @else

        
                                     @endif --}}
                                  </div>
                                  {{-- </form> --}}
                                  </div>
                                  @endif
                                  @endforeach
        
                                  </div>
                                  {{-- <div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            
                                            <div class="modal-body">
                                                <meta name="csrf-token" content="{{ csrf_token() }}" />
                                                <!DOCTYPE html>
                                                <html>
                                                <head>
                                                    <title>Laravel Fullcalender Tutorial Tutorial - ItSolutionStuff.com</title>
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                                  
                                                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
                                                  
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
                                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
                                                </head>
                                                <body>
                                                  
                                                <div class="container">
                                                    <h1>Laravel FullCalender Tutorial Example - ItSolutionStuff.com</h1>
                                                    <div id='calendar'></div>
                                                </div>
                                                   
                                                <script>
                                                $(document).ready(function () {
                                                   
                                                var SITEURL = "{{ url('/') }}";
                                                  
                                                $.ajaxSetup({
                                                    headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                    }
                                                });
                                                  
                                                var calendar = $('#calendar').fullCalendar({
                                                                    editable: true,
                                                                    events: SITEURL + "/fullcalender",
                                                                    displayEventTime: false,
                                                                    editable: true,
                                                                    eventRender: function (event, element, view) {
                                                                        if (event.allDay === 'true') {
                                                                                event.allDay = true;
                                                                        } else {
                                                                                event.allDay = false;
                                                                        }
                                                                    },
                                                                    selectable: true,
                                                                    selectHelper: true,
                                                                    select: function (start, end, allDay) {
                                                                        var title = prompt('Event Title:');
                                                                        if (title) {
                                                                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                                                                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                                                                            $.ajax({
                                                                                url: SITEURL + "/fullcalenderAjax",
                                                                                data: {
                                                                                    title: title,
                                                                                    start: start,
                                                                                    end: end,
                                                                                    type: 'add'
                                                                                },
                                                                                type: "POST",
                                                                                success: function (data) {
                                                                                    displayMessage("Event Created Successfully");
                                                  
                                                                                    calendar.fullCalendar('renderEvent',
                                                                                        {
                                                                                            id: data.id,
                                                                                            title: title,
                                                                                            start: start,
                                                                                            end: end,
                                                                                            allDay: allDay
                                                                                        },true);
                                                  
                                                                                    calendar.fullCalendar('unselect');
                                                                                }
                                                                            });
                                                                        }
                                                                    },
                                                                    eventDrop: function (event, delta) {
                                                                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                                                                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                                                  
                                                                        $.ajax({
                                                                            url: SITEURL + '/fullcalenderAjax',
                                                                            data: {
                                                                                title: event.title,
                                                                                start: start,
                                                                                end: end,
                                                                                id: event.id,
                                                                                type: 'update'
                                                                            },
                                                                            type: "POST",
                                                                            success: function (response) {
                                                                                displayMessage("Event Updated Successfully");
                                                                            }
                                                                        });
                                                                    },
                                                                    eventClick: function (event) {
                                                                        var deleteMsg = confirm("Do you really want to delete?");
                                                                        if (deleteMsg) {
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: SITEURL + '/fullcalenderAjax',
                                                                                data: {
                                                                                        id: event.id,
                                                                                        type: 'delete'
                                                                                },
                                                                                success: function (response) {
                                                                                    calendar.fullCalendar('removeEvents', event.id);
                                                                                    displayMessage("Event Deleted Successfully");
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
                                                  
                                                </body>
                                                </html> 
                                            </div>
                                        </div>
                                    </div>
                                  </div> --}}
 @endsection

