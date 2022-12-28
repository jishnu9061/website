@extends('layouts.hmsmain')
@section('content')

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Fee Note Items-Received</b></h4>
    <br><br>

    <div class="text-center">
        <div>
            <input class="btn btn-primary" type="button" value="Today">
            <input class="btn btn-primary" type="button" value="This Week">
            <input class="btn btn-primary" type="button" value="Last Week">
            <input class="btn btn-primary" type="button" value="This Month">
            <input class="btn btn-primary" type="button" value="Last Month">
            <input class="btn btn-primary" type="button" value="This Quater">
            <input class="btn btn-primary" type="button" value="Last Quater">
            <input class="btn btn-primary" type="button" value="This Year">
            <input class="btn btn-primary" type="button" value="Last Year">
        </div>
    </div>
    <br>
    <br>



    <div class="row">


        <div class="col-md-12 order-md-1">

            <form method="post" action="" id="form">
                @csrf

                <div class="row">

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Assigned Advocate</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Fee Note Item</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date (From)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="number" id="username" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date (To)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="number" id="username" required></br></br>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <button type="submit" class="btn btn-primary float:right" style="width:45%">View Report</button>
                <button type="button" class="btn btn-primary float:left" style="width:45%"
                    onclick="history.back()">Cancel</button>
            </div>
        </div>
    </div>



</div>

@endsection