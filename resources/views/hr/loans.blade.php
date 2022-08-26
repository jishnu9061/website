@extends('layouts.hmsmain')
@section('content')
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
                                             <div class="col-md-3">
                            <div class="form-group mb-3">
                            <button type="submit"  class="btn btn-block btn-secondary" style="margin-top:24px;">Add</button>
                        </div>
                                            </div>
                                        </div>
</form>
<table class="table table-bordered" style="margin-top: 40px;">
            <thead>
                <tr>
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
                <tr>
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
					<td><button type="submit" onclick="return confirm('Are you sure?')" class="fa fa-trash"></button></td>
					</form>
                    
                </tr>
            @endforeach
                
            </tbody>
        </table>
        {{ Session::forget('nouser')}}
        {{ Session::forget('loanadded')}}
    </div>
        @endsection