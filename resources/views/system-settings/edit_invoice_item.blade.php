@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('invoice_items')}}" style="color: #1D1D50;">Invoice Items</a> /
    <a href="#" style="color: #1D1D50;">Edit Invoice Items</a>
</nav>
<br><br>
<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Invoice Item</b></h4>
    <br><br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_invoice_item')}}" id="form">
                <input type="hidden" name="id" value="{{$invoice_item->id}}">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Type Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="typename" value="" class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Comments:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="comments" value="" class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Item Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="iname" value="{{$invoice_item->item_name}}"
                                    class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Item Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" id="" name="category" style="width:100%;">
                                    <option> {{$invoice_item->item_category}}</option>
                                    <option>Fees</option>
                                    <option>Disbursements w/VAT</option>
                                    <option>Disbursements w/o VAT</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Sales Tax Code:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="sales_tax_code" style="width:100%;">
                                    <option>{{$invoice_item->sales_tax_code}}</option>
                                    <option>Non-Taxable</option>
                                    <option>Taxable</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Income Account:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="account" style="width:100%;">
                                    <option>{{$invoice_item->income_account}}</option>
                                    <option>1000====Income from Legal Fees</option>
                                    <option>1100====Other Income</option>
                                    <option>1101====Other Income - Vatable Disbursements</option>
                                    <option>1102====Other Income - Miscellaneous Income</option>
                                    <option>1103====Other Income - Interest Earned</option>
                                    <option>1104====Other Income - Loan Administration Fees</option>
                                    <option>9500====Other Income - Client gets Account Payable - Cooperative Bank
                                    </option>
                                </select>


                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                        <br>
                        <br>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>

@endsection