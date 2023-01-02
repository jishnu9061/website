
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
    <h4 id="hdtpa"><b>Manage Accounts</b></h4>
    <br>

 

    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
                {{-- <a href="{{('reg_new_user')}}"><button class="btn btn-primary">Add New User</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New User</button>
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
   
<div class="table-responsive">
<table  class="table table-striped table-class" id= "table-id">
  <thead>
  <tr>
                        <!-- <th class="text-center" >User Code</th> -->
                        <!-- <th class="text-center" >Name</th> -->
                        <th class="text-center" >User Name</th>
                        <!-- <th class="text-center" >User Group</th> -->
                        <th class="text-center" >E-mail</th>
                        <!-- <th class="text-center" >Telephone</th> -->
                        <th class="text-center" >Log Status</th>
                        <th class="text-center" >IP Address</th>
                        <th class="text-center" >Logout Time</th>
                        <!-- <th class="text-center" >Status</th> -->
                        <th class="text-center" >Action</th>
                       
                    </tr>
</thead>
<tbody>
@foreach ($user_list as $list)
                    <tr>
                       
                        <!-- <td class="text-center">{{$list->user_code}}</td>
                        <td class="text-center">{{$list->first_name}}</td> -->
                        <td class="text-center">{{$list->user_name}}</td>
                        <!-- <td class="text-center">{{$list->user_group}}</td> -->
                        <td class="text-center">{{$list->email_address}}</td>
                        <!-- <td class="text-center">{{$list->telephone_no}}</td> -->
                        <td class="text-center"></td>
                        <!-- <td class="text-center"></td> -->
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('user_edit',$list->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="user_comments"><i  style="  color:rgb(13, 1, 56);" class="fas fa-comment" aria-hidden="true"></i>
                        <a href="{{url('user_destroy',$list->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i>
                        {{-- <a href="user_attachments"><i  style="  color:rgb(13, 1, 56);" class="fas fa-paperclip" aria-hidden="true"></i> --}}
                        
                    </td>

                        <!-- <td class="text-center">
                      <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="{{url('user_edit',$list->id)}}" class="dropdown-item" >Edit</a>
                                <a href="user_view" class="dropdown-item" >View</a>
                                <a href="user_attachments"class="dropdown-item" >Attachment</a>
                                <a href="user_comments" class="dropdown-item" >Comments</a>
                                <a href="{{url('user_destroy',$list->id)}}" class="dropdown-item" >Delete</a>
                            
                            </div>
                        </div> 

                       </td> -->
                     
                     
                     </tr>
                     @endforeach
 <tbody>
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
    <div class="rows_count">Showing 11 to 20 of 91</div>

 <!-- 		End of Container -->


 
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                   <!---- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add New User</b></h2>
                                       
  

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('reg_new_user') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->      
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="user_code" id="" value=""required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username"> First Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="first_name" id="" value=""required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Last name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="last_name" id="" value=""required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Initials</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="initial" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="user_name" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" class="form-control" name="password" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Re-type Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password" class="form-control" name="re_type_password" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Postal Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="post_address" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Town/City</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="town_name" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Telephone No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="telephone_no" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mobile No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="mobile_no" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">E-mail Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email_address" id="" value="" required></br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Department</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="departments" id="cars"required>
                                    <option>---Select--- </option>
                                    <option>Administration</option>
                                    <option>Clerical & Related Works</option>
                                    <option>Family Law Sevices</option>
                                    <option>Finance Department</option>
                                    <option>HRM & Admin</option>
                                    <option>Human Resources</option>
                                    <option>ICT & Data Management</option>
                                    <option>Immigration Law Sevices</option>
                                    <option>Litigation</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Signature to upload</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="file" class="form-control" name="upload_signature" id="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Group</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="user_group" id="cars">
                                    <option> ---Select--- </option>
                                    <option>Administrator</option>
                                    <option>Partner</option>
                                    <option>Advocate</option>
                                    <option>Accountant</option>
                                    <option>HRM & ADMIN Assistant</option>
                                    <option>Secretary</option>
                                    <option>Pupil</option>
                                    <option>Intern</option>
                                    <option>Clerk</option>
                                    <option>Legal Assistant</option>
                                    <option>Senior Associate</option>
                                    <option>Associate Advocate</option>
                                    <option>Receptionist</option>
                                    <option>Support</option>
                                    <option>Personal Assistant</option>
                                    <option>ICT & Data Management</option>
                                    <option>Office Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">User Roles</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="user_role" id="cars"required>
                                    <option> ---Select--- </option>
                                    <option>Sr.Advocate</option>
                                    <option>Jr.Advocate</option>
                                    <option>Hr Manager</option>
                                    <option>Hr Executive</option>
                                    <option>Account</option>
                                    <option>Account Manager</option>
                                    <option>Receptionist</option>
                                    <option>Department Head</option>
                                </select>
                              
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
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
