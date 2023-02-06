@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Performance </a>
</nav>
<br><br>
{{-- heading --}}
<h4 id="hdtpa"><b>Perfomance</b></h4>
<br>

<div class="card">
    <div class="card-body">
        <form action="{{url('hr_department')}}">
            @csrf
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <select id="b" class="form-control" name="departments">

                                         @if(count($departments))
                                            @foreach($departments as $department)
                                            <option>{{$department->department_name}}</option>role_name
                                            @endforeach
                                          @endif
                    </select>
                </div>

                <div class="col-md-3">
                    <select id="b" class="form-control" name="roles" id="sele">

                                          @if(count($roles))
                                            @foreach($roles as $role)
                                            <option >{{$role->role_name}}</option>
                                            @endforeach
                                          @endif
                    </select>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                    <button type="submit" class="btn btn-primary"> Generate </button>
                    <button type="button" class="btn btn-primary" onclick="history.back()"> Cancel </button>

                </div>
            </div>
        </form>
    </div>
</div>

@endsection
