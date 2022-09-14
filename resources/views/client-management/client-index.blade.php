@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
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
  
  <div class="row sm">
    <div class="col-sm-3 " > <a href=""><img src="" alt=""> <p id="m_f"> Client Handling <br>Reception</p>  </a></div>
    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="f_s_r">Matter</p></a></div>
    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="f_a">Assign Lawyer</p>      </a></div>

    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="f_r">Client Follow Up</p></a></div>
    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="f_n"> Complaint Registration</p>  </a></div>
    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="f_i"> Client Comunication</p></a> </div>

    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="o_i_l"> Client Service Reception</p></a></div>
    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="d_t"> Client Document</p></a> </div>
    <div class="col-sm-3" > <a href="{{url('client_list')}}"><img src="" alt=""> <p id="m_d">Client List</p></a></div>

    <div class="col-sm-3" > <a href=""><img src="" alt=""> <p id="appoint"> Client Pickup Reception</p></a>  </div>
   
  </div>
</div>

</body>
</html>
@endsection
