@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">E-Library</a> /
    <a href="{{url('precedence')}}" style="color: #1D1D50;">Precedence Register</a> /
    <a href="#" style="color: #1D1D50;">View Precedence Register</a>
</nav>
<br><br>
<style>
.btn-width {
    width: 10%;
}

tbody {}

th {
    width: 30%;

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
            <h4 id="hdtpa"><b>View Repository</b></h4>
            <br><br>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    @foreach($viewprecedences as $lists)
                    <tr>
                        <th>File No :</th>
                        <td>{{$lists->file_no}}</td>
                    </tr>
                    <tr>
                        <th>Client Name :</th>
                        <td>{{$lists->client_name}}</td>
                    </tr>
                    <tr>
                        <th>File Handled By :</th>
                        <td>{{$lists->file_handle}}</td>
                      
                    </tr>
                    <tr>
                        <th>Date From :</th>
                        <td>{{$lists->date_from}}</td>
                       
                    </tr>
                    <tr>
                        <th>Date To :</th>
                        <td>{{$lists->date_to}}</td>
                       
                    </tr>
                    <tr>
                        <th>File Status :</th>
                        <td>{{$lists->file_status}}</td>
                       
                    </tr>

                    <tr>
                        <th>File Discription:</th>
                        <td>{{$lists->file_discription}}</td>
                        
                    </tr>
                    <tr>
                        <th>Upload File :</th>
                        <td><button class="doc-button  fa fa-download"
                                style="width:20%; padding:7px; float:right; margin-right:5px;"><span class="m-2"></span>
                                Download</button></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



    @endsection