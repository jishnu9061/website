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
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Add G/L Account</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
            <br>

            <form method="post" action="" id="form">  
       @csrf
           
                    
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Account Type:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="type">
                                <option>---select---</option>
                                <option>Accounts Payable</option>
                                <option>Accounts Receivable</option>
                                <option>Bank</option>
                                <option>Cost of Goods Sold</option>
                                <option>Drawings(Partner Expense)</option>
                                <option>Equity</option>
                                <option>Expense</option>
                                <option>Fixed Assets</option>
                                <option>Income</option>
                                <option>Long Term Liability</option>
                                <option>Other Assets</option>
                                <option>Other Current Assets</option>
                                <option>Other Current Liability</option>
                                <option>Other Expense</option>
                                <option>Other Income</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Account Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control"  id="" name="name"value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Account Description:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" id="" name="description"value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Sub Account of(?):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="account">
                                <option>---select---</option>
                                <option></option>
                                <option></option>
                                <option></option>
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
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Account Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="category">
                                <option>---select---</option>
                                <option>Client Bank Accounts</option>
                                <option>Cash Accounts</option>
                                <option>Office Bank Accounts</option>
                                <option>Office Operations Account</option>
                                <option>Partner Drawings</option>
                                <option>Supplier Accounts</option>
                                <option>Financial Accounts</option>
                                <option>Income Account</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Default Currency:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="currency">
                                <option>---select---</option>
                                <option>KES</option>
                                <option>USD</option>
                                <option>EUR</option>
                                <option>GBP</option>
                                <option>AUD</option>
                                <option>CAD</option>
                                <option>SEK</option>
                                <option>DKK</option>
                                <option>JPY</option>
                                <option>CHF</option>
                                <option>HKD</option>
                                </select>
                              <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                         
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Budget Grouping:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="budget">
                                <option>None</option>
                                <option>Receipts</option>
                                <option>Staff Salaries and Bonuses</option>
                                <option>Insurances</option>
                                <option>Partners Benefits</option>
                                <option>Assets</option>
                                <option>Office Administration Expenses</option>
                                <option>Marketing and Branding Budget</option>
                                <option>Travel & Entertainment</option>
                                <option>Office Rent & Service Charge</option>
                                <option>Information & Technology Costs</option>
                                <option>Other Administrative Costs</option>
                                <option>Audit, Accountancy& Strategic plan Consultancy fees</option>
                                <option>Projected taxes</option>
                                <option>TeleCommunication Costs</option>
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