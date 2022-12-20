@extends('layouts.hmsmain')
@section('content')
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
            <h4 id="hdtpa"><b>File Description</b></h4>
            <br><br>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    

                    <tr>
                        <th>Date Of Upload :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Uploaded By :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Subject :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Book/File Name :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Auther :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Publisher :</th>
                        <td></td>
                    </tr>
                  
                    <tr style="height:200%;">
                        <th>Discription:</th>
                        <td ></td>
                    </tr>
                    <tr>
                        <th>E-file:</th>
                        <td><button class="doc-button  fa fa-download" style="width:20%; padding:7px; float:right; margin-right:5px;"><span class="m-2"></span> Download</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>



    @endsection