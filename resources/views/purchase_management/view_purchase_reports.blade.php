@extends('layouts.hmsmain')
@section('content')


<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Procurement</a> /
    <a href="{{url('purchase_order')}}" style="color: #1D1D50;">New Purchase Orders</a> /
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
                    <th colspan="2">Purchase Order Details</th>

                </tr>
            </thead>
            <tbody>
                @foreach($view_order as $list)
                <tr>
                    <th scope="row">Purchase Date</th>
                    <td><input class="form-control" type="text" aria-label="Disabled input example"
                            value="{{$list->purchase_date}}" disabled></td>

                </tr>
                <tr>
                    <th scope="row">Order Number</th>
                    <td><input class="form-control" type="text" aria-label="Disabled input example"
                            value="{{$list->purchase_order_number}}" disabled></td>

                </tr>
                <tr>
                    <th scope="row">Supplier Name</th>
                    <td><input class="form-control" type="text" aria-label="Disabled input example"
                            value="{{$list->supplier_name}}" disabled></td>

                </tr>
                <tr>
                    <th scope="row">Payment Type</th>
                    <td><input class="form-control" type="text" aria-label="Disabled input example"
                            value="{{$list->payment_type}}" disabled></td>

                </tr>
                @endforeach
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

                    @foreach($view_purchase_order as $lists)
                    <tr>

                        <td><input type="text" class="form-control" value="{{$lists->item_no}}" disabled></td>
                        <td><input type="text" class="form-control" value="{{$lists->quantity}}" disabled></td>
                        <td><input type="text" class="form-control" value="{{$lists->price}}" disabled></td>
                        <td><input type="text" class="form-control" value="{{$lists->total}}" disabled></td>
                    </tr>
                   @endforeach

                   @foreach($view_order as $listss)
                    <tr>


                        <td colspan="2"></td>
                        <td><input type="text" placeholder="Grand Total" class="form-control" disabled></td>
                        <td><input type="text" class="form-control" value="{{$listss->grand_total}}" disabled></td>
                    </tr>

                    <tr>


                        <td colspan="2"></td>
                        <td><input type="text" placeholder="Advance Amount" class="form-control" disabled></td>
                        <td><input type="text" class="form-control"  value="{{$listss->advance_amount}}" disabled></td>
                    </tr>

                    <tr>


                        <td colspan="2"></td>
                        <td><input type="text" placeholder="Pending Amount" class="form-control" disabled></td>
                        <td><input type="text" class="form-control" value="{{$listss->pending_amount}}" disabled></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- <br>
    <div class="text-center">
        <button type="button" class="btn btn-primary">Print</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>
    </div> -->

</div>



@endsection
