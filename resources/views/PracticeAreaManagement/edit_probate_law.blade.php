@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Probate Law</b></h4>
    <br>




    <form method="post" action="{{url('update_probate_law')}}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
            <input type="hidden" value="{{$edit->id}}" name="id">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" value="{{$edit->matter_info}}" name="matter_info">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Executor / Administator</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" value="{{$edit->executor}}"  name="executor">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" value="{{$edit->matter_type}}"  name="matter_type">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Deceased</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" value="{{$edit->deceased}}"  name="deceased">
                        </div>
                    </div>
                </div>
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
                        <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" rows="2" name="estate_details">{{$edit->estate_details}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                <span class="m-2"></span>
                <input type="file" class="form-control" name="supporting_details" value="{{$edit->supporting_details}}" >
            </div>
        </div>
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