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
    <h3 style="text-align:center"><u><b>Payments</b></u></h3><br>
    {{-- {{$hospital=Auth::user()->id}} --}}
        {{-- <table class="table table-bordered" style="border: 1px solid"> --}}
            <form action="add_payment_details" method="post" enctype="multipart/form-data">

                @csrf
                {{-- {{$purchase_items_id}} --}}
                <input type="hidden" id="id" name="purchase_item" value="">
                <div class="row">
                    <div class="col-sm-4">
                            <label>Date</label>
                                <input type="date" class="form-control" name="paid_date" id="batch_number"  value="">
                        </div>
                        <div class="col-sm-4">
                            <label>Balance Amount</label>
                            <input type="text" class="form-control" name="balance_amount" id="purchase_item_name"  value="">
                        </div>
                        <div class="col-sm-4">
                            <label>Paid Amount</label>
                            <input type="text" class="form-control" name="paid_amount" id="purchase_item_name" value="">
                        </div>
                    </div>
                    <br>
                <div class="text-center">
                        <button type="button" class="btn btn-primary text-white" onclick="window.history.back()" style="width:10%;background-color:#3e699b" >Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#3e699b;width:10%;">Save</button>
                    </div>


            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@endsection
