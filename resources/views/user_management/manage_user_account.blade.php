
@extends('layouts.hmsmain')
@section('content')
<html>
  <div class="container">
   
   <body>
 <div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage Accounts</u></b></span></button><br>
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->
             
              {{-- heading --}}
    <h4 id="hdtpa"><b>Manage Accounts</b></h4>
    <br><br>
</div>
  
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
                {{-- <a href="{{('reg_new_user')}}"><button class="btn btn-primary">Add New User</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New User</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->

    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;"><b>List Of System Users</b></h3>
    <div class="table-responsive">    
    <table class="table table-bordered" id="new-item">
      
      <thead>

                        <tr>
                        <th class="text-center" >User Code</th>
                        <th class="text-center" >Name</th>
                        <th class="text-center" >User Name</th>
                        <th class="text-center" >User Group</th>
                        <th class="text-center" >E-mail</th>
                        <th class="text-center" >Telephone</th>
                        <th class="text-center" >Log Status</th>
                        <th class="text-center" >IP Address</th>
                        <th class="text-center" >Last Logout Time</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center" >Action</th>
                       
                    </tr>
</thead>
             <tbody>
             @foreach ($user_list as $list)
                    <tr>
                       
                        <td class="text-center">{{$list->user_code}}</td>
                        <td class="text-center">{{$list->first_name}}</td>
                        <td class="text-center">{{$list->user_name}}</td>
                        <td class="text-center">{{$list->user_group}}</td>
                        <td class="text-center">{{$list->email_address}}</td>
                        <td class="text-center">{{$list->telephone_no}}</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">
                      <div class="dropdown">
                            <button style="background-color:#FFFBF4;"class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="{{url('user_edit',$list->id)}}" class="dropdown-item" >Edit</a>
                                <!-- <a href="user_view" class="dropdown-item" >View</a> -->
                                <a href="user_attachments"class="dropdown-item" >Attachment</a>
                                <a href="user_comments" class="dropdown-item" >Comments</a>
                                <a href="{{url('user_destroy',$list->id)}}" class="dropdown-item" >Delete</a>
                            
                            </div>
                        </div> 

                       </td>
                     
                     
                     </tr>
                     @endforeach
                     </tbody>
               
                    </table><br>
</div>    
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
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
                                    <option>Add Client</option>
                                    <option>Edit Client</option>
                                    <option>View Client</option>
                                    <option>Open New File</option>
                                    <option>Edit File Type</option>
                                    <option>View File Detais</option>
                                    <option>Edit File Progress</option>
                                    <option>Add Progress</option>
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
      














   