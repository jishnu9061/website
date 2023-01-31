@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('family_law')}}" style="color: #1D1D50;">Family Law</a> /
    <a href="#" style="color: #1D1D50;">Edit Family Law</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Family Law</b></h4>
    <br>

    <div class="card">

        <div class="card-body">
            <form action="{{url('update_family_law')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">File No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="12T654C">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="Alen">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="Pre Decree">
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
                                <input type="text" class="form-control" placeholder="Smith">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="David">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="Divorce"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Marriage Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="Marriage Details"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="Property Details"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Child Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" placeholder="Child Details"></textarea>
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
    </div>


    <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->



    @endsection