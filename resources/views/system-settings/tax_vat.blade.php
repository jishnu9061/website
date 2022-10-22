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
    
   </head>
   <body>
   
    <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Tax VAT</u></b></span></button><br>
         
     </div>
            <br>
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_tax_vat')}}"><button class="btn btn-primary">Add Tax Vat</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Tax Vat</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
            <!-- <a href="{{('add_tax_vat')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Tax Vat</button></a><br><br> -->
    
            <div class="table-responsive">    
            <table class="table table-bordered" id="new-item">
            <thead>
                         
                            <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center" >Tax Name</th>
                                <th class="text-center">Tax Value</th>
                                <th class="text-center" >Tax Ordering</th>
                                <th class="text-center" >Status</th>
                                <th class="text-center" >Action</th>
                            </tr>
                        </thead>
                        @foreach($tax_vat as $vat_tax)
                        <tbody>
                            <tr>
                                <td >{{$vat_tax->id}}</td>
                                <td>{{$vat_tax->Tax_name}}</td>
                                <td>{{$vat_tax->Tax_value}}</td>
                                <td>{{$vat_tax->Tax_ordering}}</td>
                                <td>{{$vat_tax->Status}}</td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('edit_tax_vat',$vat_tax->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                 <a href="{{url('delete_tax_vat',$vat_tax->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                            </tr>
                        </tbody>

@endforeach
                     
                        </table><br>
</div>
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
 <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Tax Vat</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_tax_vat') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Tax Name:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="name"value=""class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-11">
                <label >Tax Value(%):</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="number"  id="" name="value"value=""class="form-control" >
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="col-md-11">
                <label >Tax Ordering:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text"  id="" name="order"value=""class="form-control" >
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
      

