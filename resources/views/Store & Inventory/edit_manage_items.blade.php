@extends('layouts.hmsmain')
@section('content')
<html>

<head>
    <style>

    </style>

</head>

<body>

    <!-- <h2 style="color: #070344;  text-align:center;"><b>Customer Registration</b></h2> -->

    <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px">
                <b><u>Client Registration</u></b></span> -->
    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Edit Items</b></h4>


        <br>


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

                            <select name="type" id="username" style="width:100%;" value="{{$edit->Item_Type}}">
                                <option >{{$edit->Item_Type}} </option>
                                <option>book </option>
                                <option>file</option>
                                <option>pen</option>
                            </select>
                            <div class="invalid-feedback" style="width: 100%;">
                                Town is required.
                            </div>

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
                            <input type="text" class="form-control" name="name" id="age" value="{{$edit->Item_Name}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="username">Reorder Level</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="level" id="age"  value="{{$edit->Reorder_Level}}">
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
                    <button type="button" class="btn btn-primary float:right;" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </form>
    </div>
  




    @endsection