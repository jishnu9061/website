@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:12px;">
      <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
      <a href="#" style="color: #1D1D50;">User Management-Change User Password</a>
</nav>
<br><br>
<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Change Password</b></h4>
    <br><br>

    <div class="card">

        <div class="card-body">

            <p style="color:red;text-align:center;"> Password must be atleast 8 character long, Contain atleast 1
                capital letter,<br> atleast 1 numeric character and atleast 1 special character</p>
                <br>

            <form method="post" action="" id="form">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>User's Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="user_name" style="width:100%;">


                                    <option>Princess Caroline(caroline)</option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Old Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" id="" name="old_password" value="" class="form-control"
                                    style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>New Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" id="" name="new_password" value="" class="form-control"
                                    style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Confirm Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" id="" name="new_password" value="" class="form-control"
                                    style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <div class="class" style="text-align:center;">
                            <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                onclick="history.back()">Cancel</button>
                        </div>
                    </div>

                    <br>
                    <br>
                </div>


            </form>

        </div>
    </div>
</div>


@endsection