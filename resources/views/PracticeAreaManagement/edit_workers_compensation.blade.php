@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Workers Compensation</b></h4>
    <br>


    <form method="post" enctype="multipart/form-data" action="{{url('update_workers_compensation')}}">
        @csrf
        <div class="container">
            <div class="row">
                <input type="hidden" value="{{$edit->id}}" name="id">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="matter_info"
                                value="{{$edit->matter_info}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Petitioner</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="petitioner"
                                value="{{$edit->petitioner}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="matter_type"
                                value="{{$edit->matter_type}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Respondent</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="respondent"
                                value="{{$edit->respondent}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="attroney"
                                value="{{$edit->attroney}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insurer</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" rows="2" name="insurer">{{$edit->insurer}}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Adjuster</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="adjuster"
                                value="{{$edit->adjuster}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <textarea class="form-control" rows="2" name="case_detail">{{$edit->case_detail}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Employee Doctor</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" placeholder="" name="employee_doctor"
                                value="{{$edit->employee_doctor}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Employment &
                                Benefit Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="" name="benefit_detail"
                                    value="{{$edit->benefit_detail}}">
                            </div>
                        </div>
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