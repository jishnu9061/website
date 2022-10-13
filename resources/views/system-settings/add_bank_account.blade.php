@extends('layouts.hmsmain')
@section('content')
<html>
    
<div class="container">
    <div class="py-5 text-center">
        @if(Session::has('staffregistered'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('staffregistered')}}
        </div>
        @endif
        @if(Session::has('leavevalidat'))
        <div class="alert alert-dark" role="alert">
            {{ Session::get('leavevalidat')}}
        </div>
        @endif

        <div class="col-sm">



        </div>
        <div>
            <!-- <h2>Add Event</h2>
            <hr class="mb-4">. -->
            <div>
                <body>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Bank Account Details</u></b></span></div><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12 order-md-1">

            <form method="post" action="{{url('')}}" id="form">
                @csrf
                <div class="row">
                <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Bank</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select type="text" value="" name="bank" style="width:100%;">
                            <option>---Select---</option>
                            <option>AFRICAN BANKING CORP LTD</option>
                            <option>AKIBA BANK LTD</option>
                            <option>BANK OF AFRICA LTD</option>
                            <option>BANK OF BARODA</option>
                            <option>BANK OF INDIA</option>
                            <option>BARCLAYS BANK</option>
                            <option>CENTRAL BANK OF KENYA</option>
                            <option>CFC BANK</option>
                            <option>CHASE BANK (K) LTD</option>
                            <option>CITI BANK</option>
                            <option>CO-OPERATIVE BANK</option>
                            <option>COMMERCIAL BANK OF AFRICA</option>
                            <option>CONSOLIDATED BANK</option>
                            <option>CREDIT BANK LTD</option>
                            <option>DEVELOPMENT BANK OF KENYA LIMITED</option>
                            <option>DIAMOND TRUST BANK KENYA LIMITED</option>
                            <option>DIRECT MPESA</option>
                            <option>DUBAI BANK OF KENYA</option>
                            <option>EQUITORIAL COMMERCIAL BANK LTD</option>
                            <option>EQUITY BANK</option>
                            <option>FAMILY BANK LTD</option>
                            <option>FIDELITY BANK</option>
                            <option>FINA BANK LTD</option>
                            <option>GIRO BANK BANDA STREET</option>
                            <option>GUARDIAN BANK</option>
                            <option>HABIB BANK LTD</option>
                            <option>HFCK</option>
                            <option>I & M BANK</option>
                            <option>IMPERIAL BANK</option>
                            <option>KENYA COMMERCIAL BANK</option>
                            <option>MIDDLE EAST BANK</option>
                            <option>MWITO SACCO SOCIETY LTD</option>
                            <option>NATIONAL BANK OF KENYA</option>
                            <option>NIC BANK</option>
                            <option>ORIENTAL COMMERCIAL BANK</option>
                            <option>PARAMOUNT / UNIVERSAL BANK</option>
                            <option>PAYPAL</option>
                            <option>POST BANK</option>
                            <option>PRIME BANK LTD</option>
                            <option>SIDIAN BANK</option>
                            <option>SOUTHERN CREDIT BANKING CORPORATION</option>
                            <option>STANBIC BANK KENYA LTD</option>
                            <option>STANDARD CHARTERED BANK</option>
                            <option>STIMA DT SACCO SOCIETY LIMITED</option>
                            <option>TRANS-NATIONAL BANK</option>
                            <option>VICTORIA COMMERCIAL BANK</option>
                         

                        </select></br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-1">
                            <label for="username"></label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <a href="{{url('add_bank_document')}}"> <i class="fa fa-plus"
                                        style="font-size:24px"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Branch</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="branch" id="username" required>
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Account Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="account_name" id="username" required>

                            </div>
                        </div>
                    </div>
</div>
<br>
<div class="row">

                   
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Account Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="account_no" id="username" required></br>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bank Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="bank_code" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Branch Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="branch_code" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Telephone Number is required.
                                </div>
                            </div>
                        </div>
                    </div>
              
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Swift Code</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="swift_code" id="confirm_password" required>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Mpesa No</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="mpesa_no" id="confirm_password" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Telephone Number is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Bank G/L Account</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select type="text" value="" name="bank_gl_ac"style="width:100%;">
                            <option>---Select---</option>
                            <option>8004==> Client A/C Sidian Bank</option>
                            <option>8000==>Client Account - Cooperative Bank</option>
                            <option>8008==>Client Account - Cooperative Bank (USD)</option>
                            <option>8003==>Client Account - DTB Bank</option>
                            <option>8006==>Client Account - Equity Bank</option>
                            <option>8009==>Client Account - PayPal</option>
                            <option>8001==>Office Account - Cooperative Bank</option>
                            <option>8010==>Office Account - DIRECT MPESA</option>
                            <option>8002==>Office Account - DIRECT MPESA</option>
                            <option>8010==>Office Account - Stima Sacco Society Ltd</option>
                            <option>8005==>Office Account - Sidian Bank</option>

                        </select>
                </div>
            </div>
        </div>

</div>
<br>



                <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>
                        </div>
                    </div>
                </div>

</div>
</form>
            </div>
        </div>
</body>
</div>
</html>
       
        @endsection