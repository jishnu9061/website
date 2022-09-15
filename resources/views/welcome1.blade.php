@extends('layouts.add_client')
@section('content')
{{-- <div class="container mt-5" style="max-width: 100%">
                        
                        <div id='full_calendar_events'></div>
                    </div> --}}
                    <div class="pd-ltr-20 xs-pd-20-10">
	
                        <div class="min-height-200px">
                           
                            <div class="pd-20 card-box mb-30">
                                <div class="calendar-wrap">
                                    <div id="calendar" class="fc fc-bootstrap4 fc-ltr">
                                   <div class="fc-right"></div></div><div class="fc-clear"></div></div>
                                  <div class="fc-clear">
                                    </div>
                            </div>
                                <div class="fc-view-container" style="">
                                    <div class="fc-view fc-month-view fc-basic-view" style="">
                                        <table class="table-bordered table-calender ">
                                            <thead class="fc-head">
                                                <tr style="padding: 10px">
                                                    <td class="fc-head-container ">
                                                        <div class="fc-row table-bordered table-calender">
                                                            <table class="table-bordered  ">
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </thead>
                                        </table>
                                    </div>
                                    
                                </div>
                                <!-- calendar modal -->
                                <div id="modal-view-event" class="modal modal-top fade calendar-modal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4 class="h4"><span class="mr-3 event-icon weight-400"></span><span class="event-title"></span></h4>
                                                <div class="event-body"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                             <div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form id="add-event">
                                        <div class="modal-body" id="slotdata">
                                            <h4 class="text-blue h4 mb-10">Book Slot</h4>
                                            <input type="text" id="enamez" class="form-control" name="">
                                            <input type="text" name="pname" class="form-control" id="name">
                                            <div></div>
                                            {{-- <div class="scroll-bar-sub scrollbar" id="style-1"> --}}
                                            {{-- <div class="row d-flex justify-content-center"> --}}
                                                
                                                                                   
                                            <!-- <div class="col-md-4 mb-3">
                                                    <span class="Badge">
                                                        Booked<span class="u-hiddenVisually">Unread Messages</span>
                                                       </span>
                                                    <div class="box booked p-3 border-radius-10 box-shadow bg-white">
                                                        
                                                        <div class="slot-image">
                                                        <img src="style/images/booking3.png" alt="">
                                                    </div> 
                                                  <h6 class=""></h6>
                                                      
                                                        
                                                        <button type="button" class="btn  btn-dark  btn-block "data-toggle="modal" data-target="#small-modal" id="sa-success">view</button>
                                                        
                                                    </div>
                                                </div> -->
                                        
                                            
                                            {{-- </div> --}}
                                            {{-- </div> --}}
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </div>
                                    
                                </div>
                            </form>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                            <meta name="csrf-token" content="cItZcIAZugLXCdiUxw9ZKqPYQDDMekfiXDS49Myq">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            
             <script type="text/javascript">
                jQuery(document).ready(function(){
                jQuery("#add-event").submit(function(){
                    alert("Submitted");
                    var values = {};
                    $.each($('#add-event').serializeArray(), function(i, field) {
                        values[field.name] = field.value;
                    });
                    console.log(
                        values
                    );
                });
            });
            
            (function () {
                'use strict';
                // ------------------------------------------------------- //
                // Calendar
                // ------------------------------------------------------ //
                jQuery(function() {
                    // page is ready
                    jQuery('#calendar').fullCalendar({
                        themeSystem: 'bootstrap4',
                        // emphasizes business hours
                        businessHours: false,
                        defaultView: 'month',
                        // event dragging & resizing
                        editable: true,
                        // header
            
                        header: {
                            left: 'title',
                            center: 'month,agendaWeek,agendaDay',
                            right: 'today prev,next'
                        },
                        
            
                        events: [
                        
                        ],
                        dayClick: function(date, jsEvent, view, resourceObj) {
                            
                         if (moment().format('YYYY-MM-DD') === date.format('YYYY-MM-DD') || date.isAfter(moment())) {
                             jQuery('#modal-view-event-add').modal('show');
                       var datetoday=date.format();
                       document.getElementById('enamez').value =datetoday;
                         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                         $.ajax({
                        method:"POST",
                     
                        url:"/searchslotss",
                        data:{
                           
                            'searchvalue':datetoday,
                        
                        },
                      
                       success: function (response){
                           $("#slotdata").html(response);
                        },
            
                      });
                } else {
                     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                        
                }
                   
            
              
                        },
                        eventClick: function(event, jsEvent, view) {
                            jQuery('.event-icon').html("<i class='fa fa-"+event.icon+"'></i>");
                            jQuery('.event-title').html(event.title);
                            jQuery('.event-body').html(event.description);
                            jQuery('.eventUrl').attr('href',event.url);
                            jQuery('#modal-view-event').modal();
                        },
                    })
            });
            
            })(jQuery);
            </script>
                      
            
                {{-- </div>
            
            </div>
            </div> --}}
@endsection                