@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('workers_compensation')}}" style="color: #1D1D50;">Workers Compensation</a> /
    <a href="#" style="color: #1D1D50;">View Workers Compensation</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Workers Compensation Details</b></h4>
    <br>

    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        @foreach($view_workers_compensation as $list)
                        <tr>
                            <td scope="row">Matter Info:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->matter_info}}
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Petitioner:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->petitioner}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Matter Type:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->matter_type}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Respondent:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->respondent}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Attorney:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->attroney}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Insurer:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->insurer}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Adjuster:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->adjuster}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Case Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->case_detail}}
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Employee Doctor:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->employee_doctor}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Employee & Benefit Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->benefit_detail}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </form>


</div>

@endsection
















<!-- <form action="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" value="604VL-0218-WR" Disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Petitioner</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" value="Victor" Disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" value="Workers Compensation Claim" Disabled>
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
                                <input type="text" class="form-control"
                                    value="Tower Construction HR Manager Gina" Disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control"
                                    value="McCarthy and Associates Managing Partner Adam McCarthy" Disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Insurer</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control" rows="2" Disabled>BCBs contact Smith</textarea>
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
                                <input type="text" class="form-control" value="Danial Lee" Disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea class="form-control"
                                    rows="2" Disabled>Claim Number: 123546987 Accident Date: 12/01/2016 17 WC 6525 Court</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Employee Doctor</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" value="Northwestern Hospital" Disabled>
                            </div>
                        </div>
                    </div>
                </div>
           

            
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Employment & Benefit
                                Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" placeholder="Site Coordinator" Disabled>
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