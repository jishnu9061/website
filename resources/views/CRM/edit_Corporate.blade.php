@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Corporate Customers </b></h4>
    <br>
    <div class="row">
                                    <div class="col-md-12 order-md-1">
                                        <form method="post" action="{{url('')}}" id="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-1">
                                                        <label for="username"> Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"></div>
                                                            <select name="town" id="username" style="width:100%;">
                                                                <option>---select--- </option>
                                                                <option>client 1 </option>
                                                                <option>client 2</option>

                                                            </select>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="email" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <select name="event" id="cars">
                                                                <option>---select---</option>
                                                                <option>1</option>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <input type="text" class="form-control" name="Code"
                                                                id="username" value="" placeholder=""
                                                                required>
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
                                                            <textarea class="form-control" id="form7Example7" rows="2"
                                                                name="paddress"></textarea>
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