@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>
    <div class="container">
        <button class="btn btn-primary"
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Individual Client List</u></b></button><br>
       <br>
      
       <div id="mydatatable_filter" class="dataTables_filter">
        <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
       </div>
       <a href="{{('add_newclient')}}"><button class="btn btn-primary add-btn">Add Client</button></a>
       
       
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <table class="table table-bordered" id="new-item">
                <thead>
                    <tr>
                        <th class="text-center"> No</th>
                        <th class="text-center"> Client No</th>
                        <th class="text-center">Client</th>
                        <th class="text-center">Email Address</th>
                        <th class="text-center">Services Offered</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Add Documents</th>
                        <th class="text-center">VIew</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                        <tr id="data">
                            <td  scope="row" class="text-center"></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"></td>
                            <td  scope="row"class="text-center"><a href="{{url('view-client')}}">
                            <a href="{{url('add-document')}}"><button class="btn btn-primary document_btn" style="width:90%; margin-top:-8px;" >Add Documents</button></a></td>
                           <td><a href="{{url('view-client')}}"><i style="color:black;" class="fa fa-eye" aria-hidden="true"></i></td></a>
                            <td><a href="{{url('edit_person')}}"><i  style="color:black;" class="fa fa-edit" aria-hidden="true"></i></td>
                            <td><a href=""><i style="color:black;" class="fa fa-trash" aria-hidden="true"></i></td>
                            
                        </tr>
                </tbody>
            </table>
           

 <!-- The Modal -->
 

      <!-- Modal body -->
      


<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


@endsection