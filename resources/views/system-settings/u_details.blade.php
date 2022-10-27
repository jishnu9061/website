@extends('layouts.hmsmain')
@section('content')




  
  <div class="row sm">
    <div class="col-sm-4 " > <a href="{{url('add_user')}}"><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >Add New User</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('change_password')}}"><img class="logo_size" src="assets\image\4.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" > Change Password</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\5.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Edit User Details</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Add New User Group</button></a></div>
    <div class="col-sm-4 " > <a href=""><img class="logo_size" src="assets\image\3.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Manage User Group</button></a></div>


    
 

  </div>
</div>


@endsection