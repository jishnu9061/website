@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5">



        {{-- heading --}}
        <h4 id="hdtpa"><b>Edit Document</b></h4>
        <br><br>



        <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="" id="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Document Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="" id="cars">
                                        <option value="volvo">performa fee note</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Document No</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="" id="age" value="" placeholder=""
                                        min="0" max="99">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Issue Date</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="" id="age" value="" placeholder=""
                                        min="0" max="99">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Client</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="" id="cars">
                                        <option value="volvo">choose a client</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">File</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="currency" id="cars">
                                        <option value="volvo">choose a file</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Send Document To</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="" id="cars">
                                        <option value="volvo"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr class="mb-4">.
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-1">
                                <label for="username">Billing Information</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="form7Example7" rows="4"></textarea>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Postal Address is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr class="mb-4">.
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username"> Date Due</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="" id="age" value="" placeholder=""
                                        min="0" max="99">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Currency</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="currency" id="cars">
                                        <option value="volvo">KES</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Exchange Rate</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="" id="age" value="" placeholder=""
                                        min="0" max="99">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">User Assigned</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="" id="cars">
                                        <option value="volvo"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Partner To Approve</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="currency" id="cars">
                                        <option value="volvo"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Bank Account</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="" id="cars">
                                        <option value="volvo">Pay by Cheque</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="username">Mode of Devlivery</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="" id="cars">
                                        <option value="volvo"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr class="mb-4">.
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="username">To the Attention To</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="" id="age" value="" placeholder=""
                                        min="0" max="99">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="username">Subject/Title</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="" id="age" value="" placeholder=""
                                        min="0" max="99">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr class="md-4">
                    <!-- <h2 style="text-align:center;"> Quotation Items</h2> -->
                    <div>
                        <h3 style="text-align:center"><b>Document Items</b></h3>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-1">
                                <label for="username">Item Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="type" id="cars">
                                        <option value="volvo"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-1">
                                <label for="username">Item Category</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="type" id="cars">
                                        <option value="volvo"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-1">
                                <label for="username">Amount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <input type="text" class="form-control" name="" id="age" value="" placeholder=""
                                        min="0" max="99">
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Age is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-1">
                                <label for="username">V.A.T</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <select name="vat" id="cars">
                                        <option value="volvo"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="username">Particulers Of Service Rendered</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Postal Address is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <a href=""><button class="btn btn-primary ">New
                                Item</button></a>
                        <a href=""><button class="btn btn-primary ">Delete Item</button></a>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-1">
                                <label for="username">Notes</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="form7Example7" rows="3"></textarea>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Postal Address is required.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-sm">

                            </div>
                            <div class="col-sm">
                                <button type="submit" class="btn btn-primary submit_btn_btn">Submit</button>
                                <a href="{{route('client-index')}}" type="button" class="btn btn-primary "
                                    style="width:30%; margin-top:30px; padding:8px;">Back</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                    <div class="col-sm">

                        <div class="row">
                            <div class="col-sm">

                            </div>
                            <div class="col-sm">

                            </div>
                            <div class="col-sm">
                                <br>
                                <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Save
                                    Document</button>
                                <button type="button" class="btn btn-primary float:left"
                                    Style="width:45%;">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection