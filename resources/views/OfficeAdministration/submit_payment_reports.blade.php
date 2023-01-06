@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Payment Reports</b></h4>
    <br>
    <br>




    <div class="row">

        <div class="col-md-4">
            <div class="mb-3">
                <label for="username">Mode</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" value="All Modes All Items" class="form-control" name="user" id="age" Disabled>
                    <div class="invalid-feedback" style="width: 100%;">
                        Incorporation is required
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="username">Account</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" value="All Accounts" class="form-control" name="user" id="age" Disabled>
                    <div class="invalid-feedback" style="width: 100%;">
                        Incorporation is required
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="username">Currency</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" value="All Currencies" class="form-control" name="user" id="age" Disabled>
                    <div class="invalid-feedback" style="width: 100%;">
                        Incorporation is required
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="mb-3">
                <label for="username">From Date</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="date" value="" class="form-control" name="user" id="age" Disabled>
                    <div class="invalid-feedback" style="width: 100%;">
                        Incorporation is required
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="username">To Date</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="date" value="" class="form-control" name="user" id="age" Disabled>
                    <div class="invalid-feedback" style="width: 100%;">
                        Incorporation is required
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br>



    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
                <table class="table table-striped table-class" id="table-id">

                    <thead>
                        <tr>
                            <th class="text-center">Date</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File Name</th>
                            <th class="text-center">VCHAR #</th>
                            <th class="text-center">Chq No.</th>
                            <th class="text-center">Txn No.</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Paid To</th>
                            <th class="text-center">Status </th>
                            <th class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr class="text-center">

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="text-center">

                            <td colspan=6></td>
                            <td>Total :</td>
                            <td>0.00 </td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-primary">Print</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>
    </div>








</div>


@endsection