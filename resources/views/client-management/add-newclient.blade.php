@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">


        <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Add New Client</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="number" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="type" id="cars" disabled>
                                    <option value="volvo">Corporate</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Citizen Status</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="citizen" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Residensial</option>
                                    <option value="volvo">Non Residensial</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Certificate Of Incorporation</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="corporation" id="age" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Country</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Kenya</option>
                                    <option value="volvo">South Africa</option>
                                    <option value="volvo">India</option>
                                    <option value="volvo">America</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Telephone No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" class="form-control" name="telephone" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Fax No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="faxno" id="age" value=""
                                 min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" value="" id="password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Web Site</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="conpassword" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Brought In By</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="brought">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Agent</option>
                                    <option value="volvo">Staff</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Status Reporting Day</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="status" id="cars">
                                    <option value="">Select</option>
                                    <option value="">Monday</option>
                                    <option value="">Tuesday</option>
                                    <option value="">Wednesday</option>
                                    <option value="">Thursday</option>
                                    <option value="">Friday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client Source</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="source" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Excisting Client</option>
                                    <option value="volvo">Online</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client Source Narration</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="narration" class="form-control" name="conpassword" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" value="" id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client Industry</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="industry" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Commerce</option>
                                    <option value="volvo">Construction</option>
                                    <option value="volvo">Education</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Pin No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="pin" id="age" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Postal Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="address" value="" id="password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Postal Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="code" value="" id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
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
                                <input type="text" class="form-control" name="town" id="age" value="" 
                                    min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Physical Address</label>
                            <div class="input-group">
                                <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Address is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Notes</label>
                            <div class="input-group">
                                <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Address is required.
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
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Close</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<div class="modal" id="mymodal">
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
</div>
</div>
<div class="modal" id="my">
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