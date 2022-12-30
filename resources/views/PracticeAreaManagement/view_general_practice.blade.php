@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>View General Practice</b></h4>
    <br>


 <form action="">
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">File No</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="52B6577Z" Disabled>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Michael" Disabled>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Civil Dispute" Disabled>
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
                    <input type="text" class="form-control" value="Jones" Disabled>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Samuel" Disabled>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2"
                        value="Filed Date: 5/2/2019 Service by: Currier Los Angles" Disabled></textarea>
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
                    <textarea class="form-control" rows="2" value="Chris" Disabled></textarea>
                </div>
            </div>
        </div>
        <div class="col">

        </div>
        <div class="col">

        </div>
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