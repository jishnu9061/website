@extends('layouts.hmsmain')
@section('content')
<html>
<div class="container">
   <head>
  
    </head>
    <body>
<div>
{{-- heading --}}
    <h4 id="hdtpa"><b>Edit Tax Chart</b></h4>
    <br><br>
           
     </div>
           
            <form method="post" action="{{url('update_tax_chart')}}" id="form">  
            <input type="hidden" name="id" value="{{$tax_chart->id}}">
            @csrf
            
 <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                        <label >Tax Brand:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="taxband"value="{{$tax_chart->tax_brand}}" class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Lower Limit:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="limit"value="{{$tax_chart->lower_limit}}" class="form-control" >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Upper Limit:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="ulimit"value="{{$tax_chart->upper_limit}}"class="form-control">
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
                        <label >Rate(%):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="rate"value="{{$tax_chart->rate}}"class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Factor With Housung:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="withhousing">
                                    <option>{{$tax_chart->factor_with_housing}}</option>
                                 <option>Yes</option>
                               <option>No</option>
                             </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="mb-1">
                            <label>Factor Without Housing:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="wouthousing">
                                    <option>{{$tax_chart->factor_without_housing}}</option>
                                   
                    <option>Yes</option>
                    <option>No</option>
                        </select>
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

</html>
  @endsection
      






  