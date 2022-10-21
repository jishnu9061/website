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
            style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Individual Client List</u></b></div><br>
       <br>
       <!-- <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px" width ><b><u>Individual Client List</u></b></span></div><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->

        
        <br>
      
       <div id="mydatatable_filter" class="dataTables_filter">
        <label><input type="search" class="box" placeholder="search" aria-controls="mydatatable"></label>
       </div>
       <a href="{{('add_newclient')}}"><button class="btn btn-primary add-btn">Add Client</button></a>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="table-responsive"> 
            <table class="table table-bordered" id="new-item">
                <thead>
                    <tr>
                        <th class="text-center"> No</th>
                        <th class="text-center"> Client No</th>
                        <th class="text-center">Client Name</th>
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
                        @foreach( $client_list as $list_client)
                        <tr id="data">
                            <td  scope="row" class="text-center">{{$list_client->id}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list_client->client_number}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list_client->client_name}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list_client->email_address}}</td>
                            <td  scope="row" class="text-center" id="medicine_name_1"></td>
                            <td  scope="row" class="text-center" id="medicine_name_1">{{$list_client->client_type}}</td>
                            <td  scope="row"class="text-center"><a href="{{url('view-client')}}">
                            <a href="{{url('add-document')}}"><button  style="width:90%; " >Add Documents</button></a></td>
                           <td><a href="{{url('show-client',$list_client->id)}}"><i style="color:black;" class="fa fa-eye" aria-hidden="true"></i></td></a>
                            <td><a href="{{url('edit_person',$list_client->id)}}"><i  style="color:black;" class="fa fa-edit" aria-hidden="true"></i></td>
                            <td><a href="{{url('delete-client',$list_client->id)}}"><i style="color:black;" class="fa fa-trash" aria-hidden="true"></i></td>
                            
                        </tr>
                        @endforeach
                </tbody>
            </table>
</div>
</div>

           

 <!-- The Modal -->
 

      <!-- Modal body -->
      


<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


@endsection