@extends('layouts.hmsmain')
@section('content')
    <style>
        th {
            width: 30%;
        }
    </style>
    <div class="container">
        <h4 id="hdtpa"><b>Add New Employee</h4>
        <br><br>
        <form method="post" action="{{ url('addstaffss') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h5><u>Basic Details</u></h5>
                <br>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="name" value=""
                                required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="email" class="form-control" name="email" id="address" value=""
                                required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="phoneno" id="phone_no" value="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="username">Age</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="number" class="form-control" name="age" id="age" min="0"
                                max="99">
                            <div class="invalid-feedback" style="width: 100%;">
                                Age is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="username">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="staff Password" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Passeord is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="username">Confirm Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="password" class="form-control" name="password" id="confirm_password"
                                placeholder="Confirm Password" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Password is required.
                            </div>
                        </div>
                        <div id="test" style="height:20px;"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="username">Date Of Joining</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" class="form-control" name="date_of_joining" id="password"
                                placeholder="staff Password">
                            <div class="invalid-feedback" style="width: 100%;">
                                Passeord is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Gender:&nbsp;</label>
                        <select class="form-select" aria-label="Default select example" name="sex">
                            <option>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Departments:&nbsp;</label>
                        <select class="form-select" aria-label="Default select example" name="departname">
                            <option>select</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Roles&nbsp;</label>
                        <select class="form-select" aria-label="Default select example" name="role">
                            @if(count($roles))
                            @foreach($roles  as $list)
                            
                              
                                    <option value="">{{$list->role}}</option>
                               
                            @endforeach
                            @endif
                        </select>
                    </div>
                    {{-- <div id="test" style="height:20px;"></div> --}}
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Status:&nbsp;</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Select</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            <option value="Resigned">Resigned</option>
                            <option value="Suspended">Suspended</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label for="username">Status Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" class="form-control" name="status_date" id="password"
                                placeholder="staff Password">
                            <div class="invalid-feedback" style="width: 100%;">
                                Passeord is required.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Experience:&nbsp;</label>
                        <select class="form-select" aria-label="Default select example" name="experience">
                            <option selected>Select</option>
                            <option value="Fresher">Fresher</option>
                            <option value="1+ Yeras">1+ Yeras</option>
                            <option value="Resigned">2+ Yeras</option>
                            <option value="Suspended">3+ Years</option>
                            <option value="Suspended">4+ Years</option>
                            <option value="Suspended">5+ Years</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <h5><u>Address</u></h5>
                <br>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Postal Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="address" id="name" value="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Branch</label>
                        <select class="form-select" aria-label="Default select example" name="branch">
                            <option selected>Select</option>
                            <option value="Nairobi">Nairobi</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Nakuru
                            ">Nakuru</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Postal Code</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="postal_code" id="address"
                                value="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Town/City</label>
                        <select class="form-select" aria-label="Default select example" name="town">
                            <option>select</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <h5><u>Salary Details & Allowances</u></h5>
                <br>
                <br>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Basic Salary(Kshs)</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="salary" id="name" value="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>Bank Name</label>
                        <select class="form-select" aria-label="Default select example" name="bank">
                            <option>select</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Account Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="account" id="name" value="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Branch</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select name="bank_branch" id="address">
                                <option>select</option>
                                <option value=""></option>
                            </select>
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="col-md-3">
                    <div class="mb-1">
                        <label>Bank Code</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="branch_code" id="address"
                                value="">
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <p><b>Fixed Allowances</b></p>
                    <table class="table table-bordered">
                        <tbody>
                            @foreach ($allowance_data as $data)
                                <tr>
                                    <td>{{ $data->allowancename }}</td>
                                    <input type="hidden" name="{{ $data->allowancename }}"
                                        value="{{ $data->allowancename }}">
                                    <td><input type="checkbox" class="checkz" name="allowz[]"
                                            value="{{ $data->id }}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-lg-4">
                    <p><b>Non-Fixed Allowances</b></p>
                    <table class="table table-bordered">
                        <tbody>
                            @foreach ($nonfixd_allowance_data as $data)
                                <tr>
                                    <td>{{ $data->allowancename }}</td>
                                    <input type="hidden" name="{{ $data->allowancename }}"
                                        value="{{ $data->allowancename }}">
                                    <td><input type="number" class="checkz" name="nonfx[]" min="0"
                                            value="0"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-lg-4">
                    <p><b>Deductions</b></p>
                    <table class="table table-bordered">
                        <tbody>
                            @foreach ($deduction_data as $data)
                                <tr>
                                    <td>{{ $data->allowancename }}</td>
                                    <input type="hidden" name="{{ $data->allowancename }}"
                                        value="{{ $data->allowancename }}">
                                    <td><input type="checkbox" class="checkz" name="category[]"
                                            value="{{ $data->id }}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <table class="table">
                <thead class="thead-dark">
                    <h5><u>No. of Leaves (Annual)</u></h5><br>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($leave_type as $data)
                            <td> <input type="hidden" name="leave_type[]"
                                    value="{{ $data->id }}">{{ $data->leave_type }}</td>
                            <td> <input type="number" class="form-control leaves" name="leaves[]" value="0"
                                    min="0" max="365"></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Upload CV</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="file" class="form-control" name="upload_cv" id=""
                                placeholder="staff Password">
                            <div class="invalid-feedback" style="width: 100%;">
                                Passeord is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Passport size Photograph</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="file" class="form-control" name="photo" id=""
                                placeholder="staff Password">
                            <div class="invalid-feedback" style="width: 100%;">
                                Passeord is required.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Signature</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="file" class="form-control" name="signature" id=""
                                placeholder="staff Password">
                            <div class="invalid-feedback" style="width: 100%;">
                                Passeord is required.
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
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
