@extends('layouts.hmsmain')
@section('content')
<html>
   <div class="container">
   <head>
  
    
    </head>
    <body>
             
    {{-- heading --}}
<h4 id="hdtpa"><b>Add G/L Account</b></h4>
<br><br>


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