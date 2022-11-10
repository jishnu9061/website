
@extends('layouts.hmsmain')
@section('content')

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

<div class="container">
{{-- heading --}}
<h4 id="hdtpa"><b>Description Selections</b></h4>
<br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_desc_sel')}}"><button class="btn btn-primary">Add Description Selection</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Description Selection</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
  <!-- <a href="{{('add_desc_sel')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Description Selection</button></a><br><br> -->

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
    <div class="table-responsive">
        <table class="table table-striped table-class" id="table-id">
                  <thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center">Description Selection Name</th>
                        <th class="text-center" >Selection Description</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                      
      </thead>
      <tbody>
      @foreach($description_selection as $description)
      
                    </tr>
                    <tr>
                        <td>{{$description->id}}</td>
                        <td>{{$description->Description_Selection_Name}}</td>
                        <td >{{$description->Selection_Description}}</td>
                        <td class="text-center" ></td>
                        
                        <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_desc_sel',$description->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_desc_sel',$description->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                    </tr>
                    @endforeach
      </tbody>
                   
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:rgb(13, 1, 56);font-size:small;background-color:#FFFBF4;"type="text" value="" >
    <option>Activate Category</option>
    <option>De-Activate Category</option>
   
</select>
<input type="button"value="Go" name="close"style="background-color:#FFFBF4;color: rgb(13, 1, 56); ">
    </div>
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
                                        <h2 class="text-centre"><b>Add Description Selection</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('add_desc_sel') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->  
    @csrf
<div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Description Selection Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="desselname"value=""class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Selection Description:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="seldes" id="" value="">
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

    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->

</div>
  @endsection
      














   