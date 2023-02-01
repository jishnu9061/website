@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">Billable Activities</a>
</nav>
<br><br>
<html>
    <div class="container">

</head>
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

    


    
    
        <!-- <h3 class="text-center" style="color: #070344;"><b>File List</b></h3> -->
        <div>
        {{-- heading --}}
        <div class="container">
    <h4 id="hdtpa"><b>Billable Activities</b></h4>
    <br>
           

            
       <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_billable_activities')}}"><button class="btn btn-primary">Add Activity</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Activity</button>
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
        <div class="text-center">
            <h5><b>List of Billable/Non Billable Activities</b></h5>
        </div>
            <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">No</th> -->
                            <th class="text-center">Type</th>
                            <!-- <th class="text-center">Code</th> -->
                            <th class="text-center">Activity Name</th>
                            <th class="text-center">Cost (Kshs)</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
           </tr>
                    </thead>
                    <tbody>
                    @foreach($billable_activities as $activity)
                        <tr id="data">
                            <!-- <td>{{$activity->id}}</td> -->
                            <td>{{$activity->type}}</td>
                            <td>{{$activity->activity_name}}</td>
                            <td>{{$activity->cost}}</td>
                            <td></td>
                            <td  scope="row"class="text-center">
                        <a href="{{url('edit_billable_activities',$activity->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-2"></span>
                        <a href="{{url('delete_billable_activities',$activity->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
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
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add Activity</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_billable_activities') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->   
@csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Activity Type</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="text" value="" id="" name="type"style="width:100%;">
                                <option>--Select---</option>
                                <option>Billable Activity</option>
                                <option>Non-Billable Activity</option>
                                
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                               
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Activity Name</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="name" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                            
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

   
 