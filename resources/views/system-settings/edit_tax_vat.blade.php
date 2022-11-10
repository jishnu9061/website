@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
 
    </head>
    <body>
 <div>
 {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Tax VAT</b></h4>
    <br><br>
           
     </div>
           
            <form method="post" action="{{url('update_tax_vat')}}" id="form">  
            <input type="hidden" name="id" value="{{$tax_vat->id}}">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Tax Name:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="name"value="{{$tax_vat->Tax_name}}"class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-11">
                <label >Tax Value(%):</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text"  id="" name="value"value="{{$tax_vat->Tax_value}}"class="form-control" >
                    <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="col-md-11">
                <label >Tax Ordering:</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text"  id="" name="order"value="{{$tax_vat->Tax_ordering}}"class="form-control" >
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
         <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
         <button type="button" class="btn btn-primary float:left" Style="width:45%;"onclick="history.back()">Cancel</button>
        </div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>

@endsection



