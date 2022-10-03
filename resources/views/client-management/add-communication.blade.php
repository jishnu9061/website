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
            <form method="post" action="" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communication Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="number" id="username" value="">
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
                                <select name="type" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Corporate</option>
                                    <option value="volvo">Individual</option>
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
                                <select name="citizen" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Type 1</option>
                                    <option value="volvo">Type 2</option>
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
                                <input type="text" class="form-control" name="corporation" id="age" value="" min="0" max="99">
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
                                <input type="password" class="form-control" name="telephone" value=""
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
                                <input type="email" class="form-control" name="telephone" value=""
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
                                <select name="brought">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Direct</option>
                                    <option value="volvo">Vedio Conference</option>
                                    <option value="volvo">Email</option>
                                    <option value="volvo">Letter</option>
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
                                <select name="brought">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Mode 1</option>
                                    <option value="volvo">Mode 2</option>
                                    <option value="volvo">Mode 3</option>
                                    <option value="volvo">Mode 4</option>
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
                                <select name="brought">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Advocate</option>
                                    <option value="volvo">Clerical Staff</option>
                                    <option value="volvo">Receptionist</option>
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
                                <select name="brought">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Half Hour</option>
                                    <option value="volvo">One Hour</option>
                                    <option value="volvo">One and Half Hour</option>
                                    <option value="volvo">Two Hour</option>
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
                                <select name="" id="cars">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Person 1</option>
                                    <option value="volvo">Person 2</option>
                                    <option value="volvo">Person 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Timer</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="time" class="form-control" name="" id="username" value="" placeholder=""
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
                                <input type="text" class="form-control" name="" id="username" value="" placeholder=""
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
                                <textarea class="form-control" id="form7Example7" rows="2"></textarea>
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
                                <textarea class="form-control" id="form7Example7" rows="2"></textarea>
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