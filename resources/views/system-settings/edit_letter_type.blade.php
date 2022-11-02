@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
  
    </head>
    <body>
  
    <div>
    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Letter Category</b></h4>
    <br><br>
           
     </div>
            
            <form method="post"action="{{url('update_letter_type')}}"id="form">  
          <input type="hidden" name="id" value="{{$letter_types->id}}">
       
            @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label > Letter Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" name="lettercat">
                                <option> {{$letter_types->letter_category}}</option>
                               
                            <option>Client</option>
                            <option>Supplier</option>
                            <option>Staff</option>
                            <option>Office</option>
                            <option>Customers</option>
                         

                        </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Letter Types:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="lettertype" id="" value="{{$letter_types->letter_type}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Letter Type Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="lettertypname" id="" value="{{$letter_types->letter_type_name}}">
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









   