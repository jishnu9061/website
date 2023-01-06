@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> View Tender Details </b></h4>
    <br><br>

    <form>


        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>


                    <tr>
                        <th> From Date :</th>
                        <td> {{$view_apply_tender->from_date}}</td>
                    </tr>
                    <tr>
                        <th> Date To :</th>
                        <td> {{$view_apply_tender->to_date}}</td>
                    </tr>
                    <tr>
                        <th> Item :</th>
                        <td> {{$view_apply_tender->item}}</td>
                    </tr>
                    <tr>
                        <th> Category :</th>
                        <td> {{$view_apply_tender->category}}</td>
                    </tr>
                    <tr>
                        <th> Quantity :</th>
                        <td> {{$view_apply_tender->quantity}}</td>
                    </tr>
                    <tr>
                        <th> Status :</th>
                        <td> Opened</td>
                    </tr>

                    <tr>
                        <th> Description:</th>
                        <td></td>
                    </tr>


                </tbody>
            </table>
        </div>

    </form>
    <br>
    <div classs="align-center">
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"> Apply
            Form</button>
    </div>


</div>











<!-- <div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="validationDefault01"> From Date </label>
        <input type="Text" class="form-control" value="{{$view_apply_tender->from_date}}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefault02"> Date To </label>
        <input type="text" class="form-control" value="{{$view_apply_tender->to_date}}">
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationDefaultUsername">Item</label>
        <div class="input-group">
            <input type="text" class="form-control" aria-describedby="inputGroupPrepend2"
                value="{{$view_apply_tender->item}}">
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="validationDefault03">Category</label>
        <input type="text" class="form-control" value="{{$view_apply_tender->category}}">
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationDefault04">Quantity</label>
        <input type="text" class="form-control" value="{{$view_apply_tender->quantity}}">
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationDefault05">Status</label>
        <input type="text" class="form-control alert alert-success" role="alert" placeholder="Opened">
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
        <label for="inputAddress">Description</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
</div>


<br>
<div classs="align-center">
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"> Apply
        Form</button>
</div> -->











<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>Apply Tender</b></h2>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" enctype="multipart/form-data" action="{{url('store_apply_tender')}}">
                        @csrf
                        <div class="container">
                            <div class="text-center">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <h5> Tender Details Form </h5>
                                            </td>

                                        </tr>


                                        <tr>
                                            <td scope="row">Date</td>
                                            <td><input class="form-control" type="date" aria-label="input example"
                                                    name="date"></td>

                                        </tr>
                                        <tr>
                                            <td scope="row">Item Name</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="item_name"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Quantity</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="Quantity"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Supplier Name</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="supplier_name"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Mobile No.</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="mobile_no"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Address</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="address"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Description</td>
                                            <td><textarea class="form-control" rows="2" name="description"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Supporting Documents</td>
                                            <td><input type="file" class="form-control" name="document">

                                            </td>

                                        </tr>
                                        <tr>
                                            <td scope="row">Period of Contract (in Days)</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="contract"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Total Cost of Tender</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="cost"></td>
                                        </tr>

                                        <tr>
                                            <td scope="row">Payment Type</td>
                                            <td><input class="form-control" type="text" aria-label="input example"
                                                    name="payment"></td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <br>
                                    <button type="submit" class="btn btn-primary " Style="width:50%;">Apply</button>
                                    <button type="button" class="btn btn-primary " Style="width:45%;"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
            @endsection