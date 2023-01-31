@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Procurement</a> /
    <a href="{{url('supplier')}}" style="color: #1D1D50;">Supplier</a> /
    <a href="#" style="color: #1D1D50;">View Supplier</a>
</nav>
<br><br>
<style>
.btn-width {
    width: 10%;
}
tbody{

}
th{ width:30%;

}
</style>
<div>


</div>
<br>
<div class="container">
    <!-- <h3 style="text-align:center">View Pickup Reception</h3><br><br> -->
    <div>
        <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View
                    Pickup Reception</u></b></div><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
            {{-- heading --}}
            <h4 id="hdtpa"><b>Supplier  Details</b></h4>
            <br><br>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    

                    <tr>
                        <th>Vendor Name</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Product Supply</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>TAX ID</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Contact No</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>State</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PIN code</th>
                        <td></td>
                    </tr>
                    <tr style="height:200%;">
                        <th>Product Details</th>
                        <td></td>
                    </tr>
                   

                </tbody>
            </table>
        </div>
    </div>



    @endsection