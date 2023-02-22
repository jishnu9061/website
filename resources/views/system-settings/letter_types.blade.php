
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('other_confgn')}}" style="color: #1D1D50;">Other Configurations</a> /
    <a href="#" style="color: #1D1D50;">Letter Types</a>
</nav>
<br><br>
  {{-- heading --}}
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
  <div class="container">
  {{-- <h4 id="hdtpa"><b>Letter Category</b></h4> --}}
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
            <b style="font-size:18px;">Letter Category</b>
        </h4>
    </div>
    <div class="col-sm-4" style="">
    </div>
</div>
  <br>
  
   <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_letter_category')}}"><button class="btn btn-primary">Add Letter Category</button></a> --}}
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Letter Category</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Letter Category</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_letter_category')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Letter Category</button></a><br><br> -->
    
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
</div>
    <div class="table-responsive">
        <table class="table table-striped table-class" id="table-id">
                  <thead>
                        <tr class="text-center">
                        <!-- <th class="text-center" >No</th> -->
                        <th class="text-center">Letter Category</th>
                        <th class="text-center">Letter types</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                      
                    </tr>
<thead>
    <tbody>
    @foreach($letter_types as $letter)
        <tr class="text-center">
                        <!-- <td >{{$letter->id}}</td> -->
                        <td>{{$letter->letter_category}}</td>
                        <td>{{$letter->letter_type}}</td>
                        <td></td>
                        {{-- <td  scope="row">
                        <a href="{{url('edit_letter_type',$letter->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_letter_type',$letter->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                           <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                           <div class="dropdown-menu">
                            {{-- <a class="dropdown-item"
                                href="{{url('edit_letter_type',$letter->id)}}">Edit Letter</a> --}}
                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#edit_letter_types" href="#">Edit Letter Types
                                                            
                                                            </a>
                            <a class="dropdown-item"
                                {{-- href="{{url('delete_letter_type',$letter->id)}}">Delete Letter</a> --}}
                                <a href="#"onclick=deleteletter(this) data-id="{{ $letter->id }}"data-toggle="modal"
                                    data-target="#deleteLetter">Delete Letter</a>
                        </div>
                            </td>
                    </tr>

                    @endforeach              
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

 <!-- 		End of Container -->
                 --}}
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
  
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56);  ">
    </div>
    </div> -->

    

    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Letter Category</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{url('add_letter_category')}}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
@csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Letter Category:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                            <select type="text" value="" id="" name="lettercat"style="width:100%;">
                                <option>---Select---</option>
                                <option>Client</option>
                            <option>Supplier</option>
                            <option>Staff</option>
                            <option>Office</option>
                            <option>Customers</option>
                            </select>
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1">
                    <a href="{{url('document_letter_category')}}"> <i style="font-size:20px; color:rgb(13, 1, 56);" class="bi bi-plus-circle-fill"> </i></a>
                </div> -->
            </div>
            
            <div class="row">
                <div class="col-md-11">
                <label >Letter Types:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="lettertype" id="" value="">
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>
        </div>
       
                <div class="col-md-11">
                <label >Letter Type Name:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="lettertypname" id="" value="">
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
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
 {{-- Start Edit Letter Types --}}
 <div class="modal fade" id="edit_letter_types" style="">
    <!-- Edit Letter Types -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post" action="{{ url('') }}" enctype="multipart/form-data" id="addemployee">
                @csrf
                <h5><b>Edit Letter Types:-</b></h5>

                <div class="row">
                    <div class="" style="*/background-color: #d3d0ca;border-radius:5px;">
                        <div class="row">
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                   <label for="letter_category"
                                    style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Letter Category
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"></div>
                                        <input type="text" class="form-control" name="lettertype" id="" value="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                        Required Field.
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                   <label for="letter_types"
                                        style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Letter Types
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" name="lettertype" id="" value="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="" style="width: 33%">
                                <div class=""><span style="color: red">*</span>
                                        <label for="letter_type_name"
                                         style="width: 100px;margin-bottom: 0px;margin-right: 2px;font-size:10px;">Letter Type Name
                                         </label>

                                         <div class="input-group">
                                            <div class="input-group-prepend"></div>
                                            <input type="text" class="form-control" name="lettertypname" id="" value="">
                                            <div class="invalid-feedback" style="width: 100%;">
                                            Required Field.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                        
                            <div class="col-sm-4">
                            </div>
                        </div>
                        <div class="doc_contanier"style="*/background-color:orange;">
                          
                            <div class="row document_details " style="margin-bottom: 20px;">
                                {{-- Add More Document details:- javascript --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class style="width: 20%">
                </div>
                <div class="col-sm">
                 
                    <button type="submit" class="btn btn-primary float:right;"
                        style="margin-left: 61%;--clr: #1D1D50;width:19%;
                        --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Update
                    </button>
                    <button type="button" class="btn btn-primary float:left" Style="width:19%;"
                        onclick="history.back()">Cancel</button>
                </div>
        </div>
        </form>
    </div>
</div>
{{-- End edit letter types --}}
<div class="modal fade" id="deleteLetter" style=""> <!-- delete letter types -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_letter_types" action="{{url('delete_letter_type',$letter->id)}}" enctype="multipart/form-data"> 
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_letter"></span></b></h4></div>
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
      














   