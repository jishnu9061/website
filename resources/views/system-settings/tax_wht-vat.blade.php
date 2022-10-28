@extends('layouts.hmsmain')
@section('content')
<html>

      <style >
                body
        {
          background-color: white;
        }

             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}
table{
    outline: 1px solid  gray ;
}
 </style>
   </head>
   <body>

    {{-- heading --}}
<h4 id="hdtpa"><b>Tax VAT-WHT</b></h4>
<br><br>
   

            <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_tax_wht-vat')}}"><button class="btn btn-primary">Add Tax VAT-WHT</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Tax VAT-WHT</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------------- MODAL ---------------------------------------------------------------------->
            <!-- <a href="{{('add_tax_wht-vat')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Tax VAT-WHT</button></a><br><br> -->
    
            <div class="table-responsive">    
            <table class="table table-bordered" id="new-item">
            <thead>
                          
                            <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center" >Tax Name</th>
                                <th class="text-center" >Tax Value(%)</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        @foreach($tax_wht_vat as $wht_vat_tax)
                        <tbody>
                            <tr>
                                <td>{{$wht_vat_tax->id}}</td>
                                <td> {{$wht_vat_tax->Tax_name}}</td>
                                <td>{{$wht_vat_tax->Tax_value}}</td>
                                <td>{{$wht_vat_tax->Status}}</td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('edit_tax_wht-vat',$wht_vat_tax->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                 <a href="{{url('delete_tax_wht-vat',$wht_vat_tax->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                            </tr>
                        </tbody>
@endforeach
                     
                        </table><br>
</div>
     <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
     <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Tax VAT-WHT</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('add_tax_wht-vat') }}"
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
                                <input type="text"  id="" name="name"value=""class="form-control" >
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
                    <input type="text"  id="" name="value"value="" class="form-control" >
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
      


