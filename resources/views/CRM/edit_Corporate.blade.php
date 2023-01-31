@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="{{url('Corporate')}}" style="color: #1D1D50;">Corporate Customers</a> /
    <a href="#" style="color: #1D1D50;">Edit Corporate Customers</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Corporate Customers </b></h4>
    <br>
    <div class="card">

        <div class="card-body">
            <form method="post" action="{{url('update_Corporate')}}" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$update_list->Id}}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username"> Name</label>
                            <div class="input-group">

                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" id="username"
                                    value="{{ $update_list->Name}}" placeholder="" required>
                                <!-- <input type="text" class="form-control" name="name"
                                                                    id="username" value="" placeholder="Client name"
                                                                    required> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Customer Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">GST Office</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="office" id="username"
                                    value="{{ $update_list->GST_Office}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">GST Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="gst" id="username"
                                    value="{{ $update_list->GST_Number}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Social Security Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="security" id="username"
                                    value="{{ $update_list->Social_Security_Number}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Customer Authority</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="customer" id="username"
                                    value="{{ $update_list->Customer_Authority}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="phone" id="username"
                                    value="{{ $update_list->Phone}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">FAX</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="fax" id="username"
                                    value="{{ $update_list->FAX}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" id="username"
                                    value="{{ $update_list->Email}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Web</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="web" id="username"
                                    value="{{ $update_list->Web}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Country</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="country" id="cars">

                                    <option>{{$update_list->Country}}</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">State</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="state" id="state">
                                    <option>{{ $update_list->State}}</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4 </option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">City</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="city" id="city">
                                    <option>{{ $update_list->City}}</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4 </option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Town</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="town" id="username"
                                    value="{{ $update_list->Town}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Post Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="post" id="username"
                                    value="{{ $update_list->Post_Code}}" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Postal Code is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Address</label>
                            <div class="input-group">
                                <textarea class="form-control" id="username" rows="2" name="address"
                                    value="">{{ $update_list->Address}}</textarea>
                                <div class="invalid-feedback" style="width: 100%;">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <br>
                <!-- <h4 style="text-align:center">Contact Persons</h4> -->



                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                                                </div>
                                                <div class="col-sm">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary float:right;"
                                                        Style="width:50%;">Save</button>
                                                    <button type="button" class="btn btn-primary float:left"
                                                        Style="width:45%;" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>


    @endsection
