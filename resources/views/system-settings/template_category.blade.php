
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('other_confgn')}}" style="color: #1D1D50;">Other Configurations</a> /
    <a href="#" style="color: #1D1D50;">Template Category</a>
</nav>
<br><br>
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
{{-- heading --}}
<div class="container">
{{-- <h4 id="hdtpa"><b>Template Category</b></h4> --}}
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
            <b style="font-size:18px;">Template Category</b>
        </h4>
    </div>
    <div class="col-sm-4" style="">
    </div>
</div>
<br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_template_category')}}"><button class="btn btn-primary">Add Template Category</button></a> --}}
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Template Category</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Template Category</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_template_category')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Template Category</button></a><br><br> -->

    <!-- <div class="container"> -->
    
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
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
        <thead>
                        <tr class="text-center">
                        <!-- <th class="text-center" >No</th> -->
                        <th class="text-center" >Template Category</th>
                        <th class="text-center" >Category Type</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                       
                    </tr>
     </thead>
     <tbody>
     @foreach($template_category as $category)
      <tr class="text-center">
                        <!-- <td>  {{$category->id}}</td> -->
                        <td>{{$category->Template_Category}}</td>
                        <td>{{$category->Category_Type}}</td>
                        <td></td>
                        {{-- <td  scope="row">
                        <a href="{{url('edit_template_category',$category->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2">
                        <a href="{{url('delete_template_category',$category->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                           <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                        href="{{url('edit_template_category',$category->id)}}">Edit Template Category</a>
                                    <a class="dropdown-item"
                                        {{-- href="{{url('delete_template_category',$category->id)}}">Delete Template Category</a> --}}
                                        <a href="#"onclick=deletetemplate(this) data-id="{{ $category->id }}"data-toggle="modal"
                                            data-target="#deleteTemplate">Delete Template Category</a>
                                </div>
                            </div>
                        </td>
                        @endforeach
                    </tr>
</tbody>
                   
 </table>
 <br>
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
    
    <!-- <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" >
    <option>Activate Category</option>
    <option>De-Activate Category</option>
    <option></option>
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
    </div>
    </div> -->

    
    
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Template Category</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('add_template_category') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf

<div class="row">
       

        <div class="col-md-6">
            <div class="mb-1">
                <label>Template Category:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <select type="text" value="" id="" name="temcategory"style="width:100%;">
                  
                    <option>---Select---</option>
                    <option>Business Formation</option>
                    <option>Business Operations</option>
                    <option>Business Property</option>
                    <option>Employment</option>
                    <option>Financial</option>
                    <option>Personal & Family</option>
                    <option>Real Estate</option>
                    <option>Will & Estate Planning</option>
                </select>
                    <!-- <div class="col-md-1">
        <a href="{{url('document_template_category')}}"> <i style="font-size:20px; color:rgb(13, 1, 56);" class="bi bi-plus-circle-fill"> </i></a>
    </div> -->
                   
                    <div class="invalid-feedback" style="width: 100%;">
                        Required Field.
                    </div>
                </div>
            </div>
         </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label>Category Type:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="cattype" id="" value="">
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
</div>
    </div>
    <div class="modal fade" id="deleteTemplate" style=""> <!-- delete template category -->
        <div class="modal-dialog modal-lg" style="width:30%;">
            <div class="modal-content">
                <!---- Modal Header -->
                <form method="post"  id="delete_template_category" action="{{url('delete_template_category',$category->id)}}" enctype="multipart/form-data"> 
                    @csrf
                    <input type="hidden" id="id" value="id">
                    <div class="modal-header" style="padding:0rem 0rem;">
                        <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_template"></span></b></h4></div>
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
      














   