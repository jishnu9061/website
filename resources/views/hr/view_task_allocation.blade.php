@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> View Task Allocation </b></h4>
    <br>



    <form>
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




        <br>
        <br>
        {{--sub heading --}}
        <h5 id="hdbtb">Timeline</h5>
        <br>


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



        <br>
        <br>
        {{--sub heading --}}
        <h5 id="hdbtb">Costing</h5>
        <br>


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





    </form>


</div>
@endsection