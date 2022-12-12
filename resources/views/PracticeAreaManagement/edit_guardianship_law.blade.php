@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Guardianship Law</b></h4>
    <br>


    <form action="{{url('update_guardian')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
            <input type="hidden" value="{{$edit->id}}" name="id">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="matter_info" value="{{$edit->matter_info}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Petitioner</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="petitioner" value="{{$edit->petitioner}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="matter_type" value="{{$edit->matter_type}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Disabled Person</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="disable_person" value="{{$edit->disable_person}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" rows="2" name="attroney">{{$edit->attroney}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Disability Details</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" rows="2" name="disadility_details">{{$edit->disadility_details}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" rows="2" name="case_details">{{$edit->case_details}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Guardian</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="guardian" value="{{$edit->guardian}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Guardian Details</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" rows="2" name="guardian_details">{{$edit->guardian_details}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">

                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                        <span class="m-2"></span>
                        <input type="file" class="form-control" name="support_details" value="{{$edit->support_details}}">
                    </div>

                </div> -->
                <!-- <div class="col">
   
    </div> -->
            </div>


            <div class="conatainer" style="float:right;">
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

            </div>


    </form>
</div>


<!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->



@endsection