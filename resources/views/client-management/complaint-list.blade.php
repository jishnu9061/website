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
        <div class="btn btn-primary"
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Complaint Register</u></b></div><br>
            <!-- <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Complaint Register</u></b></span></div><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        </div> -->

            <br>
      
       <div id="mydatatable_filter" class="dataTables_filter">
        <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
       </div>
       <a href="{{('create-Complaint')}}"><button class="btn btn-primary add-btn" Style="width:20%">Add New Complaint</button></a>
       
       
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="table-responsive"> 
            <table class="table table-bordered" id="new-item">
                <thead>
                    <tr>
                        <th class="text-center"> No</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Client</th>
                        <th class="text-center">Files</th>
                        <th class="text-center">Customer Institution</th>
                        <th class="text-center">Contact</th>
                        <th class="text-center">Complaint Description</th>
                        <th class="text-center">VIew</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach( $complaint_list as  $list)
                        <tr id="data">
                            <td  scope="row" class="text-center">{{$list->id}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list->date}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list->client_type}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list->files}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list->customer_name}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list->telephone_no}}</td>
                            <td  scope="row"class="text-center">{{$list->complaint_description}}</td>
                           <td><a href="{{url('view-Complaint',$list->id)}}"><i style="color:black;" class="fa fa-eye" aria-hidden="true"></i></td></a>
                            <td><a href="{{url('edit_complaint',$list->id)}}"><i  style="color:black;" class="fa fa-edit" aria-hidden="true"></i></td>
                            <td><a href="{{url('delete-Complaint',$list->id)}}"><i style="color:black;" class="fa fa-trash" aria-hidden="true"></i></td>
                            
                        </tr>
                        @endforeach
                </tbody>
            </table>
</div>

 <!-- The Modal -->
 

      <!-- Modal body -->
      


<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


@endsection