@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> View Tender Details </b></h4>
    <br><br>

    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault01"> From Date </label>
                <input type="Text" class="form-control" placeholder="17-12-2022">
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02"> Date To </label>
                <input type="text" class="form-control" placeholder="31-12-2022">
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Item</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Chairs" aria-describedby="inputGroupPrepend2">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Category</label>
                <input type="text" class="form-control" placeholder="Furniture">
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault04">Quantity</label>
                <input type="text" class="form-control" placeholder="100">
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault05">Status</label>
                <input type="text" class="form-control alert alert-success" role="alert" placeholder="Opened">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="inputAddress">Description</label>
                <textarea class="form-control" rows="3" placeholder="Teak wooden material chairs required."></textarea>
            </div>
        </div>

    </form>

    <br>
    <div classs="align-center">
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal"> Apply
            Form</button>
    </div>

</div>











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
                    <form method="post" enctype="multipart/form-data" action="{{url('')}}">
                        @csrf
                        <div class="container">
                            <div class="text-center">
                                <table class="table">
                                   <tbody>
                                        <tr>
                                            <td colspan="2"><h5> Tender Details Form </h5></td>

                                        </tr>
                                   
                                    
                                        <tr>
                                            <td scope="row">Date</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>

                                        </tr>
                                        <tr>
                                            <td scope="row">Item Name</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Quantity</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Supplier Name</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Mobile No.</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Address</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Description</td>
                                            <td><textarea class="form-control" rows="2" placeholder=""></textarea></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Supporting Documents</td>
                                            <td><input type="file" class="form-control">
                                                <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
                                            </td>

                                        </tr>
                                        <tr>
                                            <td scope="row">Period of Contract (in Days)</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Total Cost of Tender</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
                                        </tr>

                                        <tr>
                                            <td scope="row">Payment Type</td>
                                            <td><input class="form-control" type="text" placeholder=""
                                                    aria-label="input example"></td>
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
                                    <button type="submit" class="btn btn-primary "
                                        Style="width:50%;">Apply</button>
                                    <button type="button" class="btn btn-primary " Style="width:45%;"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
            @endsection