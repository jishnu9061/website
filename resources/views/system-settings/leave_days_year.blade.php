@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="#" style="color: #1D1D50;">Leave Days Per Year</a>
</nav>
<br><br>
<div class="container">
<body>
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
    {{-- <h4 id="hdtpa"><b>Leave Days Per Year</b></h4> --}}
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
                <b style="font-size:18px;">Leave Days Per Year</b>
            </h4>
        </div>
        <div class="col-sm-4" style="">
        </div>
    </div>
     
   
            <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_leave_days')}}"><button class="btn btn-primary">Add Leave Days</button></a> --}}
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Leave Days</button> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"style="margin-left:10px;    --clr: #1D1D50;
            --outline: .001px solid var(--clr);color: white;background-color: #1D1D50;border-radius: 5px;">Add Leave Days</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->

<!-- <a href="{{url('add_leave_days')}}"><button class="btn btn-primary add-btn"style="width: 20%; margin-bottom:5%;">Add Leave Days</button></a>-->

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
   
<!-- <h6 style="text-align:center; ">Leave Days Per Year</h6> -->

<div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
                    <thead>
                        <tr>
                            <!-- <th class="text-center">*</th> -->
                            <th class="text-center">Year</th>
                            <th class="text-center">Annual Leave Days</th>
                            <th class="text-center">Saturday</th>
                            <th class="text-center">Perfomance</th>
                            <th class="text-center">Pays Relief</th>
                            <th class="text-center">Pl Closed</th>
                            <th class="text-center">Account Closed</th>                           
                            <th class="text-center">Action</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($leave_days as $leave)
                        <tr id="data">
                           
                            <!-- <td scope="row" class="text-center">{{ $leave->id }}</td> -->
                            <td scope="row" class="text-center">{{ $leave->year }}</td>
                            <td scope="row" class="text-center">{{ $leave->annual_leave_day }}</td>
                            <td scope="row" class="text-center">{{ $leave->satuday_working_days }}</td>
                            <td scope="row" class="text-center">{{ $leave->perfomance_duration }}</td>
                            <td scope="row" class="text-center">{{ $leave->pay_relief }}</td>
                            
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            {{-- <td  scope="row"class="text-center">
                        <a href="{{url('edit_leave_days',$leave->id )}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-1"></span
                        <a href="{{url('delete_leave_days',$leave->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td> --}}
                           <td scope="row"class="text-center">
                            <div class="btn-group">
                                <a class="btn" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="border-color:none;"> ⋮ </a>

                           <div class="dropdown-menu">
                            <a class="dropdown-item"
                                href="{{url('edit_leave_days',$leave->id )}}">Edit Leave</a>
                            <a class="dropdown-item"
                                {{-- href="{{url('delete_leave_days',$leave->id)}}">Delete Leave</a> --}}
                                <a href="#"onclick=deleteleave(this) data-id="{{ $leave->id }}"data-toggle="modal"
                                    data-target="#deleteLeave">Delete Leave</a>
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
                                    <div class="modal-header" >
                                        <h2 class="text-centre"><b>Add Leave Days</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_leave_days') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
</div>
@csrf
                <div class="row">
                <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Year</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="year" value="" name="year"style="width:100%;">
                            <option>---Select---</option>
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                         

                        </select>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Annual Leave Days</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="leaveday" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                             
                                </div>
                            </div>
                        </div>
                    </div>
              
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Saturday Working Days</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select type="text" value="" name="saturday"style="width:100%;">
                            <option>---Select---</option>
                            <option>Not a Working Day</option>
                            <option>Yes (Half Day)</option>
                            <option>Yes (Full Day)</option>
                          
                        </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Perfomance Duration</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select type="text" value="" name="performance"style="width:100%;">
                            <option>---Select---</option>
                            <option>Monthly</option>
                            <option>Quarterly</option>
                            <option>Bi Annual</option>
                            <option>Annual</option>
                        </select>
                    <div class="invalid-feedback" style="width: 100%;">
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Pay Personal Relief</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="pay" id="confirm_password" required>
                </div>
            </div>
        </div>

</div>
<br><div class="row">
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
</div>
</div>
</div>
</div>
<div class="modal fade" id="deleteLeave" style=""> <!-- delete leave days per year -->
    <div class="modal-dialog modal-lg" style="width:30%;">
        <div class="modal-content">
            <!---- Modal Header -->
            <form method="post"  id="delete_leave" action="{{url('delete_leave_days')}}" enctype="multipart/form-data"> 
                @csrf
                <input type="hidden" id="id" value="id">
                <div class="modal-header" style="padding:0rem 0rem;">
                    <div style="padding:1rem 1rem;"><h4 class="text-centre"><b>Delete <span id="delete_leave"></span></b></h4></div>
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



                      