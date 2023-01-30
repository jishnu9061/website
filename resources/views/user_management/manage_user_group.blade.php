
@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
      <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
      <a href="#" style="color: #1D1D50;">User Management</a> /
      <a href="#" style="color: #1D1D50;">Manage User Groups</a>
</nav>
<br><br>
<style>
 
</style>  
    


<div class="container"> 

   {{-- heading --}}
  <h4 id="hdtpa"><b>Manage Groups</b></h4>
  <br>

  
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
{{-- <a href="{{('add_new_user_grp')}}"><button class="btn btn-primary">Add New Group</button></a> --}}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New  Group</button>
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
    <table class="table table-striped table-class" id= "table-id">
      
      <thead>

                        <tr>
                        <!-- <th class="text-center" >Group ID</th> -->
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
                        <!-- <td class="text-center">{{$group->id}}</td> -->
                        <td class="text-center">{{$group->group_code}}</td>
                        <td class="text-center">{{$group->group_name}}</td>
                        <td class="text-center">{{$group->group_role}}</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_new_user_grp',$group->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-1"></span>
                        <a href="{{url('user_group_destroy',$group->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>
                       
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
                                    <option>select</option>
                                    <option>Role 1</option>
                                    <option>Role 2</option>
                                    <option>Role 3</option>
                                    <option>Role 4</option>
                                   
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
      














   