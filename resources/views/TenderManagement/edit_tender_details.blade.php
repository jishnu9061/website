@extends('layouts.hmsmain')
@section('content')
    <h4 id="hdtpa"><b> Edit Tender Details </b></h4>
<br>    
<div class="card">
        <div class="card-header">
        </div>
        <div class="container">
        <form method="post" action="{{url('update_tender_details')}}">
            @csrf
            <input type="hidden" name="id" value="{{$edit_tender_details->id}}">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01"> From Date </label>
                    <input type="date" class="form-control" value="{{$edit_tender_details->from_date}}" name="from_date">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02"> Date To </label>
                    <input type="date" class="form-control" value="{{$edit_tender_details->to_date}}" name="to_date">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Item</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  aria-describedby="inputGroupPrepend2" value="{{$edit_tender_details->item}}" name="item">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Category</label>
                    <input type="text" class="form-control" value="{{$edit_tender_details->category}}" name="Category">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Quantity</label>
                    <input type="text" class="form-control" value="{{$edit_tender_details->quantity}}" name="Quantity">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Status</label>
                    <input type="text" class="form-control alert alert-success" role="alert" placeholder="Opened">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="inputAddress">Description</label>
                    <textarea class="form-control" rows="3" name="Description"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <button class="btn btn-primary" type="button" onclick="history.back()">Cancel</button>
                </div>
            </div>
            <br>
        </form>
      </div>
@endsection