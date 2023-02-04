@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Stores and Inventory</a> /
    <a href="{{url('manage_items') }}" style="color: #1D1D50;">Manage Items</a> /
    <a href="#" style="color: #1D1D50;">Edit Item</a>
</nav>
<br><br>

<div class="container">
    <h4 id="hdtpa"><b>Edit Items</b></h4>
    <br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_manage_items')}}" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$edit->id}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Category</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>

                                <select name="category" id="userame" style="width:100%;" value="{{$edit->Category}}">
                                    <option>{{$edit->Category}} </option>
                                    <option>stationery </option>
                                    <option>furniture</option>
                                    <option>library</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Town is required.
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Item Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" name="type" list="cityname" style="width:100%;"
                                    value="{{$edit->Item_Type}}">
                                <datalist id="cityname" style="width:100%;">

                                    <option value="Book">
                                    <option value="Pen">
                                    <option value="Ink">
                                </datalist>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Item Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="name" id="age"
                                    value="{{$edit->Item_Name}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Reorder Level</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="level" id="age"
                                    value="{{$edit->Reorder_Level}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:left;">Update</button>
                        <button type="button" class="btn btn-primary float:right;" onclick="history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





@endsection
