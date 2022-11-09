@extends('layouts.hmsmain')
@section('content')
<head>
   
</head>

<div class="container">

  <div>
    
    {{-- heading --}}
    <h4 id="hdtpa"><b>Input Bank Balance</b></h4>
    <br>
   
          </div>

          <form method="post" action="" id="form">
          @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bank Account</label>
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
                    <div class="col-md-4">
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
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Year</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select class="form-control" >
                                <option>---select---</option>
                                <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                 
                                </select>
                            </div>
                        </div>
                    </div>
 </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">End of Month Balance</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="year" id="confirm_password" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Debit/Credit</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select class="form-control" name="month" id="cars">
                                <option>---select---</option>
                                    <option>Debit(+ve Balance)</option>
                                    <option>Credit(-ve Balance)</option>
                                
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    required
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
                        </div>
                    </div>
                
            </form>
            

</body>
</div>
</html>
@endsection