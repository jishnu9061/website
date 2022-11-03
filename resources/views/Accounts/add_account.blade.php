@extends('layouts.hmsmain')
@section('content')


<div class="container">

  <div>
    <div>
    {{-- heading --}}
    <h4 id="hdtpa"><b>Add G/L Account</b></h4>
    <br><br>
    <form method="post"action="{{url('')}}"id="form">  
          <input type="hidden" name="id" value="{{''}}">
       @csrf
       <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label> Account Name </label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
			                <input type="text" class="form-control" name="accounts_name" placeholder="" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label> Account Type </label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select class="form-control" name="accounts_category" id="account_cat" required>
                               <option value=""> Select</option>
                            
                                <option  > </option>
                            

                           </select>
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label> Account Category </label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select class="form-control" name="accounts_subcategory"   required>
                            <option value=""> Select</option>
                            
                            <option  >  </option>
                         
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
                            <label>  Budget Category </label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select class="form-control" name="budget_cat" id="budget_cat"  required>
                               <option value=""> Select</option>
                              
                               <option >  </option>
                           
                           </select>
                            <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>  Default Currency </label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select class="form-control" name="budget_cat" id="budget_cat"  required>
                               <option value=""> Select</option>
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
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>  Description </label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea  class="form-control" name="accounts_desc">

                            </textarea>
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
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;"onclick="history.back()">Cancel</button>
                        </div>
                    </div>
                        </div>
</div>
</div>
</body>
</div>
</html>
@endsection