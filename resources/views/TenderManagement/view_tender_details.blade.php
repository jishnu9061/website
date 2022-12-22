@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> View Tender Details </b></h4>
    <br><br>

    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault01"> From Date </label>
                <input type="Text" class="form-control" value="{{$view_tender_details->from_date}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02"> Date To </label>
                <input type="text" class="form-control" value="{{$view_tender_details->to_date}}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Item</label>
                <div class="input-group">
                    <input type="text" class="form-control"  aria-describedby="inputGroupPrepend2" value="{{$view_tender_details->item}}">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Category</label>
                <input type="text" class="form-control" value="{{$view_tender_details->category}}">
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault04">Quantity</label>
                <input type="text" class="form-control"value="{{$view_tender_details->quantity}}" >
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault05">Status</label>
                <input type="text" class="form-control alert alert-success" role="alert" placeholder="Opened">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="inputAddress">Description</label>
                <textarea class="form-control" rows="3" ></textarea>
            </div>
        </div>

    </form>


</div>
@endsection