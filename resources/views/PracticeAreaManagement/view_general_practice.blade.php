@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('general_practice')}}" style="color: #1D1D50;">General Practice</a> /
    <a href="#" style="color: #1D1D50;">View General Practice</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> General Practice Details</b></h4>
    <br>

    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        @foreach($view_general_practice as $list)
                        <tr>
                            <td scope="row">File No:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->file_no}}
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Client Name:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->client_name}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Matter Type:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->matter_type}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Other Party:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->other_party}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Attorney:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->attorney}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Case Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->case_details}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Witness Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->witness}}
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
</div> -->




<!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->