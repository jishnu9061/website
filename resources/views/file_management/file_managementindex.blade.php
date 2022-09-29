@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <div class="container">
<head>
  <title>Client</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="public/assets/css/logo">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>

<div class="container-fluid">
  <h3>Maintenance</h3>
  <div class="row sm">
    <div class="col-sm-4 " > <a href="{{url('file-list')}}"><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;" class="btn btn-primary btn_align_btn" >Manage Files</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('file-progress-list')}}"><img class="logo_size" src="assets\image\2.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Progress/Bringups</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('file-archive')}}"><img class="logo_size" src="assets\image\3.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Archive</button></a></div>
    </div>

    <h3>File Status Reports</h3>
    <div class="row sm">
    <div class="col-sm-4 " > <a href="{{url('file-list-progress-report')}}"><img class="logo_size" src="assets\image\4.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" > File List Progress Report</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('bringup')}}"><img class="logo_size" src="assets\image\5.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Bringup Report</button></a></div>
    <div class="col-sm-4 " > <a href="{{url('file-progress-report')}}"><img class="logo_size" src="assets\image\6.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Progress Report</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\7.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Status Report Summary</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('client-monthly-file-status')}}"><img class="logo_size" src="assets\image\8.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Monthly File Status Report</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('staff-monthly-status-report')}}"><img class="logo_size" src="assets\image\9.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Monthly Staff Status Report</button></a></div>
    </div>

    <h3>Notes</h3>
    <div class="row sm">
    <div class="col-sm-4" >  <a href="{{url('diary-management')}}"><img class="logo_size" src="assets\image\10.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Diary Management</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\11.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Workflow Management</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('template-category')}}"><img class="logo_size" src="assets\image\13.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Document Templates</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('document-manager')}}"><img class="logo_size" src="assets\image\14.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Document Manager (DMS)</button></a></div>
   
  </div>
  <h3>Instruction</h3>
    <div class="row sm">
    <div class="col-sm-4" >  <a href="{{url('file_instruction')}}"><img class="logo_size" src="assets\image\6.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >File Instructions</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('office_instructions')}}"><img class="logo_size" src="assets\image\5.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Office Instructions</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('instructions_report')}}"><img class="logo_size" src="assets\image\9.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Instructions Report</button></a></div>
    </div>
   


 <h3>File Reports</h3>
    <div class="row sm">
    <div class="col-sm-4" >  <a href="{{url('file-report')}}"><img class="logo_size" src="assets\image\10.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Files Reports</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('file-opened-report')}}"><img class="logo_size" src="assets\image\11.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Files Opened Report</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('file-closed-report')}}"><img class="logo_size" src="assets\image\13.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Files Closed Report</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('file-pending')}}"><img class="logo_size" src="assets\image\14.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Files Pending Closure</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('file-pending-approval')}}"><img class="logo_size" src="assets\image\11.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Files Pending Approval</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('instructions-past')}}"><img class="logo_size" src="assets\image\13.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Instructions Past TAT</button></a></div>
    <div class="col-sm-4" >  <a href=""><img class="logo_size" src="assets\image\14.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Unallocated Files Report</button></a></div>
   
  </div>
  <h3>ADD-Ons</h3>
    <div class="row sm">
    <div class="col-sm-4" >  <a href="{{url('Safe_management')}}"><img class="logo_size" src="assets\image\10.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Safe Management</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('Request_staff_item')}}"><img class="logo_size" src="assets\image\11.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Request Safe Item</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('Process_Request')}}"><img class="logo_size" src="assets\image\13.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Process Request</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('outgoing-letters')}}"><img class="logo_size" src="assets\image\14.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Outgoing Letters</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('incomming-letters')}}"><img class="logo_size" src="assets\image\11.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Incomming Letters</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('safe-register-report')}}"><img class="logo_size" src="assets\image\13.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Safe Register Report</button></a></div>
    <div class="col-sm-4" >  <a href="{{url('safe-item-request')}}"><img class="logo_size" src="assets\image\14.png" alt=""><button type="button" style="width:70%;"  class="btn btn-primary btn_align_btn" >Safe Item Request Report</button></a></div>
   
  </div>
  </div>

</body>
</div>
</html>
@endsection