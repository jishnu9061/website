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
<div class="container">
    <h3 style="text-align:center"><u><b>Edit Return Detailes</b></u></h3><br>
    {{-- {{$hospital=Auth::user()->id}} --}}
        {{-- <table class="table table-bordered" style="border: 1px solid"> --}}
            <form action="{{url('return_items')}}" method="post" enctype="multipart/form-data">
                @foreach ($purchase_items_data as $row)
                @csrf
                {{-- {{$purchase_items_id}} --}}
                <input type="hidden" id="id" name="purchase_item" value="{{$row->id}}">
                <div class="row">
                    <div class="col-sm-4">
                            <label>Batch Number</label>
                                <input type="text" class="form-control" name="batch_number" id="batch_number" readonly value="{{$row->batch_no}}">
                        </div>
                        <div class="col-sm-4">
                            <label>Item</label>
                            <input type="text" class="form-control" name="purchase_item_name" id="purchase_item_name" readonly value="{{$row->Item_name}}">
                        </div>
                        <div class="col-sm-4">
                            <label>Quantity</label>
                            <input type="text" class="form-control" name="purchase_item_name" id="purchase_item_name" readonly value="{{$row->quantity}}">
                        </div>
                    </div>
                    <br>
                <div class="row">
                        <div class="col-sm-4">
                            <label>Return Quantity</label>
                            <input type="text" class="form-control" name="return_quantity" id="return_quantity" >
                        </div>
                        <div class="col-sm-4">
                            <label>Purchase Remark</label>
                            <input type="text" class="form-control" name="purchase_remark" id="purchase_remark" >
                        </div>
                        <div class="col-sm-4">
                            <label>Add By</label>
                            <select class="form-select" aria-label="Default select example" name="purchase_added_by" id="purchase_added_by" style="pointer-events:none">
                                <option value="">Select</option>
                                @foreach ($users as $key2)
                                 <option value="{{$key2->id}}" {{ ($key2->id==Auth::user()->id) ? "selected" : "" }} >{{$key2->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach

                <div class="text-center">
                    {{-- <button type="submit" class="btn btn-primary" >Save</button>
                        <button type="button" class="btn btn-primary" onclick="window.history.back()" data-bs-dismiss="modal">Cancel</button> --}}
                        <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:10%;background-color:#3e699b" >Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#3e699b;width:10%;">Update</button>
                    </div>


            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@endsection
