@extends('layouts.hmsmain')
@section('content')
<div class="container">



<body>

    <div class="col-sm">



    </div>
    <div class="container">
       
        <div>
        {{-- heading --}}
    <h4 id="hdtpa"><b>Database Backup</b></h4>
    <br><br>
            

        
            </div>
          

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">File</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Download</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="data">
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                           
                        </tr>
                    </tbody>
                </table>
</div>

             
        @endsection