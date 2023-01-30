@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Accounts</a> /
    <a href="#" style="color: #1D1D50;">Bank Reconciliation Report</a>
</nav>
<br><br>
<head>
   
</head>

<div class="container">

  <div>
    
    {{-- heading --}}
    <h4 id="hdtpa"><b>Reconcile Bank Entries</b></h4>
    <br>
   
          </div>

          <form method="post" action="" id="form">
          @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">G/L Account Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select class="form-control"  name="bank_account" id="cars">
                                    <option>---select---</option>
                                    <option>client account - cooperative bank</option>
                                    <option>office account - cooperative bank</option>
                                    <option>client account - DTB Bank</option>
                                    <option>office account -  DTB Bank</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Month</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select class="form-control" name="month" id="cars">
                                <option>---select---</option>
                                <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option> 
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Year</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="year"class="form-control" >
                                <option>---select---</option>
                                <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                 
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                <br>
              
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Report Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select class="form-control" name="report" id="cars">
                                <option>---select---</option>
                                    <option>Detailed</option>
                                    <option>Summary</option>
                                
                                
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
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
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"data-dismiss="modal">Reset</button>
                        </div>
                    </div>
                
            </form>
            

</body>
</div>
</html>
@endsection