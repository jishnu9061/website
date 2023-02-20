@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">Transport Zones</a>
</nav>
<br><br>
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

  
  {{-- heading --}}
  <div class="container">
    {{-- <h4 id="hdtpa"><b>Transport Zones</b></h4> --}}
    <div class="row" style="height:50px;">
        <div class="col-sm-4" style="padding-top:5px;">
        </div>
        <div class="col-sm-4" style="">
            <h4
                style="border: 0.5px solid #f1d9b0;
                border-radius: 25px;
                background-color: #f1d9b0;
                padding: 2%;
                width: 100%;
                height:90%;
                text-align:center;
                box-shadow: inset 0 0 3px #d3d0ca;
                opacity: .9;">
                <b style="font-size:18px;">Transport Zones</b>
            </h4>
        </div>
        <div class="col-sm-4" style="">
        </div>
    </div>
    <br>
    
   

           
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_transport_zone')}}"><button class="btn btn-primary">Add Transport Zone</button></a> --}}
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" 
                >Add Transport Zone</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Transport Zone</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->


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
               
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">List of Transport Zones</h3>

<div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">No</th> -->
                            <th class="text-center">Zone Name</th>
                            <th class="text-center">Zone Area</th>
                            <th class="text-center">Cost(Kshs)</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
</tr>
                    </thead>
                    <tbody>
                    @foreach($transport_zone as $detail)
                        <tr class="text-center" id="data">
                            <!-- <td>{{$detail->id }}</td> -->
                            <td>{{$detail->zone_name }}</td>
                            <td>{{$detail->zone_areas }}</td>
                            <td>{{$detail->cost }}</td>
                            <td></td>
                            {{-- <td>
                        <a href="{{url('edit_transport_zone',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_transport_zone',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                           <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                           <div class="dropdown-menu">
                            <a class="dropdown-item"
                                href="{{url('edit_transport_zone',$detail->id)}}">Edit Transport Zone</a>
                            <a class="dropdown-item"
                                {{-- href="{{url('delete_transport_zone',$detail->id)}}">Delete Transport Zone</a> --}}
                                <a href="#"onclick=deletetransport(this) data-id="{{ $detail->id }}"data-toggle="modal"
                                    data-target="#deleteTransport">Delete Transport Zone</a>
                        </div>
                            </td>
</tr>
@endforeach
                    </tbody>
                   
                </table>
</div>
{{-- <!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container --> --}}
 <!--		Start Pagination -->
 <div class='pagination-container'>
     <nav>
         <ul class="pagination">
             <li data-page="prev">
                 <span>
                     < <span class="sr-only">(current)
                 </span></span>
             </li>
             <li data-page="next" id="prev">
                 <span> > <span class="sr-only">(current)</span></span>
             </li>
         </ul>
     </nav>
 </div>
 <div class="rows_count"></div>
</div>
 <!-- 		End of Container -->
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add Transport Zone</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_transport_zone') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Zone Name</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="zone_name" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                     
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Zone Areas</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="zone_areas" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Cost(Kshs)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="cost" id="age">
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
                        </div>
                    </div>
                </div>
                </form>
</div>
</div>
</div>
</div>
<div class="modal fade" id="deleteTransport" style=""> <!-- delete transport zones -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_transport_zones" action="{{url('delete_transport_zone')}}" enctype="multipart/form-data"> 
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_transport"></span></b></h4></div>
                </div>
                <!-- Modal body -->
                <div class="modal-body" >
                    <div class="container">
                        <div class="row"><h6><b><span>Are you sure?</span></b></h6> 
                        </div>
                            <div class="row">
                                <div class="" style="width: 30%;">
                                </div>
                                <div lass="" style="width: 0%"></div>
                                <div class="col-sm" style="padding-right: 0px;width: 70%;">
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;background-color:#DD4132;">Yes</button>
                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
        </body>
        </div>
</html>

@endsection