@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit General Practice</b></h4>
    <br>

      <form action="{{url('update_practice')}}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
        <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">File No</label>
                <input type="text" class="form-control" name="file_no" value="{{$edit->file_no}}" placeholder="">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                <input type="text" class="form-control" name="client_name"  placeholder="" value="{{$edit->client_name}}">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                <input type="text" class="form-control" name="matter_type"  placeholder="" value="{{$edit->matter_type}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Other Party</label>
                <input type="text" class="form-control" name="other_party"  placeholder="" value="{{$edit->other_party}}">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                <input type="text" class="form-control" name="attorney"  placeholder="" value="{{$edit->attorney}}">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                <textarea class="form-control" rows="2" name="case_details"  placeholder="" value="{{$edit->case_details}}"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Witness</label>
                <textarea class="form-control" rows="2" name="witness"  placeholder="" value="{{$edit->witness}}"></textarea>
            </div>
        </div>
        <div class="col">

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
    



    @endsection