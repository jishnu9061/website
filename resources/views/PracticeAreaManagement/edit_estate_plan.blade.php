@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>Edit Estate Planning</b></h4>
               <br>


<form action="{{url('update_estate_plan')}}" method="post">
  @csrf
               <div class="row align-items-start">
                <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <input type="text" class="form-control" placeholder="" value="{{$edit->file_no}}" name="file_no">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <input type="text" class="form-control" placeholder="" value="{{$edit->client_name}}" name="client_name">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="" value="{{$edit->matter_type}}" name="matter_type">
        </div>
    </div>
  </div>
  
  <div class="row align-items-cener">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                    <textarea class="form-control" rows="2" placeholder="" value="{{$edit->estate_details}}" name="estate_details"></textarea>
                        </div>
    </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Trust</label>
                    <textarea class="form-control" rows="2" placeholder="" value="{{$edit->trust}}" name="trust"></textarea>
                        </div>
    </div>
    <div class="col">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <textarea class="form-control" rows="2" placeholder="" value="{{$edit->property_details}}" name="property_details"></textarea>
                        </div>
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Accountant</label>
                    <textarea class="form-control" rows="2" placeholder="" value="{{$edit->accoundant}}" name="accoundant"></textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Financial Advisor</label>
                    <textarea class="form-control" rows="2" placeholder="" value="{{$edit->financier}}" name="financier"></textarea>
                        </div>
    </div>
    <div class="col">
       
    </div>
</div>

   
   
    
   
      <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->


  <div class="conatainer" style="float:right;">
        <br>
                 <button type="submit" class="btn btn-primary">Update</button>
                 <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

    </div>

</form>
</div>
@endsection