@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">
<div class="container">

    <head>
        <title>Client</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"
            href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <link rel="stylesheet" href="public/assets/css/logo">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    </head>

    <body>
        <button class="btn btn-primary"
            style="width:100%;background-color:#d6ba8a;color:white;border:1px solid gold;font-width:150%"><span
                class="font-size-lg">Client Management Details</span></button><br><br><br>
        <br>
        <button class="btn btn-primary float-left"
            style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">Client
            Management</button><br><br><br>
        <div class="container-fluid">

            <div class="row sm">

                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-7.png"
                        style="      margin-left: -4px;" alt="">
                    <div class="dropdown">
                        <button class="btn btn-primary btn_align_btn btn_align_client"
                            style=" margin-top: -25px;     margin-left: 60px;" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Client list
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{url('corporate-list')}}"> Corporate Client</a>
                            <a class="dropdown-item" href="{{url('client_list')}}">indudial Client</a>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-8.png" alt=""><a
                        href="{{url('client-pickup')}}"><button type="button"
                            class="btn btn-primary btn_align_btn">Client Pickup At Reception</button></a></div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-1.png" alt=""><a
                        href="{{url('search-list')}}"><button type="button" class="btn btn-primary btn_align_btn">Client
                            Search</button></a></div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-3.png" alt=""><a
                        href="{{url('client-service')}}"><button type="button" class="btn btn-primary btn_align_btn">
                            Client Services At Reception</button></a></div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-6.png" alt=""> <a
                        href="{{url('client-document')}}"><button type="button" class="btn btn-primary btn_align_btn">
                            Document Detials</button></a></div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-3.png" alt=""><a
                        href="{{url('communication-list')}}"><button type="button"
                            class="btn btn-primary btn_align_btn"> Client Conversations</button></a></div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-3.png" alt=""> <a
                        href="complaint-list"><button type="button" class="btn btn-primary btn_align_btn"> Complaint
                            Register</button></a></div>
            </div>
            <br>
            <button class="btn btn-primary float-left"
                style="width:30%;background-color:#1D1D50;color:white;border:1px solid gold;">Customer Relationship
            </button><br><br><br>


            <div class="row sm">
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-7.png" alt=""><a
                        href="{{url('view-registration')}}"><button type="button" class="btn btn-primary btn_align_btn">
                            Customer Registration</button></a></div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-1.png" alt=""><a
                        href="{{url('follow-up')}}"><button type="button" class="btn btn-primary btn_align_btn">Customer
                            Follow Up</button></a></div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-3.png" alt=""><a href=""><button
                            type="button" class="btn btn-primary btn_align_btn">Customer Follow Up Report</button></a>
                </div>
                <div class="col-sm-4 "><img class="logo_size" src="image\logo\icon-3.png" alt=""><a
                        href="{{url('Quotation')}}"><button type="button" class="btn btn-primary btn_align_btn">
                            Customer Quotation</button></a></div>
            </div>
        </div>

    </body>
</div>

</html>
@endsection