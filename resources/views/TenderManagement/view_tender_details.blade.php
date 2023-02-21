@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Tender Management</a> /
    <a href="{{url('tender_details')}}" style="color: #1D1D50;">Tender Details</a> /
    <a href="#" style="color: #1D1D50;">View Tender Details</a>
</nav>
<br><br>
<div class="container">
    <h4 id="hdtpa"><b> View Tender Details </b></h4>
    <br><br>

    <form>
    <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    

                    <tr>
                        <th>From Date :</th>
                        <td>{{$view_tender_details->from_date}}</td>
                    </tr>
                    <tr>
                        <th>Date To :</th>
                        <td>{{$view_tender_details->to_date}}</td>
                    </tr>
                    <tr>
                        <th>Item :</th>
                        <td>{{$view_tender_details->item}}</td>
                    </tr>
                    <tr>
                        <th>Category:</th>
                        <td>{{$view_tender_details->category}}</td>
                    </tr>
                    <tr>
                        <th>Quantity :</th>
                        <td>{{$view_tender_details->quantity}}</td>
                    </tr>
                    <tr>
                        <th>Status :</th>
                        <td>Opened</td>
                    </tr>
                  
                    <tr>
                        <th>Description:</th>
                        <td>{{$view_tender_details->description}}</td>
                    </tr>

                </tbody>
            </table>
        </div>


    </form>
        
    
    
    
    
    
    
    
    
    
    <!-- <div class="form-row">
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
        </div> -->



</div>
@endsection