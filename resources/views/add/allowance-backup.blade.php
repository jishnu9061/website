@extends('layouts.hmsmain')
@section('content')





<a href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
                            data-bs-target="#default">View</a>
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
                                
                                    
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Application</label>
                             
                            <textarea class="form-control" name="clinicalnotes" id="notez" rows="3" readonly="" style="height: 200px;"></textarea>
                            
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
                                           Approve
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
  var value= $(this).closest('.product_data').find('.applicate').val();
   var valueq= $(this).closest('.product_data').find('.applicantname').val();
    var valuew= $(this).closest('.product_data').find('.applicantid').val();

     $("#myModalLabel1").text(valueq);
     $("#cc").val(valuew);
     $("#notez").val(value);

     ;
     })
</script>

@endsection