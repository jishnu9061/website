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
    <h3 style="text-align:center">Item Details</h3><br>
    <table class="table table-bordered" style="border: 1px solid">
        @foreach($medicines_details as $data)
        @csrf
        <tbody >
            <tr>
                 <th>Item Image</th>
                     <td><img src="{{ asset('/image/medicine/'.$data->image) }}" style="width:30%;height:30%;"></td>
            </tr>
            <tr>
                <th style="width:30%" >Item Name</th>
                <td> <input value="{{$data->medicine_name}}"class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Brand Name</th>
                <td><input value="{{$data->brand_name}}"class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item Group</th>
                <td><input value="{{$data->medicine_group}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item Category</th>
                <td><input value="{{$data->category_name}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Generic Name</th>
                <td><input value="{{$data->genric_name}}" class="form-control" readonly></td>
            </tr>
            @foreach($manufacturer as $text)
            <tr>
                <th>Manufacturer Name</th>
                    <td><input value="{{$text->manufactuers_name}}"class="form-control" readonly></td>
            </tr>
            @endforeach
            @foreach($suppliers as $test)
            <tr>
                <th>Supplier Name</th>
                    <td><input value="{{$test->supplier_name}}"class="form-control" readonly></td>
            </tr>
            @endforeach


            <tr>
                <th>Minimum Level</th>
                <td><input value="{{$data->minimum_level}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Re Order</th>
                <td><input value="{{$data->reorder}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item(Medicine) Composition</th>
                <td><textarea class="form-control" readonly>{{$data->medicine_composition}}</textarea></td>
            </tr>
            <tr>
                <th>Item Details</th>
                    <td><textarea class="form-control" readonly>{{$data->medicine_details}}</textarea></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection
