@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Real Estate Details</b></h4>
    <br>


    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        <tr>
                            <td scope="row">File No:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Client Name:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Matter Type:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Buyer:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Attorney:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Property Details:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Closing Statement:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Listing Realtor:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Selling Realtor:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Company Title:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>

    </form>


</div>

@endsection












<!-- <form action="">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">File No</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" value="62G5585W" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" value="Sell" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Buyer</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" value="Patrick" Disabled>
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
                        <input type="text" class="form-control" value="Dewey Cheatum" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" value="1522, Los Angles pin:123 456" Disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Closing Statement</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" value="Total Payable:$233,025.15" Disabled></textarea>
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
                        <textarea class="form-control" rows="2" value="Chris Doe" Disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Selling Realtor</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" value="John Smith" Disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Company Title</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea class="form-control" rows="2" value="Fidelity National" Disabled></textarea>
                    </div>
                </div>
            </div>

    </form>
</div> -->



<!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->