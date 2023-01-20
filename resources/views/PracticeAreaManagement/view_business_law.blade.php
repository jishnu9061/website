@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Business Law Details</b></h4>
    <br>

    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        <tr>
                            <td scope="row">Matter Info:</td>
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
                            <td scope="row">Corporation:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Case Details:</td>
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
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="2017-10-279" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Client</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="Hank Wiliams" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="Corporation" Disabled>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Corporation</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Country Roads Albums</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" Disabled>Purpose: Producer of county music</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">

                </div>
            </div>
        </div>

    </form> -->


<!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->