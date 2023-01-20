@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Criminal Law Details</b></h4>
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
                            <td scope="row">Defendant:</td>
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
                            <td scope="row">Prosecutor:</td>
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
                        <tr>
                            <td scope="row">Investigator Details:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Victim Details:</td>
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
                        <input type="text" class="form-control" value="OH-Felony-ER" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Defendant</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="Larry James" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" value="Felony" Disabled>
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
                        <textarea class="form-control" rows="2" value="Cuyahoga Prosecutor's office" Disabled></textarea>
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
                            value="Cuyahoga Criminal 2015-F-123456" Disabled></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Investigator Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" value="Chris Investigator" Disabled></textarea>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Victim Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" rows="2" value="John" Disabled></textarea>
                    </div>
                </div>
            </div>

            <div class="col">

            </div>
            <div class="col">

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