@extends('layouts.hmsmain')
@section('content')
@if(Session::has('nopatient'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopatient')}}
   </div>

@endif

     {{ Session::forget('nopatient')}}
 <hr class="mb-4">
                                      <div class="container">
<div class="row">



<div class="col-md-7">
@if( Auth::user()->role == 'Department Admin' )
<form method="post" action="depbeds">
@else
<form method="post" action="beds">
@endif

    @csrf
    <select class="custom-select btn btn-secondary dropdown-toggle col-md-12" name="roomcat" id="inlineFormCustomSelectPref">
        <option selected>Departments</option>
         @foreach($departments as $dept)
        <option  class="dropdown-item" value="{{$dept->depname}}">{{$dept->depname}}</option>
         @endforeach
             </select>
                             <select class="custom-select btn btn-secondary dropdown-toggle col-md-12" name="roomcat" id=                  "inlineFormCustomSelectPref">
                      <option selected>Room Category</option>
                       @foreach($roomcats as $roomm)
                      <option  class="dropdown-item" value="{{$roomm->category}}">{{$roomm->category}}</option>
                       @endforeach
                           </select>
</div>
<div class="col-md-5">
  <button
 type="submit" class="form-control btn btn-primary btn-block">
    Search
  </button>
  </form>
</div>
</div>


                           </div>
                           <br><br>

                        <div class="row datas">

                           @foreach($room as $data)

                      <div class="col-1 col-lg-1 col-md-1 editsx" style="padding-bottom: 20px;" data-toggle="modal" id="patient" data-bs-toggle="modal"
                        @if($data->allocateduser)

                      data-bs-target="#default"
                      @else
                      data-bs-target="#default2"
                      @endif
                      >

                               <form action="{{url('allocateroom')}}" method="post">
                                @csrf
                                              <div class="stats-icon purple" >
                                                <i class="fas fa-bed" style="color:{{$data->css}};"></i>
                                                </div>
                                                     <input type="hidden" class="bedid"  value="{{$data->id}}" name="somthing" id="beduniqid">
                                                     <input type="hidden" class="allocuser"  value="{{$data->allocateduser}}" name="allocuser">

                               </form>
                                  </div>
                                  @endforeach


                                  </div>




                                 <hr class="mb-4">
                           <div class="row">

                           </div>
                           <br>



             <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

              <h5 class="modal-title bb" id="myModalLabel1">Patient Id : </h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                         <div class="card-body">
                                           <label for="exampleFormControlTextarea1" class="form-label">Room No</label>
                                           <form action="{{url('removepatientfrombed')}}" method="post" >
                                       @csrf

                                           <input type="text" id="aa" name="roomnom" class="form-control"><br>

                                        <label for="exampleFormControlTextarea1" class="form-label">Patient</label>

                                        <input type="hidden" id="roomcategory1" value="" name="roomcategory">
                                       <input type="text" id="cc" name="patientid" class="form-control">
                                       <button type="submit" class="form-control btn btn-danger">Remove Patient</button>
                                      </form>
                        <div class="form-group mb-3">
                        <form action="{{url('allocateroom')}}" method="post" >
                                     @csrf
                            <label for="exampleFormControlTextarea1" class="form-label">Add Clinical notes</label>

                            <textarea class="form-control" name="clinicalnotes" id="notez" rows="3"></textarea>

                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">

                                    <input type="hidden" value="{{$cat}}" name="roomcat">
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1">
                                           Add
                                        </button>

                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>

                        <div class="modal fade text-left" id="default2" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">

              <h5 class="modal-title bb" id="myModalLabel1">Patient Id : </h5>
          <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('allocateroom')}}" method="post" >
                                     @csrf
                                    <div class="modal-body">

                                         <div class="card-body">
                                           <label for="exampleFormControlTextarea1" class="form-label">Room No</label>
                                       <input type="text" id="aaa" name="roomnom" class="form-control"><br>

                                        <label for="exampleFormControlTextarea1" class="form-label">Add Patient</label>
                                       <input type="text" id="cc" name="patientid" class="form-control" placeholder="Enter Patient Id">


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Add Clinical notes</label>

                            <textarea class="form-control" name="clinicalnotes" id="notez" rows="3"></textarea>

                        </div>

                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">

                                    <input type="hidden" value="{{$cat}}" name="roomcat">
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary ml-1">
                                           Add
                                        </button>

                                    </div>
                                      </form>


                                </div>
                            </div>
                        </div>

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>
  $(".modal").on("hidden.bs.modal", function(){
    $(".modal-title").html("");
});
$(document).on('click','.editsx',function(){
     //var itemvalue = $(this).val();

    var valuez = $(this).find('.bedid').val();
    var value = $(this).find('.user').val();
    var roomvalue = $(this).find('.userroom').val();
    var categoryvalue = $(this).find('.categoryname').val();
    var notez = $(this).find('.notes').val();
    var allocuser = $(this).find('.allocuser').val();

    //var namevalue = $(this).find('.username').val();

     $("#userinmodal").text(value);
     $("#roominmodal").text(roomvalue);
     $("#myModalLabel1").text(value);
     $("#aa").val(valuez);
     $("#aaa").val(valuez);
     $("#bb").val(value);
     $("#cc").val(allocuser);
     $("#notez").val(notez);


  //var itemvalue = $(this).closest('.datas').find('.prodname').val();
     ;
     })


$(document).ready(function(){
    $("#pat").hide();
    $("#pat1").hide();
    $('#patient').click(function() {
    $(this).closest('.patt').find('#pat').show();
    $("#pat1").show();
    });
});
</script>

 @endsection

