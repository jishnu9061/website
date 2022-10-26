@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   
</head>



    <body>
        <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>View
                        Roles </u></b></span></button><br>
           
        </div>
     
        <br>
        <br>
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Roles per User</h3>
        <div class="table-responsive">
            <table class="table table-bordered" id="new-item">

                <thead>

                    <tr>
                        <th class="text-center">User ID</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">User Group</th>
                        <th class="text-center">User Roles</th>
                        <th class="text-center">Edit</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center"><a href="{{url('edit_view_roles')}}"><i style="color:black;" class="fa fa-edit" aria-hidden="true"></i></td>


                    </tr>
                </tbody>


            </table><br>
        </div>
    </body>
</div>
</html>

@endsection