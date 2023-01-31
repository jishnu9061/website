@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Procurement</a> /
    <a href="{{url('purchase_order_report')}}" style="color: #1D1D50;">Purchase Order Report</a> /
    <a href="#" style="color: #1D1D50;">Edit Purchase Order</a>
</nav>
<br><br>

<div class="container">
    <h4 id="hdtpa"><b>Edit Purchase Order</b></h4>
    <br>



    <div class="text-center">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">Purchase Details</th>

                </tr>
            </thead>
            <tbody>
                @foreach($edit_purchase as $list)
                <tr>
                    <td scope="row">Purchase Date</td>
                    <td><input class="form-control" type="text" value="{{$list->purchase_date}}"
                            aria-label="Disabled input example"></td>

                </tr>
                <tr>
                    <td scope="row">Purchase Number</td>
                    <td><input class="form-control" type="email" value="{{$list->purchase_order_number}}"
                            aria-label="Disabled input example"></td>

                </tr>
                <tr>
                    <td scope="row">Payment Type</td>
                    <td><input class="form-control" type="text" value="{{$list->payment_type}}"
                            aria-label="Disabled input example"></td>

                </tr>
                <tr>
                    <td scope="row">Supplier</td>
                    <td><input class="form-control" type="text" value="{{$list->supplier_name}}"
                            aria-label="Disabled input example"></td>

                </tr>
                <tr>
                    <td scope="row">Status</td>
                    <td>
                        <select class="form-select" aria-label="Default select example" name="City">
                            <option value="order-placed">order-placed</option>
                            <option value="verified">verified</option>
                            <option value="cancel">cancel</option>
                        </select>
                    </td>

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
                @foreach($edit_purchases as $listss)
                <tr>
                    <td><input class="form-control" type="text" value="{{$listss->item_name}}"
                            aria-label="Disabled input example"></td>
                    <td><input class="form-control" type="text" value="{{$listss->item_no}}"
                            aria-label="Disabled input example"></td>
                    <td><input class="form-control" type="text" value="{{$listss->quantity}}"
                            aria-label="Disabled input example"></td>
                    <td><input class="form-control" type="text" value="{{$listss->price}}"
                            aria-label="Disabled input example"></td>
                    <td><input class="form-control" type="text" value="{{$listss->total}}"
                            aria-label="Disabled input example"></td>
                </tr>
                @endforeach

                @foreach($edit_purchase as $lists)
                <tr>
                    <td colspan="3"></td>
                    <td><input type="text" placeholder="Grand Total" class="form-control"></td>
                    <td><input type="text" value="{{$lists->grand_total}}" class="form-control"></td>
                </tr>

                <tr>


                    <td colspan="3"></td>
                    <td><input type="text" placeholder="Advance Amount" class="form-control"></td>
                    <td><input type="text" value="{{$lists->advance_amount}}" class="form-control"></td>
                </tr>

                <tr>


                    <td colspan="3"></td>
                    <td><input type="text" placeholder="Pending Amount" class="form-control"></td>
                    <td><input type="text" value="{{$lists->pending_amount}}" class="form-control"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <button type="button" class="btn btn-primary">Update</button>
        <span class="m-2"></span>
        <button type="button" class="btn btn-primary" onclick="history.back()">Close</button>




    </div>





    @endsection
