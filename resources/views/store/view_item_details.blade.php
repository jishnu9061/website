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
    <h3 style="text-align:center"><b><u>Item Details</u></b></h3><br>
    <table class="table table-bordered" style="border: 1px solid">
        @foreach($item_details as $data)
        @csrf
        <tbody >
            <tr>
                 <th>Item Image</th>
                     <td><img src="{{ asset('/image/medicine/'.$data->upload_image) }}" style="width:100%;height:50%;"></td>
            </tr>
            <tr>
                <th style="width:30%" >Item Name</th>
                <td> <input value="{{$data->Item_name}}"class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Brand Name</th>
                <td><input value="{{$data->brand_name}}"class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item Group</th>
                <td><input value="{{$data->item_group}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item Category</th>
                <td><input value="{{$data->category_name}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Generic Name</th>
                <td><input value="{{$data->generic_name}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Minimum Level</th>
                <td><input value="{{$data->minimum_level}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Reorder Level</th>
                <td><input value="{{$data->reorder_level}}" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Item(Medicine)Composition</th>
                <td><textarea class="form-control" readonly>{{$data->medicine_composition}}</textarea></td>
            </tr>
            <tr>
                <th>Item Details</th>
                    <td><textarea class="form-control" readonly>{{$data->notes}}</textarea></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection
