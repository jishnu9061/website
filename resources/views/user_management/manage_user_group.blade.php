
@extends('layouts.hmsmain')
@section('content')
<html>


   
<div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage Groups </u></b></span></button><br> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Manage Groups</b></h4>
    <br><br>
    
     </div>
     
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
{{-- <a href="{{('add_new_user_grp')}}"><button class="btn btn-primary">Add New Group</button></a> --}}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New  Group</button>
<div class="tab-content" id="myTabContent">
 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;"><b>User Groups</b></h3>
    <div class="table-responsive">   
    <table class="table table-bordered" id="new-item">
      
      <thead>

                        <tr>
                        <th class="text-center" >Group ID</th>
                        <th class="text-center" >Group Code</th>
                        <th class="text-center" >Group Name</th>
                        <th class="text-center" >Group Roles</th>
                        <th class="text-center" >Group Users</th>
                        <th class="text-center" >Group Status</th>
                        <th class="text-center" >Action</th>
                      
                    </tr>
</thead>
             <tbody>

             @foreach($user_group as $group)
             
                    <tr>
                        <td class="text-center">{{$group->id}}</td>
                        <td class="text-center">{{$group->group_code}}</td>
                        <td class="text-center">{{$group->group_name}}</td>
                        <td class="text-center">{{$group->group_role}}</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_new_user_grp',$group->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('user_group_destroy',$group->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                       
                     </tr>
                     @endforeach
                     </tbody>
        
                    
                    </table><br>
</div >   
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add New Group</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_new_user_grp') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->   
@csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Group Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="group_code" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Group Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="group_name" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Default Menu</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="default_menu" id="cars"style="width: 100%;">
                                    <option>--select--</option>
                                    <option>Dashboard</option>
                                    <option>Client Management</option>
                                    <option>File Management</option>
                                    <option>Client Invoicing</option>
                                    <option>Office Administration</option>
                                    <option>Accounting and Finance</option>
                                    <option>HR & Payroll</option>
                                    <option>Tools & Addons</option>
                                    <option>System Setup</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Group Roles</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="group_role" id="cars"style="width: 100%;">
                                    <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                   
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
      














   