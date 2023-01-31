@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('civil_litigation')}}" style="color: #1D1D50;">Civil Litigation</a> /
    <a href="#" style="color: #1D1D50;">Edit Civil Litigation</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Civil Litigation</b></h4>
    <br>

    <form method="post" action="{{url('update_civil_litigation')}}" enctype="multipart/form-data">
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
                        <label for="exampleFormControlInput1" class="form-label">Plaintiff</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" placeholder="" name="plaintiff"
                                value="{{$edit->plaintiff}}">
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
            </br>
            <div class="row">
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
                        <label for="exampleFormControlInput1" class="form-label">Attroney</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="attroney">{{$edit->attroney}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="case_detail">{{$edit->case_detail}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Plaintiff's
                            Insurer</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="insurer">{{$edit->insurer}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Plaintiff's
                            Witness</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="witness">{{$edit->witness}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Plaintiff's
                            Expert</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="expert">{{$edit->expert}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Defendant's
                            Insurer</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="def_insurer">{{$edit->def_insurer}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Defendant's
                            Witness</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="def_witness">{{$edit->def_witness}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Defendant's
                            Expert</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <textarea class="form-control" rows="2" name="def_expert">{{$edit->def_expert}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            </br>


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