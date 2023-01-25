@extends('layouts.hmsmain')
@section('content')
        <nav style="font-size:12px;">
            <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
            <a href="#" style="color: #1D1D50;">User Management-Edit User</a>
        </nav>
        <br><br>

<div class="container">


    <h4 id="hdtpa"><b>Edit user</b></h4>
    <br><br>


    <div class="card">

        <div class="card-body">
            <form method="post" action="{{url('update_user')}}" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$edit->id}}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="user_code" id="username"
                                    value="{{ $edit->user_code}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="first_name" id="username"
                                    value="{{ $edit->first_name}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Initials</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="initial" id="username"
                                    value="{{ $edit->initial}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Postal Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="post_address" id="username"
                                    value="{{ $edit->post_address}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="user_name" id="username"
                                    value="{{ $edit->user_name}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" class="form-control" name="password" id="username"
                                    value="{{ $edit->password}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Town</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="town_name" id="username"
                                    value="{{ $edit->town_name}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mobile No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="mobile_no" id="username"
                                    value="{{ $edit->mobile_no}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">E-mail Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email_address" id="username"
                                    value="{{ $edit->email_address}}" required>
                                <br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Department</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="departments" id="cars">
                                    <option>{{ $edit->departments}}</option>
                                    <option>---Select--- </option>
                                    <option>Administration</option>
                                    <option>Clerical & Related Works</option>
                                    <option>Family Law Sevices</option>
                                    <option>Finance Department</option>
                                    <option>HRM & Admin</option>
                                    <option>Human Resources</option>
                                    <option>ICT & Data Management</option>
                                    <option>Immigration Law Sevices</option>
                                    <option>Litigation</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Signature to upload</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file" class="form-control" name="upload_signature" id="username"
                                    value="{{ $edit->upload_signature}}" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Group</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="user_group" id="cars">
                                    <option value="">{{ $edit->user_group}}</option>
                                    <option> ---Select--- </option>
                                    <option>Administrator</option>
                                    <option>Partner</option>
                                    <option>Advocate</option>
                                    <option>Accountant</option>
                                    <option>HRM & ADMIN Assistant</option>
                                    <option>Secretary</option>
                                    <option>Pupil</option>
                                    <option>Intern</option>
                                    <option>Clerk</option>
                                    <option>Legal Assistant</option>
                                    <option>Senior Associate</option>
                                    <option>Associate Advocate</option>
                                    <option>Receptionist</option>
                                    <option>Support</option>
                                    <option>Personal Assistant</option>
                                    <option>ICT & Data Management</option>
                                    <option>Office Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Roles</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="user_role" id="cars">
                                    <option>{{ $edit->user_role}}</option>
                                    <option>Sr. Advocate</option>
                                    <option>Jr. Advocate</option>
                                    <option>Hr Manager</option>
                                    <option>Hr Executive</option>
                                    <option>Account</option>
                                    <option>Account Manager</option>
                                    <option>Receptionist</option>
                                    <option>Department Head</option>

                                </select>

                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">G/L Account</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select type="text" value="" name="type">
                                    <option value="">{{ $edit->user_code}}</option>
                                    <option> ---Select--- </option>
                                    <option>Caroline Ratemo</option>
                                    <option>Petty Cash Account-Office</option>
                                    <option>Mpesa Cash Account-771804</option>
                                    <option>Office Mpesa A/C-0724708999</option>

                                </select>
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
                    <div class="col-sm d-flex justify-content-around p-1">

                        <button type="submit" class="btn btn-primary" style="width:45%">Update</button>
                        <button type="button" class="btn btn-primary" style="width:45%"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection






<!-- <div class="modal" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <input type="text" name="type" class="form-control" placeholder="Client Type">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- <div class="modal" id="my">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <input type="text" name="type" class="form-control" placeholder="Country">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->