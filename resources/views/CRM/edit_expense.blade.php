@extends('layouts.hmsmain')
@section('content')

<div class="container">
    <h4 id="hdtpa"><b> Edit Expense Details </b></h4>
    <br><br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="" enctype="multipart/form-data">

                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="date" class="form-control" name="" id="username" required>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Staff Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="" id="username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Expense Reference</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="" id="username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Customer Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="" id="cars">
                                    <option>select</option>
                                    <option>Individual</option>
                                    <option>Corporate</option>

                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Task Assigned By</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="" id="cars">
                                    <option>select</option>
                                    <option>Marketing Department</option>

                                </select>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Billing Amount</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="" id="username" required>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Description</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea class="form-control" rows="2"></textarea>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Status</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="" id="cars">
                                    <option>Open</option>
                                    <option>In progress</option>
                                    <option>Pending</option>
                                    <option>Complete</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Supporting
                                Details</label>
                            <span class="m-2"></span>
                            <input type="file" class="form-control" name="support_detail">
                        </div>
                    </div>

                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:right;" Style="width:45%;"
                            onclick="history.back()">Close</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


</div>

@endsection