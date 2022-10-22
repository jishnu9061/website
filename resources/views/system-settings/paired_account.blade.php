
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
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Paired Accounts</u></b></span></button><br>
   
     </div>
            <br>
            <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_account_pairs')}}"><button class="btn btn-primary">Add Account Pair</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Account Pair</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <br>
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->
        <!-- <a href="{{('add_account_pairs')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Account Pair</button></a> <br> <br> -->
<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">List Of Paired Accounts</h3>
    <!-- <div class="container"> -->
      <div class="table-responsive">
      <table class="table table-bordered" id="new-item">
                  <thead>
                        <tr>
                        <th class="text-center" >Sl No</th>
                        <th class="text-center">Account No 1</th>
                        <th class="text-center" >Account No 2</th>
                        <th class="text-center">Action</th>
                        
                    </tr>
    </thead>
    <tbody>
    @foreach($paired_account as $account_pair)
   
<tr>
                        <td>{{$account_pair->id}}</td>
                        <td>{{$account_pair->account_no1}}</td>
                        <td>{{$account_pair->account_no2}}</td>
                      
                        <td  scope="row"class="text-center">
                        <a href="{{url('edit_account_pairs',$account_pair->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <a href="{{url('delete_account_pairs',$account_pair->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
 </tr>
 @endforeach
                </tbody>
            </table></div>
     <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color:#d6ba8a">

                                    <!-- Modal Header -->
                                    <div class="modal-header" style="background-color:#d6ba8a">
                                        <h2 class="text-centre"><b>Add Account Pair</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style="background-color:white">
                                        <div class="container">
                                            <form method="post" action="{{ url('add_account_pairs') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ----------------------------------------------------------------------> 
@csrf
<div class="row">


                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Account Number 1:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" id="acnum" name="acnum1"style="width:100%;">
                   <option>----select--------</option>
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
                                <select type="text" value="" id="" name="acnum2"style="width:100%;">
                                <option>----select--------</option>
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
                    </div>
                    <div class="row">
         <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Cancel</button>
                            <br>
                            <br>
                        </div>
                    </div>
        </div>
</form>   
</div>
</div>
</div>
</div>

        </body>
    </div>
</html>
  @endsection
      














   