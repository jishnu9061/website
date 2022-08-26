@extends('layouts.hmsmain')
@section('content')

@if(Session::has('nopatient'))
   <div class="alert alert-dark" role="alert">
   {{ Session::get('nopatient')}}
   </div>                         
@endif

 <h6 class="text-muted font-semibold">Beds</h6>
     {{ Session::forget('nopatient')}}
 <hr class="mb-4">
           
                        <div class="row datas">
 
                              @foreach($wardbeds as $wardbed)
                               <div class="col-3 col-lg-3 col-md-3 edits">

                               <form action="{{url('allocateroom')}}" method="post">
                                @csrf
                                  <div class="card" >
                                    <div class="card-body px-1 py-1-2" data-toggle="modal" id="patient" data-bs-toggle="modal"
                            data-bs-target="#default">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="stats-icon purple" >
                                                    <i class="fas fa-bed" style="color:{{$wardbed->css}};"></i>
                                                </div>
                                            </div>
                                            
  
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">{{$wardbed->bedname}}</h6>
                                            </div>
                                            <input type="hidden" class="user"  value="{{$wardbed->allocateduser}}" name="somthing">
                                            <input type="hidden" class="userroom"  value="{{$wardbed->bedname}}" name="somthing">
                                            <input type="hidden" class="username"  value="{{$wardbed->username}}" name="somthing">
                                            <input type="hidden" class="categoryname"  value="{{$wardbed->category}}" name="somthing">
                                            <input type="hidden" class="notes"  value="{{$wardbed->clinicalnotes}}" name="somthing">

                                        </div>
                                    </div>
                                    @if(isset($wardbed->allocateduser))
                                   
                                       <h6 class="text-muted font-semibold" style="text-align:center; "><b>{{$wardbed->username}}</b>
                                       </h6>
                                   
                                    @else

                                     <input type="hidden" value="{{$wardbed->bedname}}" name="roomno">
                                     <input type="number" value="" name="patientid">
                                     <button type="submit" class="btn btn-secondary">Add patient</button>
                                     @endif
                                  </div>
                                  </form>
                                  </div>
                                  @endforeach
                                  {{$wardbeds->links()}}

                                  </div>
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
           
 @endsection

