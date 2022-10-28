@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
   
    </head>
    <body>

    <div>
    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Payment Item</b></h4>
    <br><br>
           
     </div>
          
            <form method="post" action="{{url('update_payment_item')}}" id="form">  
            <input type="hidden" name="id" value="{{$payment_items->id}}">
       @csrf
            <div class="row">
            <div class="col-md-4">
                        <div class="mb-1">
                            <label>Item Code:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="iname" id="" value="{{$payment_items->item_code}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Item Group:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="igroup"style="width:100%;">
                                    <option>{{$payment_items->item_group}}</option>
                                   
                    <option>01-Legal Fees</option>
                    <option>02-Vatable Disbursement(Telephone,Postage,Transport etc)</option>
                    <option>03-Client Funds</option>
                    <option>99-VAT Amount</option>
                    <option>04-Non-Vatable Disbursement(Stamp Duty,Registration Fees etc)</option>
                    
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Item Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="iname" id="" value="{{$payment_items->item_name}}">
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
                        <label >Item Comments:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="icomments" id="" value="{{$payment_items->item_comment}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Item Short Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="ishortname" id="" value="{{$payment_items->item_shortname}}">
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
      

 
    