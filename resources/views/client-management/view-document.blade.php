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
        <div class="btn btn-primary"
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View
                    Pickup Reception</u></b></div><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

       
            <tbody>
                <tr>
                    <th>Client No</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Client Name</th>
                    <td></td>
                </tr>
                    <th>Client Document</th>
                    <td><img src="{{asset('images\files'.$view_document->file) }}" alt="file"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection