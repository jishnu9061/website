
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
             <!--<button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage Departments </u></b></span></button><br> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Manage Departments</b></h4>
    <br><br>
           
     </div>
            
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_user_department')}}"><button class="btn btn-primary">Add Department</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Department</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------------- MODAL ---------------------------------------------------------------------->
    <!-- <a href="{{('add_user_department')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Department</button></a> -->
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

    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">User Departments</h3>
    <div class="table-responsive">   
    <table class="table table-striped table-class" id= "table-id">
      
      <thead>

                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Department Code</th>
                        <th class="text-center" >Department Name</th>
                        <th class="text-center" >H.O.D</th>
                        <th class="text-center" >Action</th>
                      
                   
                    </tr>
</thead>
             <tbody>
            @foreach($manage_document  as $document)
                    <tr>
                        <td  class="text-center">{{$document->id}}</td>
                        <td  class="text-center">{{$document->department_code}}</td>
                        <td class="text-center">{{$document->department_name}}</td>
                        <td class="text-center">{{$document->h_o_d}}</td>
                        <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('edit_user_department',$document->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                 <a href="{{url('destroy_user_department',$document->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                  
                     </tr>
                     @endforeach
                     </tbody>
                     </table><br>
</div > 
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
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add Department</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_user_department') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->   
@csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Department Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="department_code" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Department Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="department_name" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Head of Department</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="h_o_d" id="cars">
                                <option>select</option>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Appear in Performance Report</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="perfomance_report" id="cars">
                                    <option>--select--</option>
                                    <option>Yes</option>
                                    <option>No</option>   
                                </select>
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
      














   