@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('estate_plan')}}" style="color: #1D1D50;">Estate Planning</a> /
    <a href="#" style="color: #1D1D50;">Edit Estate Plan</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Estate Planning</b></h4>
    <br>

    <div class="card">

        <div class="card-body">

            <form action="{{url('update_estate_plan')}}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$edit->id}}">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">File No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="" value="{{$edit->file_no}}"
                                    name="file_no">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="" value="{{$edit->client_name}}"
                                    name="client_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="" value="{{$edit->matter_type}}"
                                    name="matter_type">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="" value=""
                                    name="estate_details">{{$edit->estate_details}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Trust</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="" value=""
                                    name="trust">{{$edit->trust}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="" value=""
                                    name="property_details">{{$edit->property_details}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Accountant</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="" value=""
                                    name="accoundant">{{$edit->accoundant}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Financial Advisor</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="" value=""
                                    name="financier">{{$edit->financier}}</textarea>
                            </div>
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
    </div>
</div>

@endsection
