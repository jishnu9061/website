@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   
<body>

  <div>
  {{-- heading --}}
    <h4 id="hdtpa"><b>Partner Revenue Share</b></h4>
    <br><br>
     
   </div>
      
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
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add New Entry</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
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
      
    


             