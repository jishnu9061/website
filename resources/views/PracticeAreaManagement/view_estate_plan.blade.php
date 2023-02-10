@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('estate_plan')}}" style="color: #1D1D50;">Estate Planning</a> /
    <a href="#" style="color: #1D1D50;">View Estate Plan</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b> Estate Planning Details</b></h4>
    <br>

    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        @foreach($view_estate_plan as $list)
                        <tr>
                            <td scope="row">File No:</td>
                            <td type="text" aria-label="default input example" Disabled>{{$list->file_no}}</td>

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
                            <td scope="row">Estate Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->estate_details}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Trust:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->trust}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Property Details:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->property_details}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Accountant:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->accoundant}}
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Financial Advisor:</td>
                            <td type="text" aria-label="default input example" value="" Disabled>{{$list->financier}}
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
                    <input type="text" class="form-control" value="72G6585K" Disabled>
           </div>
           </div>
           </div>
        <div class="col-md-4">
           <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="John" Disabled>
           </div>
           </div>
        </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" value="Estate Planning" Disabled>
        </div>
        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-4">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Estate Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="Executor: George" Disabled></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Trust</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="John" Disabled></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Property Details</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="4456 Kenya" Disabled></textarea>
                        </div>
                        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Accountant</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="Chris" Disabled></textarea>
                        </div>
                        </div>
    </div>
    <div class="col-md-4">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Financial Advisor</label>
                    <div class="input-group">
                        <div class="input-group-prepend"></div>
                    <textarea class="form-control" rows="2" value="Smith Investments" Disabled></textarea>
                        </div>
                        </div>
    </div>
    <div class="col">
       
    </div>


 </form>  
 </div>  
     -->

<!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->