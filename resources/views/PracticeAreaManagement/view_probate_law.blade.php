@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('probate_law')}}" style="color: #1D1D50;">Probate Law</a> /
    <a href="#" style="color: #1D1D50;">View Probate Law</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Probate Law Details</b></h4>
    <br>


    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        @foreach($view_probate_law as $list)
                        <tr>
                            <td scope="row">Matter Info:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->matter_info}}
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Executor / Administator:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->executor}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Matter Type:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->matter_type}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Deceased:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->deceased}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Case Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->case_details}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Estate Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->estate_details}}
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

<div class="row">
    <div class="col-md-4">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <div class="input-group">
                            <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="602V-0218-GR/RW" Disabled>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Executor / Administator</label>
                    <div class="input-group">
                            <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Isabel Collier" Disabled>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                            <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Decedent's Estate" Disabled>
                        </div>
                        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-4">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deceased</label>
                    <div class="input-group">
                            <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Ken Collier" Disabled>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <div class="input-group">
                            <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" Disabled>Cook 2018-PR-2038 will filed Date: 3/05/2014</textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                    <div class="input-group">
                            <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" Disabled>EIN: 3201-2032 will Date: 10/23/2013</textarea>
                        </div>
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