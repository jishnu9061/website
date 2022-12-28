@extends('layouts.hmsmain')
@section('content')

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Receipt Report</b></h4>
    <br><br>






    <div class="text-center">

        <div>
            <input class="btn btn-primary" type="button" value="Today" style="width:6.4%;">
            <input class="btn btn-primary" type="button" value="This Week">
            <input class="btn btn-primary" type="button" value="Last Week">
            <input class="btn btn-primary" type="button" value="This Month(MTD)">
            <input class="btn btn-primary" type="button" value="Last Month">
            <input class="btn btn-primary" type="button" style="width:11%;" value="This Quater ">
            <input class="btn btn-primary" type="button" style="width:11%;" value="Last Quater">
            <input class="btn btn-primary" type="button" value="This Year">
            <input class="btn btn-primary" type="button" value="Last Year">
        </div>

    </div>
    <br>
    <br>


    <div class="row">
        <form method="post" action="" id="form">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Mode Of Receipt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo"></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Item Type</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo"></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Bank Account</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo"></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Currency</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <select name="" id="cars">
                                <option value="volvo"></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">Transaction Period</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" class="form-control" name="" id="username" value="">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="username">To</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="date" class="form-control" name="" id="username" value="">
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
                    <br>
                    <button type="submit" class="btn btn-primary" Style="width:45%;">Submit</button>
                    <button type="button" class="btn btn-primary float:left" style="width:45%"
                        onclick="history.back()">Cancel</button>
                </div>
            </div>
        </form>
    </div>



</div>




@endsection