
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">File Types</a>
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
    {{-- <h4 id="hdtpa"><b>File Types</b></h4> --}}
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
                <b style="font-size:18px;">File Types</b>
            </h4>
        </div>
        <div class="col-sm-4" style="">
        </div>
    </div>
    <br>
            
    
            
          
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_file_types')}}"><button class="btn btn-primary">Add New File Type</button></a>--}}
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New File Type</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add New File Type</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_file_types')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add New File Type</button></a> <br> -->

        
 
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
    
         
  <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">List Of File Types</h3>
    <!-- <div class="container"> -->
      <div class="mydiv">
      <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">File Type Name</th>
                        <th class="text-center" >Short Name</th>
                        <th class="text-center">Retainer Period</th>
                        <th class="text-center">Approvers</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center">Action</th>
                        
                    </tr>
    </thead>
    <tbody>
    @foreach($file_types as $file)
<tr>
                        <td>{{$file->id}}</td>
                        <td>{{$file->file_type}}</td>
                        <td>{{$file->short_name}}</td>
                        <td>{{$file->retainer_period}}</td>
                        <td>{{$file->approvers}}</td>
                        <td></td>
                        {{-- <td  scope="row"class="text-center">
                        <a href="{{url('edit_file_types',$file->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-1"></span>
                        <a href="{{url('view_file_types',$file->id)}}"><i  style="  color:rgb(13, 1, 56);" class="	far fa-file" aria-hidden="true"></i>
                        <span class="m-1"></span>
                        <a href="{{url('delete_file_types',$file->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                           <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                           <div class="dropdown-menu">
                            <a class="dropdown-item"
                                href="{{url('edit_file_types',$file->id)}}">Edit File Types</a>
                            <a class="dropdown-item"
                                href="{{url('view_file_types',$file->id)}}">View File Types</a>
                            <a class="dropdown-item"
                                href="{{url('delete_file_types',$file->id)}}">Delete File Types</a>
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
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add New File Type</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('add_file_types') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
       <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >File Type Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="name"value="" class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Short Names:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="sname"value="" class="form-control" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Retainer Period(Years):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number"  id="" name="year"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Approver(s):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="approver"style="width:100%;">
                                <option>Choose Approver...</option>
                                <option>Alekeen W Benson</option>
                                <option>Cedric Opara</option>
                                <option>Corrine Auma</option>
                                <option>Evans Munene</option>
                                <option>Florance Muthama</option>
                                <option>George Njoroge</option>
                                <option>Gichui Kirogo</option>
                                <option>Hillary Wamunyolo Casmir</option>
                                <option>Jackline Ogwemo</option>
                                <option>John Wachira</option>
                                <option>Jukius Mburu</option>
                                <option>Kevin Kavila</option>
                                <option>Martin Kyalo</option>
                                <option>Mike Ogutu </option>
                                <option>Owino PH Onyango</option>
                                <option>Princess Caroline</option>
                                <option>Sarah Gladys</option>
                                <option>Thagichu Nyaga</option>
                                <option>Wambua Musyoka</option>
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
      














   