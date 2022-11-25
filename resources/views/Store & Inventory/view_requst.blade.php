@extends('layouts.hmsmain')
@section('content')
<style>
.btn-width {
    width: 10%;
}
</style>
<div>


</div>
<br>
<div class="container">
    <!-- <h3 style="text-align:center">View Pickup Reception</h3><br><br> -->
    <div>
            <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View individual Client</u></b></div><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Item Details</b></h4>
    <br><br>
        </div>
        <div class="table-responsive"> 
    <table class="table table-hover" style="border: 1px solid">

        @csrf
        
        <tbody>
            <tr>
                <th style="width:30%">Date:</th>
                <td></td>
            </tr>
            <tr>
                <th>User Requested</th>
                <td></td>
            </tr>
            <tr>

            <th>Department</th>
            <td></td>
            </tr>
            <tr>
            <th>Category</th>
            <td></td>
            </tr>
            
            <tr>
            <th>Item Name</th>
            <td></td>
            </tr>
            
            <tr>
                <th >Quantity</th>
                <td></td>
            </tr>


        </tbody>
    </table>
    <div>
    <button type="submit" class="btn btn-primary float:right;" Style="width:10%; background-color: #4CAF50;color: white;">Approved</button>
    <button type="submit" class="btn btn-primary float:right;" Style="width:10%; background-color: #f44336;color: white;">Rejected</button>
    <button type="button" class="btn btn-primary float:left" Style="width:10%;"onclick="history.back()">Cancel</button>
</div>

</div>
</div>




@endsection