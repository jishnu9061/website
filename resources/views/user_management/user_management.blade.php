@extends('layouts.hmsmain')

@section('content')


     {{-- heading --}}
    <h4 id="hdtpa"><b>User Management</b></h4>
    <br><br>
  
   
    {{--sub heading --}}
    <h5 id="hdbtb">User Account</h5>
    <br>

  
  
  <div class="row sm">

    <div class="col-sm-4 " ><a href="{{url('manage_user_account')}}"><img class="logo_size"src="assets\image\Manage User Accounts.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Manage Accounts</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('change_user_password')}}"><img class="logo_size"src="assets\image\Change user password.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Change Password</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('manage_user_roles')}}"><img class="logo_size"src="assets\image\Manage user role.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Manage Roles</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('view_roles_per_user')}}"><img class="logo_size"src="assets\image\View roles per user.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > View Roles </button></a></div>
    <div class="col-sm-4 " > <a href="{{url('manage_user_group')}}"><img class="logo_size"src="assets\image\Manage user group.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" >Manage Groups</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('manage_user_department')}}"><img class="logo_size"src="assets\image\Manage user Department.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Manage Departments</button></a></div>
    <!-- <div class="col-sm-4" > <a href="{{url('advocates_target')}}"><img class="logo_size"src="assets\image\Advocate target.png" alt=""><button type="button" style="width:70%;"class="btn btn-primary btn_align_btn" > Advocates Targets</button></a></div> -->
    <div class="col-sm-4 " > <a href="{{url('manage_towns')}}"><img class="logo_size"src="assets\image\Towns.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" > Manage Towns</button></a></div>
    

</div>
<br>



  @endsection
      

