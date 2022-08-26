@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<br>
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Employee Id</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Status</th>
      <th scope="col">Reason</th>

    </tr>
  </thead>
  <tbody>
 
    @foreach($leaves as $leave)
    
    <tr class="product_data">
      <th scope="row"><b>{{$leave->applicantname}}</b></th>
      <td>{{$leave->applicantid}}</td>
      <td>{{$leave->from}}</td>
      <td>{{$leave->to}}</td>
      <td>{{$leave->status}}</td>
   <input type="hidden" value="{{$leave->application}}" class="applicate" name="">
   <input type="hidden" value="{{$leave->applicantname}}" class="applicantname"  name="">
   <input type="hidden" value="{{$leave->applicantid}}" class="applicantid" id="applicantid" name="">
   <input type="hidden" value="{{$leave->id}}" class="leaveid" id="leaveid" name="">

      <th><a href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal" data-bs-target="#default">View</a></th>
    </tr>
   
    @endforeach
    
   
  </tbody>
</table>
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

                                    <div class="modal-body">
                                        
                                         <div class="card-body">
                                
                                    
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Application</label>
                             
                            <textarea class="form-control" name="clinicalnotes" id="notez" rows="3" readonly="" style="height: 200px;"></textarea>
                            
                        </div>
                      
                        </div>
                                    </div>
                                    <input type="hidden" id="roomcategory" value="" name="roomcategory">
                                    <input type="hidden" id="roomno" value="" name="roomno">


                                    <div class="row" style="margin-bottom:8px;">
                                    <div class="col-md-2">
 
                                         </div>                                       
                                         <div class="col-md-5">
                                         <form action="{{url('leavedecline')}}" method="post" > 
                                         @csrf
                                         <input type="hidden" id="leaveiddecline" name="leaveiddecline">
                                         <button type="submit" class="btn btn-danger">
                                           Decline
                                        </button> 
                                        </form>
                                         </div>
                                         <div class="col-md-5">
                                         <form action="{{url('leaveapprove')}}" method="post" > 
                                         @csrf
                                         <input type="hidden" id="leaveidapprove" name="leaveidapprove">
                                         <button type="submit" class="btn btn-primary">
                                        
                                           Approve
                                        </button>
                                         </form>
                                         </div>                                        
                                         </div>
                                     
                                     
                     
                                </div>
                            </div>
                        </div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

<script>
  $(".modal").on("hidden.bs.modal", function(){
    $(".modal-title").html("");
});
  $(document).on('click','.edits',function(){
     
  var value= $(this).closest('.product_data').find('.applicate').val();
   var valueq= $(this).closest('.product_data').find('.applicantname').val();
    var valuew= $(this).closest('.product_data').find('.applicantid').val();
    var leaveid= $(this).closest('.product_data').find('.leaveid').val();
    
    $("#leaveidapprove").val(leaveid);
    $("#leaveiddecline").val(leaveid); 
     $("#myModalLabel1").text(valueq);
     $("#cc").val(valuew);
     $("#notez").val(value);

     ;
     })
</script>

@endsection