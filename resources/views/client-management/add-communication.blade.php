@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">


        <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Add New Communication</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{url('add-communication')}}" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communication Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="date" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="Client" id="cars">
                                    <option>Select</option>
                                    <option >Corporate</option>
                                    <option >Individual</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="File" id="cars">
                                    <option >Select</option>
                                    <option >Type 1</option>
                                    <option >Type 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Customer</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="Customer" id="age" value="" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Telephone No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="telephone" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="Email" value=""
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communication Sources</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Sources">
                                    <option>Select</option>
                                    <option >Direct</option>
                                    <option >Vedio Conference</option>
                                    <option >Email</option>
                                    <option >Letter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mode of Communication</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Communication">
                                    <option >Select</option>
                                    <option >Mode 1</option>
                                    <option >Mode 2</option>
                                    <option>Mode 3</option>
                                    <option >Mode 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communicated With</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Communicated">
                                    <option >Select</option>
                                    <option >Advocate</option>
                                    <option >Clerical Staff</option>
                                    <option >Receptionist</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Duration</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Duration">
                                    <option>Select</option>
                                    <option >Half Hour</option>
                                    <option >One Hour</option>
                                    <option >One and Half Hour</option>
                                    <option >Two Hour</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Person Handling</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Handling" id="cars">
                                    <option >Select</option>
                                    <option >Person 1</option>
                                    <option >Person 2</option>
                                    <option >Person 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Timer</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="time" class="form-control" name="Timer" id="username" value="" placeholder=""
                                    required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Date is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Others</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="Others" id="username" value="" placeholder=""
                                    required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Date is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communicated Description</label>
                            <div class="input-group">
                                <textarea class="form-control" id="form7Example7" rows="2" name="Description"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Complaint Description is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Action Plan</label>
                            <div class="input-group">
                                <textarea class="form-control" id="form7Example7" rows="2" name="Action"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Complaint Description is required.
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
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">close</button>
                        </div>
                    </div>
                </div>
            </form>
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