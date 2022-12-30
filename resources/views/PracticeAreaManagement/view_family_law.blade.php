@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>View Family Law</b></h4>
    <br>


    <form action="">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="12T654C" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="Alen" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="Pre Decree" Disabled>
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
                        <input type="text" class="form-control" value="Smith" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="David" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control" rows="2" value="Divorce" Disabled></textarea>
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
                        <textarea class="form-control" rows="2" value="Marriage Details" Disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control" rows="2" value="Property Details" Disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Child Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control" rows="2" value="Child Details" Disabled></textarea>
                    </div>
                </div>
            </div>
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