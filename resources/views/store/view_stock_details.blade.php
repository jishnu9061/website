@extends('layouts.hmsmain')
@section('content')
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
    <h3 style="text-align:center">Stock Details</h3><br>
    <a type="button" href="{{url('view_add_new_stock_details')}}"class="btn btn-primary" style="background-color:#5e829d;width:15%;">Add Stock</a><br><br>
        <table class="table table-bordered table-striped" id="new-item">
            <thead>
                <tr>
                    <h1></h1>
                    <th class="text-center">No</th>
                    <th class="text-center">Added Date</th>
                    <th class="text-center">Purchase Date</th>
                    <th class="text-center">Order No</th>
                    <th class="text-center">Purchase Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stock_details as $data)
                    <tr id="data">
                        <td  scope="row" class="text-center">{{$data->id}}</td>
                        <td  scope="row" class="text-center">{{$data->added_date}}</td>
                        <td  scope="row" class="text-center">{{$data->purchase_date}}</td>
                        <td  scope="row" class="text-center" >{{$data->order_no}}</td>
                        <td  scope="row"class="text-center"><a href="{{url('view_purchase_details_stock'.$data->id)}}"><i  style="color:#435ebe;" class="fa fa-eye" aria-hidden="true"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script>
        $(document).ready(function(){
                 $('.searchingBook').select2();
        });
     </script>
@endsection

