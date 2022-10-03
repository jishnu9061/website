@extends('layouts.hmsmain')
@section('content')
<html>
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style>
       
         table{
              
                border:hidden;
                font-size:medium;
                color:black;
            
            }
           th,td,tr{
            border:hidden;
            color:rgb(13, 1, 56);

           }
           
        </style>
    </head>
    <body>
    <!-- <h2 >Add Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Bank Account Details</h2>
    <hr class="mb-4">.
    <form>
    <table class="table">
    <tbody>
                        <tr>
                            <td style="width:30%"> Bank:</td>
                            <td><select type="text" value="" name="bank"style="width:50%;color:rgb(13, 1, 56);background-color:white;">
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
                         

                        </select><a href="{{('add_bank_document')}}">  <i style="color:rgb(13, 1, 56);"class="bi bi-plus-circle-fill"> </i></a></td>
                           
                        </tr>
                        <tr>
                            <td style="width:30%">Branch:</td>
                           <td><input type="text"  id="" name="branch"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td> 
                          
                        </tr>
                        <tr>
                            <td style="width:30%">Account Name:</td>
                            <td><input type="text"  id="" name="date"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Account Number:</td>
                            <td><input type="number"  id="" name="number"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Bank Code:</td>
                            <td><input type="number"  id="" name="code"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Branch Code:</td>
                            <td><input type="number"  id="" name="bcode"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Swift Code:</td>
                            <td><input type="text"  id="" name="date"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Mpesa No:</td>
                            <td><input type="text"  id="" name="date"value=""style="width:50%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        
                        <tr>
                            <td style="width:30%"> Bank G/L Account:</td>
                            <td><select type="text" value="" name="type"style="width:50%;color:rgb(13, 1, 56);background-color:white;">
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
        </tr>

        </tbody>
              </table>
            <div class="class"style="text-align:center;">
            <a href="something"><input type="submit"value="Save" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>


    <form>
</body>
</html>
@endsection