@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
      <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
      <a href="#" style="color: #1D1D50;">User Management</a> /
      <a href="{{url('manage_user_roles')}}" style="color: #1D1D50;">Manage User Roles</a> /
      <a href="#" style="color: #1D1D50;">Edit User Roles</a>
</nav>
<br><br>
<div class="container">

    <h4 id="hdtpa"><b>Edit Role</b></h4>
    <br><br>


    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_role')}}" id="form">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$edit_role->id}}">
                    <div class="col-lg-6 col-md-6 offset-md-3">
                        <label>Role Name:</label>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" id="" name="role_name" value="{{$edit_role->role_name}}"
                                        class="form-control">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Required Field.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;">Update</button>
                            <button type="button" class="btn btn-primary float:left"
                                onclick="history.back()">Cancel</button>


                        </div>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection