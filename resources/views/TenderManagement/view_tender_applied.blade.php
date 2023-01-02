@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<h4 id="hdtpa"><b>Tender Applied Details</b></h4>
<br>
<form method="post" action="{{url('')}}">
    @csrf
    <div class="container">
        <div class="text-left">
            <table class="table table-hover" style="border: 1px solid">
                <tbody>
                    <tr>
                        <td scope="row">Date</td>
                        <td>{{$view_tender_applied->date}}
                        </td>

                    </tr>
                    <tr>
                        <td scope="row">Item Name</td>
                        <td>{{$view_tender_applied->item_name}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Quantity</td>
                        <td>{{$view_tender_applied->quantity}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Supplier Name</td>
                        <td>{{$view_tender_applied->supplier_name}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Mobile No.</td>
                        <td>{{$view_tender_applied->mobile_no}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Address</td>
                        <td>{{$view_tender_applied->address}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Description</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row">Supporting Documents</td>
                        <td>
                        </td>

                    </tr>
                    <tr>
                        <td scope="row">Period of Contract (in Days)</td>
                        <td>{{$view_tender_applied->period_of_contract}}
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Total Cost of Tender</td>
                        <td>{{$view_tender_applied->cost_of_tender}}
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">Payment Type</td>
                        <td>{{$view_tender_applied->payment_type}}
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <br>
                <button type="button" class="btn btn-primary " Style="width:50%;">Accept</button>
                <button type="button" class="btn btn-primary " Style="width:45%;">Reject</button>
            </div>
        </div>

    </div>

</form>


@endsection