@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
<head>
    

   
</head>



    <body>
        <div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>View
                        Roles </u></b></span></button><br> -->
                        {{-- heading --}}
    <h4 id="hdtpa"><b>View Roles</b></h4>
    <br><br>
           
        </div>
     
       
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