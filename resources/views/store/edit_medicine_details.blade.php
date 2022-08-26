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
    <h3 style="text-align:center"><b><u>Edit Item Details</u></b></h3>
     <table class="table table-bordered" style="border: 1px solid">
         <form method="post" action="{{url('item_update')}}" enctype="multipart/form-data">
             @csrf
              <tbody>
                @foreach($item_details as $data)
                <input type="hidden" name="item_id" value="{{$data->id}}" class="form-control">

                <tr>
                    <th>Item Image</th>
                        <td><img src="{{ asset('/image/medicine/'.$data->upload_image) }}" style="width:100%;height:50%;"><br><br>
                            <input type="file" name="editimage" class="form-control">
                        </td>
                </tr>
                <tr>
                    <th style="width:30%" >Item Name</th>
                    <td> <input value="{{$data->Item_name}}" name='item_name' class="form-control"></td>
                </tr>
                <tr>
                    <th>Brand Name</th>
                    <td><select class="form-select contrl searchingBook"   name="brand_name" aria-label="Default select example" required>
                        @foreach($brands as $brand)
                            <option value="{{$brand->brand_name}}"  {{ (strcmp($data->brand_name,$brand->brand_name)==0) ? "selected":""}} >  {{$brand->brand_name}}   </option>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Item Group</th>
                    <td><select class="form-select contrl searchingBook"  name="item_group" aria-label="Default select example" required>
                        {{-- <option value="{{$brand->brand_name}}"  {{ (strcmp($data->brand_name,$brand->brand_name)==0) ? "selected":""}} >  {{$brand->brand_name}}   </option> --}}
                        @foreach($medicine_groups as $groups)
                           <option value="{{$groups->group_name}}"  {{ (strcmp($data->item_group,$groups->group_name)==0) ? "selected":""}} >  {{$groups->group_name}}   </option>
                        @endforeach
                    </select></td>
                </tr>
                <tr>
                    <th>Category Name</th>
                    <td><select class="form-select contrl searchingBook"   name="category_name" aria-label="Default select example" required>
                        <option>Select</option>

                        @foreach($medicine_categories as $category)
                            <option value="{{$category->category_name}}"  {{ (strcmp($data->category_name,$category->category_name)==0) ? "selected":""}} >  {{$category->category_name}}   </option>
                        @endforeach
                    </select></td>
                </tr>
                <tr>
                    <th>Generic Name</th>
                    <td><select class="form-select contrl searchingBook" name="genric_name" aria-label="Default select example" required>
                        <option>Select</option>
                        @foreach($generic1_name as $generic)
                            <option value="{{$generic->generic_name}}"  {{ (strcmp($data->generic_name,$generic->generic_name)==0) ? "selected":""}} >  {{$generic->generic_name}}   </option>
                        @endforeach
                    </select></td>
                </tr>
                <tr>
                    <th>Minimum Level</th>
                    <td><input value="{{$data->minimum_level}}" name="minimum_level" class="form-control" required></td>
                </tr>
                <tr>
                    <th>Reorder Level</th>
                    <td><input value="{{$data->reorder_level}}" name="reorder" class="form-control" required ></td>
                </tr>
                <tr>
                    <th>Medicine Composition</th>
                    <td><textarea class="form-control" name="medicine_composition">{{$data->medicine_composition}}</textarea></td>
                </tr>
                <tr>
                    <th>Medicine Details</th>
                        <td><textarea class="form-control" name="item_details">{{$data->notes}}</textarea></td>
                </tr>
                <tr>
                    <tr>
                        <th></th>
                        <br>
                        <td><button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:55%;">Update</button></td>
                    </tr>
                </tr><br>
                @endforeach
            </tbody>

        </form>
        </table>


    </div>
    <script>
        $(document).ready(function(){
                 $('.searchingBook').select2();
        });
     </script>
@endsection

