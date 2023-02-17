@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="{{url('') }}" style="color: #1D1D50;">Supplier Monthly Schedule</a> /
    <a href="#" style="color: #1D1D50;">View Supplier Monthly Schedule</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">

<h4 id="hdtpa"><b>Supplier Monthly Schedule Details</b></h4>
<br>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th colspan="4">Invoice Details</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td scope="row"> Supplier</td>
                                <td><input class="form-control" type="text" value="ABC CONSULT"
                                        aria-label=" input example" Disabled></td>

                                <td scope="row"> Invoice No.</td>
                                <td><input class="form-control" type="text" value="678" aria-label=" input example"
                                        Disabled>
                                </td>

                            </tr>
                            <tr>

                                <td scope="row"> Invoice Date</td>
                                <td><input class="form-control" type="text" value="05-01-2022"
                                        aria-label=" input example" Disabled></td>

                                <td scope="row"> L.P.O Number</td>
                                <td><input class="form-control" type="text" value="" aria-label=" input example"
                                        Disabled></td>

                            </tr>
                            <tr>
                                <td scope="row"> Currency</td>
                                <td><input class="form-control" type="text" value="KES" aria-label=" input example"
                                        Disabled>
                                </td>

                                <td scope="row"> Exchange Rate</td>
                                <td><input class="form-control" type="text" value="1.00" aria-label=" input example"
                                        Disabled>
                                </td>

                            </tr>
                            <tr>

                                <td scope="row">Due Date for Payment</td>
                                <td><input class="form-control" type="text" value="" aria-label=" input example"
                                        Disabled></td>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th colspan="4">Instruction Details</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td scope="row"> Posted By</td>
                                <td><input class="form-control" type="text" value="" aria-label=" input example"
                                        Disabled></td>

                                <td scope="row"> Posting Date</td>
                                <td><input class="form-control" type="text" value="05-01-2022"
                                        aria-label=" input example" Disabled></td>

                            </tr>
                            <tr>

                                <td scope="row"> Approved By</td>
                                <td><input class="form-control" type="text" value="Princess Caroline"
                                        aria-label=" input example" Disabled></td>

                                <td scope="row"> Approved Date</td>
                                <td><input class="form-control" type="text" value="05-01-2022"
                                        aria-label=" input example" Disabled></td>

                            </tr>
                            <tr>
                                <td scope="row"> Cancelled By</td>
                                <td><input class="form-control" type="text" value="" aria-label=" input example"
                                        Disabled></td>

                                <td scope="row"> Cancel Date</td>
                                <td><input class="form-control" type="text" value="" aria-label=" input example"
                                        Disabled></td>

                            </tr>
                            <tr>

                                <td scope="row">Status</td>
                                <td><input class="form-control" type="text" value="APPROVED" aria-label=" input example"
                                        Disabled></td>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
                <table class="table table-striped table-class" id="table-id">

                    <thead>
                        <tr>
                            <th class="text-center">Date </th>
                            <th class="text-center">Voucher No.</th>
                            <th class="text-center">Financial Account</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Net Amt (KES)</th>
                            <th class="text-center">Tax(KES)</th>
                            <th class="text-center">Gross Total (KES)</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File</th>
                            <th class="text-center">Partner Account</th>
                            <th class="text-center">Drawing Account</th>

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
                        <tr></tr>
                        <td  colspan=11></td>
                        <tr class="text-center">

                            <td colspan=3></td>
                            <td>Total :</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-primary" style="width:15%;">Print</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" style="width:15%;" onclick="history.back()">Close</button>
    </div>




</div>


@endsection