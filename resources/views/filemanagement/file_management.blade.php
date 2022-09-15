@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>
<body>

 <div class="container-fluid"> 



<div class="container">
  <div class="row">
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn ">Manage Files</button>
    </div>
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn">File Status Report</button>
    </div>
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn">File Archive</button>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn">File Reports</button>
    </div>
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn">File Notes</button>
    </div>
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn">File Instructions</button>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn">File Reports</button>
    </div>
    <div class="col-sm">
    <button type="button" style="width:60%; height: 60px;" class="btn btn-primary btn_p_btn">File Notes</button>
    </div>
    <div class="col-sm">
      <img src="" alt="">
    <button type="button" style="width:60%; height: 60px;"  class="btn btn-primary btn_p_btn">File Instructions</button>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-sm">
    <button type="button" style="width:70%; height: 60px;" class="btn btn-primary btn_p_btn">Outcomming/Incomming Letters</button>
    </div>
    <div class="col-sm">
    <button type="button" style="width:70%; height: 60px;" class="btn btn-primary btn_p_btn">Document Templates</button>
    </div>
    <div class="col-sm">
    <button type="button" style="width:70%; height: 60px;"  class="btn btn-primary btn_p_btn">Manage Documents</button>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-sm">
    <div class="col-sm-6"  > <a href=""> <button style="width:70%; height: 60px;"  type="button" class="btn btn-primary btn_p_btn">Appointment</button></a>  </div>
    </div>
    <div class="col-sm">
    <div class="col-sm-6" > <a href=""> <button style="width:70%; height: 60px;"  type="button" class="btn btn-primary btn_p_btn">Update</button></a> </div>
    </div>
    <div class="col-sm">
    <div class="col-sm-6" > <a href=""> <button style="width:70%; height: 60px;"  type="button" class="btn btn-primary btn_p_btn">Bring Up</button></a></div>
    </div>
  </div>
  <br>

</div>

  
  <div class="row">
    <div class="col-sm-6" > <a href=""><button type="button" style="width:60%" class="btn btn-primary btn_p_btn ">Manage Files</button></a></div>
    <div class="col-sm-6" > <a href=""><button type="button" class="btn btn-primary btn_p_btn">File Status Report</button></a></div>
    <div class="col-sm-6" > <a href=""><button type="button" class="btn btn-primary btn_p_btn">File Archive</button></a></div>
  
    <div class="col-sm-6" > <a href=""><button type="button" class="btn btn-primary btn_p_btn">File Reports</button></a></div>
    <div class="col-sm-6" > <a href=""><button type="button" class="btn btn-primary btn_p_btn">File Notes</button></a></div>
    <div class="col-sm-6" > <a href=""><button type="button" class="btn btn-primary btn_p_btn">File Instructions</button></a> </div>
  
    <div class="col-sm-6" > <a href=""><button type="button" style="width:70%; height: 60px;"  class="btn btn-primary btn_p_btn">Outcomming/Incomming Letters</button></a></div>
    <div class="col-sm-6" > <a href=""><button type="button" style="width:70%; height: 60px;" class="btn btn-primary btn_p_btn">Document Templates</button></a> </div>
    <div class="col-sm-6" > <a href=""><button type="button" style="width:70%; height: 60px;" class="btn btn-primary btn_p_btn">Manage Documents</button></a></div>

    <div class="col-sm-6" > <a href=""> <button type="button" class="btn btn-primary btn_p_btn">Appointment</button></a>  </div>
    <div class="col-sm-6" > <a href=""> <button type="button" class="btn btn-primary btn_p_btn">Update</button></a> </div>
    <div class="col-sm-6" > <a href=""> <button type="button" class="btn btn-primary btn_p_btn">Bring Up</button></a></div>

    <div class="col-sm-6" > <a href="" > <button type="button" class="btn btn-primary btn_p_btn">Client Meeting</button></a> </div>
    <div class="col-sm-6" > <a href=""> <button type="button" class="btn btn-primary btn_p_btn">Notes</button></a> </div>
    <div class="col-sm-6" > <a href=""> <button type="button" class="btn btn-primary btn_p_btn">Workflow management</button> </a> </div>
    
  </div>
</div>

</body>
</html>

@endsection