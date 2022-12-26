@extends('layouts.hmsmain')
@section('content')

    <body>


        {{-- heading --}}
        <h4 id="hdtpa"><b>Client Management</b></h4>
        <br><br>

        {{-- sub heading --}}
        <h5 id="hdbtb">Client Management Details</h5>
      


        <div class="row sm">

           



            {{-- button with drop down --}}
            <div class="col-sm-4 ">
                <div class="dropdown    "> <img class="logo_size" src="image\logo\Client list.png" alt=""><button
                        type="button" style="width:70%;" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="btn btn-primary btn_align_btn">Client
                        list</button></a>

                    <div class="dropdown-menu" style="width:70%;" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item "  href="{{ url('corporate-list') }}"> Corporate Client</a>
                        <a class="dropdown-item" href="{{ url('client_list') }}">Individual Client</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 ">
                <div class="dropdown    "> <img class="logo_size" src="image\logo\Document details.png" alt=""><button
                        type="button" style="width:70%;" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="btn btn-primary btn_align_btn">Document Details</button></a>

                        <div class="dropdown-menu" style="width:70%;" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item " href="{{url('corporate-document-details')}}"> Corporate Client Details</a>
                        <a class="dropdown-item" href="{{url('client-document')}}">Individual Client Details</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Client conversation.png" alt=""><a
                    href="{{ url('communication-list') }}"><button type="button"style="width:70%;"
                        class="btn btn-primary btn_align_btn">Client Communication</button></a></div>

            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Complaint register.png" alt=""><a
                    href="complaint-list"><button type="button"
                        style="width:70%;"class="btn btn-primary btn_align_btn">Complaint Register</button></a></div>
        </div>
        <br>


        {{-- sub heading --}}
        <h5 id="hdbtb">Client Relationship</h5>
        
            <div class="row sm">
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer registeration.png" alt=""><a
                    href="{{ url('view-registration') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">
                        Client Registration</button></a></div>
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Follow up.png" alt=""><a
                    href="{{ url('follow-up') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Client
                        Follow Up</button></a></div>
            <!-- <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Follow up report.png"
                    alt=""><a href=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Client
                        Follow Up Report</button></a>
            </div> -->
            <div class="col-sm-4 "><img class="logo_size" src="image\logo\Customer Quotation.png" alt=""><a
                    href="{{ url('Quotation') }}"><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">
                        Client Quotation</button></a></div>
        </div>
    @endsection
