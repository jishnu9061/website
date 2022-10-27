@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

{{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}
</head>
<body>
<h2 style="text-align:center; text-shadow: 2px 1px;"></h2>
  <div>
     <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Partner Revenue Share</u></b></span></button><br>
   </div>
            <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_partner_revenue')}}"><button class="btn btn-primary">Add New Entry</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Entry</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<!-- <a href="{{url('add_partner_revenue')}}"><button class="btn btn-primary add-btn"style="width: 20%; margin-bottom:5%;">Add New Entry</button></a> -->
        <h6 style="text-align:center; ">Partner Revenue Share</h6>
        <div class="table-responsive"> 
                <table class="table table-bordered" id="new-item">
                    <thead>
                        <tr>
                            
                            <th class="text-center">sl no</th>
                            <th class="text-center">Year</th>
                            <th class="text-center">Partner</th>
                            <th class="text-center">Total</th>                           
                          
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($revenue_share as $partner)
                        <tr id="data">
                        
                            <td scope="row" class="text-center">{{ $partner->id }}</td>
                            <td scope="row" class="text-center">{{ $partner->year }}</td>
                            <td scope="row" class="text-center">{{ $partner->partner }}</td>
                            <td scope="row" class="text-center">{{ $partner->total }}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
 <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add New Entry</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_partner_revenue') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
                <div class="row">
                <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Partner:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="text" value="" name="partner"style="width:100%;">
                                <option>--Select---</option>
                                <option>Princess Caroline</option>
                       
                        </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Year:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="year" value="" name="year"style="width:100%;">
                            <option>---Select---</option>
                            <option>2026</option>
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                            </select>
                               
                                <div class="invalid-feedback" style="width: 100%;">
                     
                                </div>
                            </div>
                        </div>
                    </div>
             

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Percentage:</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="percentage" id="confirm_password" required>
                </div>
            </div>
        </div>

</div>
<br>
<div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                            <br>
                            <br>
                        </div>
                    </div>
        </div>
        </form>
</div>
</div>
</div>
</div>

        </body>
        </div>
</html>
  @endsection
      
    


             