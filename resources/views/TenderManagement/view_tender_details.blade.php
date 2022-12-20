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


</div>
@endsection