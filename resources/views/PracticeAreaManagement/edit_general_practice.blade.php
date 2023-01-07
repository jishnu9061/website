@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit General Practice</b></h4>
    <br>

    <div class="card">

        <div class="card-body">
            <form action="{{url('update_practice')}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">File No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="52B6577Z">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="Michael">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="Civil Dispute">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Other Party</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="Jones">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="Samuel">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2"
                                    value="Filed Date: 5/2/2019 Service by: Currier Los Angles"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Witness</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" value="Chris"></textarea>
                            </div>
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
        </div>
    </div>



    @endsection