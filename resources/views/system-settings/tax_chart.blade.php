@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <style >
    
 </style>
   </head>
   <body>
   
    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Tax Chart</u></b></span></button><br>
 </div>
            <br>
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_tax_chart')}}"><button class="btn btn-primary">Add Tax Chart</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Tax Chart</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->

    
            <div class="table-responsive">    
<table class="table table-bordered" id="new-item">
<thead>
 <tr>
                    <th class="text-center" >No</th>
                    <th class="text-center" >Tax Brand</th>
                    <th class="text-center" >Lower Limit</th>
                    <th class="text-center">Upper Limit</th>
                    <th class="text-center" >Rate(%)</th>
                    <th class="text-center" >Status</th>
                    <th class="text-center">Action</th>
             </tr>
            </thead>
            <tbody>
  
                    @foreach($tax_chart as $chart_tax)
            
                    <tr>
                        <td>{{$chart_tax->id}}</td>
                        <td>{{$chart_tax->tax_brand}}</td>
                        <td>{{$chart_tax->lower_limit}}</td>
                        <td>{{$chart_tax->upper_limit}}</td>
                        <td>{{$chart_tax->rate}}</td>
                        <td>{{$chart_tax->status}}</td>
                        <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_tax_chart',$chart_tax->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_tax_chart',$chart_tax->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                  
                        </tr>
                        @endforeach
                    </tbody>  
                
                        </table><br>
</div>
   <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
   <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Tax Chart</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_tax_chart') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->   
@csrf
            
            <div class="row">
                               <div class="col-md-4">
                                   <div class="mb-1">
                                   <label >Tax Brand:</label>
                                       <div class="input-group">
                                           <div class="input-group-prepend"></div>
                                           <input type="text"  id="" name="taxband"value="" class="form-control">
                                           <div class="invalid-feedback" style="width: 100%;">
                                           Required Field.
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="mb-1">
                                       <label>Lower Limit:</label>
                                       <div class="input-group">
                                           <div class="input-group-prepend"></div>
                                           <input type="text"  id="" name="limit"value="" class="form-control" >
                                           <div class="invalid-feedback" style="width: 100%;">
                                               Required Field.
                                           </div>
                                       </div>
                                   </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="mb-1">
                                       <label>Upper Limit:</label>
                                       <div class="input-group">
                                           <div class="input-group-prepend"></div>
                                           <input type="text"  id="" name="ulimit"value=""class="form-control">
                                           <div class="invalid-feedback" style="width: 100%;">
                                               Required Field.
                                           </div>
                                       </div>
                                   </div>
                                </div>
                               </div>
                               <div class="row">
                               <div class="col-md-4">
                                   <div class="mb-1">
                                   <label >Rate(%):</label>
                                       <div class="input-group">
                                           <div class="input-group-prepend"></div>
                                           <input type="text"  id="" name="rate"value=""class="form-control">
                                           <div class="invalid-feedback" style="width: 100%;">
                                           Required Field.
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="mb-1">
                                       <label>Factor With Housung:</label>
                                       <div class="input-group">
                                           <div class="input-group-prepend"></div>
                                           <select type="text" value="" id="" name="withhousing">
                                               <option>Select</option>
                                            <option>Yes</option>
                                          <option>No</option>
                                        </select>
                                           <div class="invalid-feedback" style="width: 100%;">
                                               Required Field.
                                           </div>
                                       </div>
                                   </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="mb-1">
                                       <label>Factor Without Housing:</label>
                                       <div class="input-group">
                                           <div class="input-group-prepend"></div>
                                           <select type="text" value="" id="" name="wouthousing">
                                               <option>Select</option>
                                              
                               <option>Yes</option>
                               <option>No</option>
                                   </select>
                                         <div class="invalid-feedback" style="width: 100%;">
                                               Required Field.
                                           </div>
                                       </div>
                                   </div>
                                </div>
                               </div>
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
                    </body>
</div>
</html>

  @endsection
      


