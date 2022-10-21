@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
    </head>
    <body>
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Add Account Pair</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>
            <form method="post" action="add_account_pairs" id="form">  
       @csrf
<div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Account Number 1:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="acnum">
                   <option>Choose an account...</option>
                   <optgroup label="INCOME">
        <option>Income from Legal Fees(1000)</option>
      
    <optgroup label="OTHER INCOME">
        <option>Other Income(1100)</option>
        <option>Other Income-Interest Earned (1103)</option>
        <option>Other Income-Miscellaneous Income(1102)</option>
        <option>Other Income-Vatable Disbursements (1101)</option>
        <option>Other Income-Loan Administration Fee(1104)</option>
    </optgroup>
    <optgroup label="Expense">
        <option>Agency Fees(2575)</option>
        <option>Annual Subscriptions(2566)</option>
        <option>Audit Fees(2511)</option>
        <option>Bad Debit Expense(2512)</option>
        <option>Bank Charges(2513)</option>
        <option>Book Keeping Costs(2553)</option>
        <option>Business Development & Marketing(2514)</option>
        <option>Business Trading Licence(2524)</option>
        <option>Client Disbursements(2506)</option>
    </optgroup>
                    
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Account Number 2:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="acnum">
                               <option>Choose an account...</option>
                                  <option></option>
                                  <option></option>
                                  <option></option>
                                  <option></option>
                                  
                                              </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
         <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
                            <br>
                            <br>
                        </div>
                    </div>
        </div>
</form>

</body>
</div>
</html>
@endsection