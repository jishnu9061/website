@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Capture Billable Items</b></h4>
    <br><br>




    {{--sub heading --}}
    {{-- <h5 id="hdbtb">Billable Items</h5>
             <br> --}}


    <!-- <div>
        <input class="btn btn-primary" type="button" value="View File Details">
    </div>
    <br> -->




    <div class="row">


        <div class="col-md-12 order-md-1">

            <form method="post" action="" id="form">
                @csrf



                <div class="row">



                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username"> Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="number" id="username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6">
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





                </div>
                <br>
                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Item Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">
                                    <option value="volvo"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="test" style="height:20px;"></div>
        </div>
    </div>




    <div class="row">
        <div class="col-md-12">
            <div class="mb-1">
                <label for="username">Details</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                </div>
            </div>
        </div>


    </div>
    <br>

    <div class="row">


        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Currency To</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="country" id="cars">
                        <option value="volvo">KES</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Amount</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="name" value="" id="confirm_password">
                    <div class="invalid-feedback" style="width: 100%;">
                        Password is required.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <button type="submit" class="btn btn-primary float:right" style="width:45%">Submit</button>
                <button type="button" class="btn btn-primary float:left" style="width:45%"
                    onclick="history.back()">Close</button>
            </div>
        </div>
    </div>
    </form>
</div>






@endsection