@extends('layouts.hmsmain')
@section('content')

<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Procurement</a> /
    <a href="{{url('purchase_order_report')}}" style="color: #1D1D50;">Purchase Order Report</a> /
    <a href="#" style="color: #1D1D50;">View Purchase Order</a>
</nav>
<br><br>
<div class="container">

    <h4 id="hdtpa"><b>View Purchase Order</b></h4>
    <br>



    <div class="text-center">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Purchase Details</th>

                </tr>
            </thead>
            <tbody>
                @foreach($purchase_view as $lists)
                <tr>
                    <td scope="row">Purchase Date</td>
                    <td><input class="form-control" type="text" value="{{$lists->purchase_date}}" aria-label="Disabled input example" Disabled></td>

                </tr>
                <tr>
                    <td scope="row">Purchase Number</td>
                    <td><input class="form-control" type="text" value="{{$lists->purchase_order_number}}" aria-label="Disabled input example" Disabled></td>

                </tr>
                <tr>
                    <td scope="row">Payment Type</td>
                    <td><input class="form-control" type="text" value="{{$lists->payment_type}}" aria-label="Disabled input example" Disabled></td>

                </tr>
                <tr>
                    <td scope="row">Supplier</td>
                    <td><input class="form-control" type="text" value="{{$lists->supplier_name}}" aria-label="Disabled input example" Disabled></td>

                </tr>
                <tr>
                    <td scope="row">Status</td>
                    <td><input class="form-control" type="text" value="{{$lists->status}}" aria-label="Disabled input example" Disabled></td>

                </tr>
                @endforeach

            </tbody>
        </table>



        <br>

        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item No</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($purchase as $listss)
                <tr>
                    <td><input class="form-control" type="text" value="{{$listss->item_name}}" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td><input class="form-control" type="text" value="{{$listss->item_no}}" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td><input class="form-control" type="text" value="{{$listss->quantity}}" aria-label="Disabled input example" disabled
                            readonly></td>
                    <td><input class="form-control" type="text" value="{{$listss->price}}" aria-label="Disabled input example" disabled
                            readonly></td>
                    <td><input class="form-control" type="text" value="{{$listss->total}}" aria-label="Disabled input example" disabled
                            readonly></td>
                </tr>
                @endforeach
                @foreach($purchase_view as $list)
                <tr>
                    <td colspan="3"></td>
                    <td><input type="text" placeholder="Grand Total" class="form-control" disabled></td>
                    <td><input type="text"  class="form-control" value="{{$list->grand_total}}" disabled></td>
                </tr>

                <tr>


                    <td colspan="3"></td>
                    <td><input type="text" placeholder="Advance Amount" class="form-control" disabled></td>
                    <td><input type="text"  class="form-control" value="{{$list->advance_amount}}" disabled></td>
                </tr>

                <tr>


                    <td colspan="3"></td>
                    <td><input type="text" placeholder="Pending Amount" class="form-control" disabled></td>
                    <td><input type="text"  class="form-control" value="{{$list->pending_amount}}" disabled></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <button type="button" class="btn btn-primary">Print</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>




    </div>





    @endsection







