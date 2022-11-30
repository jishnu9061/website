@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Family Law</b></h4>
    <br>


    <form action="{{url('update_family_law')}}" method="post">
      @csrf
        <div class="row align-items-start">
            <input type="hidden" name="id" value="{{$edit->id}}">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <input type="text" class="form-control" placeholder="" name="file_no" value="{{$edit->file_no}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <input type="text" class="form-control" placeholder="" name="client_name"
                        value="{{$edit->client_name}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="" name="matter_type"
                        value="{{$edit->matter_type}}">
                </div>
            </div>
        </div>

        <div class="row align-items-cener">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Other Party</label>
                    <input type="text" class="form-control" placeholder="" name="other_party"
                        value="{{$edit->other_party}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <input type="text" class="form-control" placeholder="" name="attorney" value="{{$edit->attorney}}">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2" placeholder="" name="case_details"
                        value="{{$edit->case_details}}"></textarea>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Marriage Details</label>
                    <textarea class="form-control" rows="2" placeholder=" " name="marrige"
                        value="{{$edit->marrige}}"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <textarea class="form-control" rows="2" placeholder=" " name="property"
                        value="{{$edit->property}}"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Child Details</label>
                    <textarea class="form-control" rows="2" placeholder=" " name="chile_details"
                        value="{{$edit->child_details}}"></textarea>
                </div>

            </div>
        </div>


        <div class="conatainer" style="float:right;">
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

        </div>
    </form>


    <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->



    @endsection