@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>View Real Estate</b></h4>
    <br>


    <form action="">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" placeholder="62G5585W">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" placeholder="Sell">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Buyer</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" placeholder="Patrick">
                    </div>
                </div>
            </div>
        </div>
</br>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" placeholder="Dewey Cheatum">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" placeholder="1522, Los Angles pin:123 456"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Closing Statement</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" placeholder="Total Payable:$233,025.15"></textarea>
                    </div>
                </div>
            </div>
        </div>
</br>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Listing Realtor</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" placeholder="Chris Doe"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Selling Realtor</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" placeholder="John Smith"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Company Title</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" placeholder="Fidelity National"></textarea>
                    </div>
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