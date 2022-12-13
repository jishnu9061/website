@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>Edit Business Law</b></h4>
               <br>


<form action="">

      <div class="row">
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="2017-10-279">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Client</label>
                    <input type="text" class="form-control" placeholder="Hank Wiliams">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
       <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
       <input type="text" class="form-control" placeholder="Corporation">
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Corporation</label>
                    <textarea class="form-control" rows="2">Country Roads Albums</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2">Purpose: Producer of county music</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    
                        </div>  
    </div>
    </div>


   
   
      <!-- <div class="mb-3">

    <form action="{{url('update_business_law')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="row">
            <input type="hidden" value="{{$edit->id}}" name="id">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="matter_info" value="{{$edit-> matter_info}}" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Client</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="client_name" value="{{$edit->client_name}}" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="matter_type" value="{{$edit->matter_type}}" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Corporation</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="corporation">{{$edit->corporation}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="case_details">{{$edit->case_details}}</textarea>
                        </div>
                    </div>
                </div>
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
                 <button type="button" class="btn btn-primary">Update</button>
                 <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

    </div>
</form>

                <div class="conatainer" style="float:right;">
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

                </div>
    </form>



@endsection