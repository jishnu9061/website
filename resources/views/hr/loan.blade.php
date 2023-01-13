@extends('layouts.hmsmain')
@section('content')
<div class="container">
<h4 id="hdtpa"><b>Loan</b></h4>
<br>
<div class="row">
    <div class="col-md-6">
     <div class="mb-1">
         <label >Title</label><br>
         <div class="input-group">
             <div class="input-group-prepend"></div>
             <input type="text" class="form-control" name="title" id="title" value="">
             <div class="invalid-feedback" style="width: 100%;">
             Required Field.
             </div>
         </div>
     </div>
 </div>
<div class="col-md-6">
     <div class="mb-1">
         <label>Loan Amount</label><br>
         <div class="input-group">
             <div class="input-group-prepend"></div>
             <input type="text" class="form-control" name="loan-amount" id="loan-amount" value="">
             <div class="invalid-feedback" style="width: 100%;">
                 Required Field.
             </div>
         </div>
     </div>
  </div>
</div>

<div class="row">
    <div class="col-md-6">
     <div class="mb-1">
         <label >Start Date</label><br>
         <div class="input-group">
             <div class="input-group-prepend"></div>
             <input type="date" class="form-control" name="start-date" id="start-dat" value="">
             <div class="invalid-feedback" style="width: 100%;">
             Required Field.
             </div>
         </div>
     </div>
 </div>
<div class="col-md-6">
     <div class="mb-1">
         <label>End Date</label><br>
         <div class="input-group">
             <div class="input-group-prepend"></div>
             <input type="date" class="form-control" name="end-date" id="end-date" value="">
             <div class="invalid-feedback" style="width: 100%;">
                 Required Field.
             </div>
         </div>
     </div>
  </div>
</div>

<div class="col-md-12">
    <div class="mb-1">
    <label >Reason</label>
        <div class="input-group">
            <div class="input-group-prepend"></div>
           <textarea type="text" name="reason" class="form-control"></textarea>
            <div class="invalid-feedback" style="width: 100%;">
            Required Field.
            </div>
        </div>
    </div>
</div>

<div class="col-sm">
    <br>
    <button type="submit" class="btn btn-primary float:right;" Style="width:10%;">Save</button>
</div>






























@endsection
