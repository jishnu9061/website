@extends('layouts.hmsmain')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        </head>
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>
    {{-- <a type="button" href="{{url('view_manufacturers')}}"class="btn btn-outline-primary btn-width ">Back</a> --}}
</div>
<br>
<div class="container">
    <h3 style="text-align:center"><b><u>Edit Item Detailes</u></b></h3><br>
    {{-- {{$hospital=Auth::user()->id}} --}}
        {{-- <table class="table table-bordered" style="border: 1px solid"> --}}
            <form action="{{url('item_update')}}" method="post" enctype="multipart/form-data">
                @foreach ( $purchase_detailes as $row)
                @csrf
                {{-- {{$purchase_items_id}} --}}
                <input type="hidden" id="id" name="purchase_item" value="{{$row->id}}">
                <div class="row clearfix">
                    <div class="col-sm">

                        <table class="table table-bordered table-hover" id="tab_logic">
                            <tr>
                                <td class="" style="width:25%">Item Name</td>
                                <td class="">Batch No</td>
                                <td class="">Quantity</td>
                                <td class="">Price</td>
                            </tr>
                        <tbody>
                        @foreach (  $purchase_items as $row)

                            <tr>
                                <td>
                                    <select class="form-select" aria-label="select example"  name="item_name[]" id="item_name">
                                        <option value="">Select</option>
                                        @foreach($medicines_details as $val)
                                            <option value="{{$val->id}}" {{ ($val->id == $row->item_name) ? "selected" : "" }} >{{ $val->Item_name }}</option>
                                        @endforeach
                                      </select>
                                </td>
                                <td><input type="text" name="batch_no[]" id="batch_no_" class="form-control"  placeholder="Batch No"  value="{{$row->batch_no}}"></td>
                                <td><input type="text" name="quantity[]" id="quantity_" class="form-control"  value="{{$row->quantity}}"></td>
                                <td><input type="text" name="price[]" id="price_" class="form-control" value="{{$row->price}}"></td>
                            </tr>
                        @endforeach

                        </table>

                    </div>

                </div>
                @endforeach
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm pull-right">
                        <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:25%;background-color:#435ebe" >Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:25%;">Update</button>
                    </div>
                </div>
                </div>

            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@endsection
