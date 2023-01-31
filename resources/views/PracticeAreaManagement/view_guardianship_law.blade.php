@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('guardianship_law')}}" style="color: #1D1D50;">Guardianship Law</a> /
    <a href="#" style="color: #1D1D50;">View Guardianship Law</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Guardianship Law Details</b></h4>
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
                            <td scope="row">Petitioner:</td>
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
                            <td scope="row">Disabled Person:</td>
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
                            <td scope="row">Disability Details:</td>
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
                            <td scope="row">Guardian:</td>
                            <td type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Guardian Details:</td>
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
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="679VL-0618" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Petitioner</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="Jessica Robinson" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="Guardinship of a Disabled Person" Disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Disabled Person</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="Charles Newman" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control"
                            rows="2" Disabled>Law Office of Greg Peters Attorney Greg Peters</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Disability Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control" rows="2" Disabled>Dementia</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control" rows="2" Disabled>Brown 666-333</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Guardian</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" value="Janet Newman" Disabled>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control" rows="2" Disabled>Law Office of Glenn Evans contact Glenn Evans</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Guardian Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                        <textarea class="form-control"
                            rows="2" Disabled>Guardian of the Person Petition Field: 8/07/2018</textarea>
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