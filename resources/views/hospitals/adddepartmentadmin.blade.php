@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">
        @if(Session::has('depadminregistered'))
            <div class="alert alert-dark" role="alert">
                {{ Session::get('depadminregistered')}}
            </div>
        @endif
        <h2>Add Department admins</h2>
    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="{{url('adddepadmins')}}">
	            @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="username">Admins Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="name" id="username" placeholder="admins Name" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Name is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="custom-select my-1 mr-sm-2 btn btn-drop dropdown-toggle me-2" name="depname" id="inlineFormCustomSelectPref" style="margin-top:23px;     width: 125%;">
                                @foreach($departments as $deps)
                                    <option  class="dropdown-item" value="{{$deps->depname}}">{{$deps->depname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="custom-select my-1 mr-sm-2 btn btn-drop dropdown-toggle me-2" name="rolename" id="inlineFormCustomSelectPref" style="margin-top:40px; margin-left:20%;">
                                <option  selected>Designation</option>
                                    @foreach($roles as $role)
                                        <option  class="dropdown-item" value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="username">Admins Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                        <input type="email" class="form-control" name="email" id="username" placeholder="admins Email" required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Email is required.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                            <input type="password" class="form-control" name="password" id="username" placeholder="admins Password" required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Password is required.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3"></div>
                                <div class="col-md-4"></div>
                            </div>
                            {{ Session::forget('depadminregistered')}}
                            <hr class="mb-4">
                            <button type="submit" class="btn btn-primary" type="submit" style="float:right;">Add admins</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
