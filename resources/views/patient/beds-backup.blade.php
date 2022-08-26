@extends('layouts.hmsmain')
@section('content')
@if(Session::has('nopatient'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopatient')}}
   </div>
                          
@endif
 <h6 class="text-muted font-semibold">A/c rooms</h6>
     {{ Session::forget('nopatient')}}
 <hr class="mb-4">
           
                        <div class="row datas">
 
                           @foreach($acrooms as $acroom)
                               <div class="col-3 col-lg-3 col-md-3 edits">
                          
                               <form action="{{url('allocateroom')}}" method="post">
                                @csrf
                                  <div class="card">
                                    <div class="card-body px-1 py-1-2" data-toggle="modal" id="patient" data-bs-toggle="modal"
                            data-bs-target="#default">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="stats-icon purple" >
                                                    <i class="fas fa-bed" style="color:{{$acroom->css}};"></i>
                                                </div>
                                            </div>
                                            
  
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">{{$acroom->Roomno}}</h6>
                                            </div>
                                            <input type="hidden" class="user"  value="{{$acroom->allocateduser}}" name="somthing">
                                            <input type="hidden" class="userroom"  value="{{$acroom->Roomno}}" name="somthing">
                                            <input type="hidden" class="username"  value="{{$acroom->username}}" name="somthing">
                                            <input type="hidden" class="categoryname"  value="{{$acroom->category}}" name="somthing">
                                            <input type="hidden" class="notes"  value="{{$acroom->clinicalnotes}}" name="somthing">

                                        </div>
                                    </div>
                                    @if(isset($acroom->allocateduser))
                                   
                                       <h6 class="text-muted font-semibold" style="text-align:center; "><b>{{$acroom->username}}</b>
                                       </h6>
                                   
                                    @else

                                     <input type="hidden" value="{{$acroom->Roomno}}" name="roomno">
                                     <input type="number" value="" name="patientid">
                                     <button type="submit" class="btn btn-secondary">Add patient</button>
                                     @endif
                                  </div>
                                  </form>
                                  </div>
                                  @endforeach
                                  {{$acrooms->links()}}

                                  </div>


                                  <h6 class="text-muted font-semibold">Non A/c rooms</h6>
                                  <hr class="mb-4">
           
                        <div class="row">
  
                           @foreach($rooms as $room)
                               <div class="col-3 col-lg-3 col-md-3" >

                               <form action="{{url('allocatenonacroom')}}" method="post">
                                @csrf
                                  <div class="card" >
                                    <div class="card-body px-1 py-1-2">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="stats-icon purple">
                                                    <i class="fas fa-bed" style="color:{{$room->css}};"></i>
                                                </div>
                                            </div>
                                            

                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">{{$room->Roomno}}</h6>
                                            </div>

                                        </div>
                                    </div>
                                     @if(isset($room->allocateduser))
                                   
                                       <h6 class="text-muted font-semibold" style="text-align:center; "> {{$room->allocateduser}}
                                       </h6>
                                   
                                    @else
                                     <input type="hidden" value="{{$room->Roomno}}" name="roomno">
                                     <input type="number" value="" name="patientid">
                                     <button type="submit" class="btn btn-secondary">Add patient</button>
                                     @endif
                                  </div>
                                  </form>
                                      
                                  </div>
                                  @endforeach
                                    {{$rooms->links()}}
                                 </div>
                                 <h6 class="text-muted font-semibold">Ward and beds</h6>
                                 <hr class="mb-4">
                           <div class="row">
                           <div class="container"> 
                           <select class="custom-select btn btn-secondary dropdown-toggle col-md-12" name="depname" id=                  "inlineFormCustomSelectPref">
                      <option selected>Departments</option>
                       @foreach($departments as $department)
                      <option  class="dropdown-item" value="{{$department->depname}}">{{$department->depname}}</option>
                       @endforeach
                           </select>
                           </div>
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
                                     <form action="{{url('clinicalnotes')}}" method="post" > 
                                     @csrf
                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                       <input type="text" id="aa" name="aa">
                                       
                                       <input type="text" id="cc" name="cc">
                                    
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Add Clinical notes</label>
                             
                            <textarea class="form-control" name="clinicalnotes" id="notez" rows="3"></textarea>
                            
                        </div>
                      
                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">


                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        
                                        <button type="submit" class="btn btn-primary ml-1" >
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
$(document).on('click','.edits',function(){
     //var itemvalue = $(this).val();
     
    var value = $(this).find('.user').val();
    var roomvalue = $(this).find('.userroom').val();
    var categoryvalue = $(this).find('.categoryname').val();
    var notez = $(this).find('.notes').val();
    //var namevalue = $(this).find('.username').val();

    
   


     $("#userinmodal").text(value);
     $("#roominmodal").text(roomvalue);
     $("#myModalLabel1").text(value);
     $("#aa").val(roomvalue);
     $("#bb").val(value);
     $("#cc").val(categoryvalue);
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

