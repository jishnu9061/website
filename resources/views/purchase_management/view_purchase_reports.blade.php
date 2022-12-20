@extends('layouts.hmsmain')
@section('content')






<div class="container">
    <h4 id="hdtpa"><b>View Purchase Order</b></h4>
    <br>


    <div class="text-center">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Purchase Order Details</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Purchase Date</th>
                    <td><input class="form-control" type="text" placeholder="23-11-2022"
                            aria-label="Disabled input example" disabled></td>

                </tr>
                <tr>
                    <th scope="row">Order Number</th>
                    <td><input class="form-control" type="text" placeholder="62C67947652DC"
                            aria-label="Disabled input example" disabled></td>

                </tr>
                <tr>
                    <th scope="row">Supplier Name</th>
                    <td><input class="form-control" type="text" placeholder="ABC Ltd"
                            aria-label="Disabled input example" disabled></td>

                </tr>
                <tr>
                    <th scope="row">Payment Type</th>
                    <td><input class="form-control" type="text" placeholder="By Cash"
                            aria-label="Disabled input example" disabled></td>

                </tr>

            </tbody>
        </table>

    </div>
    <br>


    <div class="text-center">
        <h4><b>Item Details</b></h4>

    </div>



    <div class="text-center">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Item Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td><input type="text" placeholder="Pen" class="form-control" disabled></td>
                        <td><input type="text" placeholder="10" class="form-control" disabled></td>
                        <td><input type="text" placeholder="35" class="form-control" disabled></td>
                        <td><input type="text" placeholder="350" class="form-control" disabled></td>
                    </tr>
                    <tr>


                        <td colspan="2"></td>
                        <td><input type="text" placeholder="Grand Total" class="form-control" disabled></td>
                        <td><input type="text" placeholder="350" class="form-control" disabled></td>
                    </tr>

                    <tr>


                        <td colspan="2"></td>
                        <td><input type="text" placeholder="Advance Amount" class="form-control" disabled></td>
                        <td><input type="text" placeholder="350" class="form-control" disabled></td>
                    </tr>

                    <tr>


                        <td colspan="2"></td>
                        <td><input type="text" placeholder="Payment Amount" class="form-control" disabled></td>
                        <td><input type="text" placeholder="350" class="form-control" disabled></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

    <br>
    <!-- button -->
    <div class="text-center">
        <button type="button" class="btn btn-primary">Print</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>
    </div>

</div>



@endsection