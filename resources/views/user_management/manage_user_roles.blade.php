
@extends('layouts.hmsmain')
@section('content')
<html>

   <head>
<style>

          body
        {
          background-color: white;
        }

             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}
table{
    outline: 1px solid  gray;
}
 /* tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}   */
          </style>
   </head>
   <body>
   <div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Manage Roles</u></b></span></button><br>
          -->
          {{-- heading --}}
    <h4 id="hdtpa"><b>Manage Roles</b></h4>
    <br><br>
     </div>
            
    <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
    {{-- <a href="{{('add_user_roles')}}"><button class="btn btn-primary">Add New Role</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Role</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
    <!-- <a href="{{('add_user_roles')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add User Role</button></a> -->
 <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">User Roles</h3>
    <div class="table-responsive">   
    <table class="table table-bordered" id="new-item">
      
      <thead>

                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Role Name</th>
                        <th class="text-center" >Users</th>
                        <th class="text-center" >Action</th>
                   
                   
                    </tr>
</thead>
             <tbody>
            @foreach($user_role as $role)
                    <tr>
                        <td  class="text-center">{{$role->id}}</td>
                        <td  class="text-center">{{$role->role_name}}</td>
                        <td class="text-center"></td>
                        <td  scope="row"class="text-center"><!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
                        <a href="{{url('edit_user_roles',$role->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('user_role_destroy',$role->id)}}"> <i style="color:rgb(13, 1, 56);"class="fas fa-trash-alt"></i></td>

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
                                        <h2 class="text-centre"><b>Add New Role</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_user_roles') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->      
@csrf
       <div class="row">
                <div class="col-md-12 " >
                    <label >Role Name:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="role_name" value="" class="form-control">
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
</body>
</div>
</html>

  @endsection








   