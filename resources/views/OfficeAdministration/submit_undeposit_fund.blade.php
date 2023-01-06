@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Un-Transferred Funds Report</b></h4>
    <br>
    <br>

    <form method="post" enctype="multipart/form-data" action="{{url('')}}">
        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="inputEmail4">Client Bank Account</label>
                    <input type="text" class="form-control" Disabled>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="inputEmail4">Date From</label>
                    <input type="date" class="form-control" Disabled>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="mb-3">
                    <label for="inputEmail4">Date To</label>
                    <input type="date" class="form-control" Disabled>
                </div>
            </div>
        </div>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">

                        <thead>
                            <tr>
                                <th class="text-center">Client</th>
                                <th class="text-center">File No.</th>
                                <th class="text-center">File Name</th>
                                <th class="text-center">Amount</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr class="text-center">

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="text-center">

                                <td colspan=2></td>
                                <td>Total :</td>
                                <td></td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-primary">Print</button>
            <span class="m-2"></span>
            <button type="button" class="btn btn-primary">Close</button>
        </div>

    </form>
    <br>
    <br>
    <br>


    <div class="table-responsive">
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th colspan="4">Bulk Transfer</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td scope="row"> Date</td>
                    <td><input class="form-control" type="date" value="" aria-label=" input example"></td>

                    <td scope="row"> Branch</td>
                    <td><select class="form-control" aria-label="Default select example">
                            <option selected>Nairobi</option>
                            <option value="1"></option>

                        </select>
                    </td>

                </tr>
                <tr>
                    <td scope="row">Account Type</td>
                    <td><select class="form-control" aria-label="Default select example">
                            <option selected>-- select --</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>


                    <td scope="row">Account to Allocate To</td>
                    <td><select class="form-control" aria-label="Default select example">
                            <option selected>-- select --</option>
                            <option value="1">Cash</option>
                            <option value="2"></option>

                        </select>
                    </td>

                </tr>
                <tr>
                    <td scope="row">Currency</td>
                    <td><select class="form-control" aria-label="Default select example">
                            <option selected>KES</option>
                            <option value="1"></option>

                        </select>
                    </td>

                    <td scope="row">Exchange Rate</td>
                    <td><input class="form-control" type="text" value="" aria-label=" input example"></td>

                </tr>
                <tr>

                    <td scope="row">Cheque No</td>
                    <td><input class="form-control" type="text" value="" aria-label=" input example"></td>

                    <td scope="row">Receiver</td>
                    <td><input class="form-control" type="text" value="" aria-label=" input example"></td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-primary" >Execute</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" >Close</button>
    </div>





</div>


@endsection