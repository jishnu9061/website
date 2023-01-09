@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Payment Reports</b></h4>


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
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Type of payment</label>
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


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Mode of payment</label>
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
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Bank Account</label>
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


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Currency</label>
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
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Transaction period</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="user" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="user" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
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
                <br>
                <a href="submit_payment_reports" class="btn btn-primary" role="button" data-bs-toggle="button" Style="width:45%;">Submit</a>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    onclick="history.back()">Cancel</button>
            </div>
        </div>
</form>
</div>
</div>


    </div>








    @endsection