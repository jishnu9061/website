@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('criminal_law')}}" style="color: #1D1D50;">Criminal Law</a> /
    <a href="#" style="color: #1D1D50;">Edit Criminal Law</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Criminal Law</b></h4>
    <br>

    <div class="card">

        <div class="card-body">

            <form action="{{url('update_criminal_law')}}" method="post">

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
                                    <input type="text" class="form-control" placeholder="" name="matter_info"
                                        value="{{$edit->matter_info}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Defendent</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" placeholder="" name="defendent"
                                        value="{{$edit->defendent}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" placeholder="" name="matter_type"
                                        value="{{$edit->matter_type}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Prosecutor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2"
                                        name="prosecutor">{{$edit->prosecutor}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2"
                                        name="case_detail">{{$edit->case_detail}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Investigator
                                    Details</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2"
                                        name="investigator">{{$edit->investigator}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Victim
                                    Details</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2" name="victim">{{$edit->victim}}</textarea>
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
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

                    </div>
            </form>
        </div>
    </div>
</div>

@endsection