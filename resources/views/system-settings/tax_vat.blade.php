@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
<head>
<style>
  .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination {
margin: 0;
}

.pagination li:hover{
cursor: pointer;
}

.header_wrap {
padding:30px 0;
}
.num_rows {
width: 20%;
float:left;
}
.tb_search{
width: 20%;
float:right;
}
.pagination-container {
width: 70%;
float:left;
}

.rows_count {
width: 20%;
float:right;
text-align:right;
color: #999;
}

</style>    
</head>
<body>
<div>
{{-- heading --}}
<h4 id="hdtpa"><b>Tax VAT</b></h4>
<br>
</div>
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_tax_vat')}}"><button class="btn btn-primary">Add Tax Vat</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Tax Vat</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
            <!-- <a href="{{('add_tax_vat')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Tax Vat</button></a><br><br> -->
    
            
<div class="container">
    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>
         
        </div>
      </div>
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
    </div>
    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Tax Vat List</h3>
   
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
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
                      
                        <tbody>
                        @foreach($tax_vat as $vat_tax)
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
                            @endforeach
                        </tbody>
                 </table>
</div>
<!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->
 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
 <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Tax Vat</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
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
      


