@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
   <style>
  .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination {
margin: 0;
}

.pagination li:hover{
cursor: pointer;
}

.header_wrap {
padding:30px 0;
}
.num_rows {
width: 20%;
float:left;
}
.tb_search{
width: 20%;
float:right;
}
.pagination-container {
width: 70%;
float:left;
}

.rows_count {
width: 20%;
float:right;
text-align:right;
color: #999;
}
</style>  
   </head>
   <body>
   
    {{-- heading --}}
    <div class="container">
    <h4 id="hdtpa"><b>Bank Account Details</b></h4>
    <br>
    
 
        
        <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
           
{{-- <a href="{{('add_bank_account')}}"><button class="btn btn-primary">Add New Account</button></a> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Account</button>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->

    <div class="header_wrap">
      <div class="num_rows">
        <div class="form-group"> 	<!--		Show Numbers Of Rows 		-->
         <select class  ="form-control" aria-label="Page navigation example" name="state" id="maxRows">

          <option value="5">5</option>
          <option value="10">10</option>
           <option value="15">15</option>
           <option value="20">20</option>
           <option value="50">50</option>
           <option value="70">70</option>
           <option value="100">100</option>
          <option value="5000">Show ALL Rows</option>
          </select>
         
        </div>
      </div>
      <div class="tb_search">
<input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
      </div>
   
    <!-- <h6 style="text-align:center; ">Bank Account Details</h6> -->
    <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
	     <thead>
                        <tr>
                            <!-- <th class="text-center">No</th> -->
                            <th class="text-center">Bank</th>
                            <th class="text-center">Branch</th>
                            <th class="text-center">Account Name</th>
                            <th class="text-center">Account Number</th>
                            <th class="text-center">Bank Code</th>
                            <th class="text-center">Branch Code</th>
                            <th class="text-center">Swift Code</th>
                            <th class="text-center">Mpesa Code</th>
                            <th class="text-center">Bank G/L Account</th>
                            <th class="text-center">Action</th>
                     </tr>
                    </thead>

                    <tbody>
@foreach($bank_details as $detail)
                        <tr id="data">
                            <!-- <td scope="row" class="text-center">{{ $detail->id }}</td> -->
                            <td scope="row" class="text-center">{{ $detail->bank }}</td>
                            <td scope="row" class="text-center">{{ $detail->branch }}</td>
                            <td scope="row" class="text-center">{{ $detail->account_name }}</td>
                            <td scope="row" class="text-center">{{ $detail->account_number }}</td>
                            <td scope="row" class="text-center">{{ $detail->bank_code }}</td>
                            <td scope="row" class="text-center">{{ $detail->branch_code }}</td>
                            <td scope="row" class="text-center">{{ $detail->swift_code }}</td>
                            <td scope="row" class="text-center">{{ $detail->mpesa_code }}</td>
                            <td scope="row" class="text-center">{{ $detail->bank_gl_ac }}</td>
                            <td  scope="row"class="text-center">
                        <a href="{{url('edit_bank_account',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                        <span class="m-1"></span>
                        <a href="{{url('delete_bank_account',$detail->id)}}"><i  style="  color:rgb(13, 1, 56);" class="fas fa-trash-alt" aria-hidden="true"></i>
                           </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
</div>
<!--		Start Pagination -->
<div class='pagination-container'>
      <nav>
        <ul class="pagination">
         <!--	Here the JS Function Will Add the Rows -->
        </ul>
      </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 100</div>

 <!-- 		End of Container -->
 

 <!---------------------------------------------- MODAL ---------------------------------------------------------------------->
 <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" >

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="text-centre"><b>Add New Account</b></h2>

                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" >
                                        <div class="container">
                                            <form method="post" action="{{ url('add_bank_account') }}"
                                                enctype="multipart/form-data"> 
<!---------------------------------------------- MODAL ---------------------------------------------------------------------->    
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
      

