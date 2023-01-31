@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Settled Paid Legal Fees</a>
</nav>
<br><br>
<div class="container">

    <h4 id="hdtpa"><b>Settled Paid Legal Fees</b></h4>


    <br>
    <br>
    <div class="text-center">

        <button type="button" class="gp_btn left">Today</button>
        <button type="button" class="gp_btn">This Week</button>
        <button type="button" class="gp_btn">Last Week</button>
        <button type="button" class="gp_btn">This Month</button>
        <button type="button" class="gp_btn">Last Month</button>
        <button type="button" class="gp_btn">This Quater</button>
        <button type="button" class="gp_btn">Last Quater</button>
        <button type="button" class="gp_btn">This Year</button>
        <button type="button" class="gp_btn right">Last Year</button>

    </div>





    <br>
    <br>
    <div>
    <div class="card">

<div class="card-body">
            <form method="post" action="" id="form">
                @csrf

                <div class="row">
                    
              

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Transaction Period</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="user" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="date" class="form-control" name="user" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Settlement Item</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="event" id="cars">
                                    <option>---select---</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
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
                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    onclick="history.back()">Cancel</button>
            </div>
        </div>
</form>
</div>
</div>



    </div>








    @endsection