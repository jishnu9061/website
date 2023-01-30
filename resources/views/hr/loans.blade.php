@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Loans</a>
</nav>
<br><br>
<div class="container">
    <div style="height:20px;">
</div>
@if(Session::has('nouser'))
   <div class="alert alert-dark" role="alert">
   {{ Session::get('nouser')}}
   </div>
@endif
@if(Session::has('loanadded'))
   <div class="alert alert-dark" role="alert">
   {{ Session::get('loanadded')}}
   </div>
@endif


{{-- heading --}}
<div class="container">
   <h4 id="hdtpa"><b>Loans</b></h4>
   <br>
   

<form method="post" action="{{url('addloan')}}">
    @csrf
                    <div class="row">
                                    <div class="col-md-3">
                                          <div class="form-group mb-3">
                                            <label>Employees Id</label>
                                            <input type="text" class="form-control" name="id" placeholder="" required>
                                          </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                           <label>Loan Amount</label>
                                           <input type="text" class="form-control" name="amount" placeholder="" required>
                                         </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group mb-3">
                                         <label>Loan Term</label>
                                         <input type="text" class="form-control" name="term" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin-top:3%">
                                        <div class="form-group mb-3">
                                         <button type="submit"  class="btn btn-primary" >Add</button>
                                        </div>
                                    </div>
                        </div>

                        
                                        
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
    

</form>
 <div class="table-responsive">
        <table class="table table-striped table-class" id= "table-id">
            <thead>
                <tr class="text-center">
                    <th>
                        Employee Id
                    </th>
                    <th>
                        Loan Amount
                    </th>
                    <th>
                        Amount Paid
                    </th>
                    <th>
                        Balance Left
                    </th>
                     <th>
                        Loan Term
                    </th>
                                         <th>
                        Deduction
                    </th>

                                         <th>
                        Status
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                
            </thead>
            <tbody>
            @foreach($loans as $loan)
                <tr class="text-center">
                    <td>{{$loan->uniqueid}}</td>
                    <td>{{$loan->totalamount}}</td>
                    <td>{{$loan->amountpaid}}</td>
                    <td>{{$loan->balanceleft}}</td>
                    <td>{{$loan->duration}}</td>
                    <td>{{$loan->deduct}}</td>
            
                    <td>{{$loan->status}}</td>
                    <form method="post" action="{{url('loandelete'.$loan->id)}}">
					@csrf
					<input type="hidden" name="delete">
                    
					<td><a type="submit" onclick="return confirm('Are you sure?');"href="{{url('loandelete'.$loan->id)}}">
                    <i  style=" color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></a></td>
					</form>
                    
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
        {{ Session::forget('nouser')}}
        {{ Session::forget('loanadded')}}
    </div>
        @endsection