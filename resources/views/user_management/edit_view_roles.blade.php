@extends('layouts.hmsmain')
@section('content')



        <div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>
                        Edit Details</u></b></span></button><br><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Details</b></h4>
    <br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="username" value="">
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
                                <input type="text" class="form-control" name="" id="username" value="">
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
                                <input type="text" class="form-control" name="" id="username" value="" required>
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
                                <input type="text" class="form-control" name="" id="username" value="" required>
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
                                <input type="text" class="form-control" name="" id="username" value="" required>
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
                                <input type="password" class="form-control" name="" id="username" value="" required>
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
                                <input type="text" class="form-control" name="" id="username" value="" required>
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
                                <input type="text" class="form-control" name="" id="username" value="" required>
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
                                <input type="email" class="form-control" name="" id="username" value="" required></br>
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
                                <select name="" id="cars">
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
                                <input type="file" class="form-control" name="" id="username" value="" required>
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
                                <select name="" id="cars">
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
                                <select name="user_role" id="cars"required>
                                    <option> ---Select--- </option>
                                    <option>Add Client</option>
                                    <option>Edit Client</option>
                                    <option>View Client</option>
                                    <option>Open New File</option>
                                    <option>Edit File Type</option>
                                    <option>View File Detais</option>
                                    <option>Edit File Progress</option>
                                    <option>Add Progress</option>
                                  
                                </select>
                                <!-- <input type="text" class="form-control" name="" id="username" value="" required> -->
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
                                <select type="text" value="" name="type"style="width:100%;height:100%;">
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


                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"onclick="history.back()">Cancel</button>

                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection