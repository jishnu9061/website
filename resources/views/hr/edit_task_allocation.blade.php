@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="{{url('task_allocation')}}" style="color: #1D1D50;">Task Allocation</a> /
    <a href="#" style="color: #1D1D50;">Edit Task Allocation</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b> Edit Task Allocation </b></h4>
    <br>



    <form>
        <div class="card">

            <div class="card-body">

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Employee ID</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Employee Name</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Task</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Department</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>-- select --</option>
                                <option value="1">Legal</option>
                                <option value="1">Accounts</option>
                                <option value="2">Receptionist</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Task Status</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>-- select --</option>
                                <option value="1">Open</option>
                                <option value="2">Over Due</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        {{--sub heading --}}
        <h5 id="hdbtb">Timeline</h5>
        <br>

        <div class="card">

            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Expected Start Date </label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Expected End Date</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Expected Time (in hours)</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Duration (days)</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">

                    </div>
                    <div class="form-group col-md-4">

                    </div>
                </div>
            </div>
        </div>


        <br>

        {{--sub heading --}}
        <h5 id="hdbtb">Costing</h5>
        <br>

        <div class="card">

            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Costing Amount</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Billing Amount</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Expense Claim</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="form-row">
            <div class="form-group col-md-4">

            </div>
            <div class="form-group col-md-4">

            </div>
            <div class="form-group col-md-4">
                <br>
                <button type="submit" class="btn btn-primary float:right;"> Update </button>
                <button type="button" class="btn btn-primary float:right;" onclick="history.back();"> Cancel </button>
            </div>
        </div>


    </form>


</div>
@endsection
