@extends('layouts.hmsmain')
@section('content')

    <body>


        {{-- heading --}}
        <h4 id="hdtpa"><b>Client Management Details</b></h4>
        <br><br>

        {{-- sub heading --}}
        <h5 id="hdbtb">Client
            Management</h5>
        <br>


        <div class="row sm">

            {{-- <div class="col-sm-4 "><img class="logo_size" src="image\logo\Client list.png" alt="">
                <div class="dropdown">

                    <button class="btn btn-primary btn_align_btn btn_align_client"
                        style=" width:70%; margin-top: -25px; margin-left: 60px    " type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Client list
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ url('corporate-list') }}"> Corporate Client</a>
                        <a class="dropdown-item" href="{{ url('client_list') }}">Individual Client</a>
                    </div>
                </div>
            </div> --}}



            {{-- button with drop down --}}
            <div class="col-sm-4 ">
                <div class="dropdown    "> <img class="logo_size" src="image\logo\Client list.png" alt=""><button
                        type="button" style="width:70%;" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="btn btn-primary btn_align_btn">Client
                        list</button></a>

                    <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item " href="{{ url('corporate-list') }}"> Corporate Client</a>
                        <a class="dropdown-item" href="{{ url('client_list') }}">Individual Client</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Client Pickup At Reception.png" alt=""><a
                    href="{{ url('client-pickup') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Client Pickup At Reception</button></a></div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Client search.png" alt=""><a
                    href="{{ url('search-list') }}"><button
                        type="button"style="width:70%;"class="btn btn-primary btn_align_btn">Client
                        Search</button></a></div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\client sevices at reception.png" alt=""><a
                    href="{{ url('client-service') }}"><button type="button"style="width:70%;"
                        class="btn btn-primary btn_align_btn">
                        Client Services At Reception</button></a></div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Document details.png" alt=""><a
                    href="{{ url('client-document') }}"><button
                        type="button"style="width:70%;"class="btn btn-primary btn_align_btn">Document Details</button></a>
            </div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Client conversation.png" alt=""><a
                    href="{{ url('communication-list') }}"><button type="button"style="width:70%;"
                        class="btn btn-primary btn_align_btn">Client Conversations</button></a></div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Complaint register.png" alt=""><a
                    href="complaint-list"><button type="button"
                        style="width:70%;"class="btn btn-primary btn_align_btn">Complaint Register</button></a></div>
        </div>
        <br>


        {{-- sub heading --}}
        <h5 id="hdbtb">Customer Relationship</h5>
        <br>
            <div class="row sm">
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer registeration.png" alt=""><a
                    href="{{ url('view-registration') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">
                        Customer Registration</button></a></div>
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Follow up.png" alt=""><a
                    href="{{ url('follow-up') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Customer
                        Follow Up</button></a></div>
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Follow up report.png"
                    alt=""><a href=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Customer
                        Follow Up Report</button></a>
            </div>
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Quotation.png" alt=""><a
                    href="{{ url('Quotation') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">
                        Customer Quotation</button></a></div>
        </div>
    @endsection
