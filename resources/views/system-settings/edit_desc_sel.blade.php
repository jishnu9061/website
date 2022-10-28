@extends('layouts.hmsmain')
@section('content')
<html>
    <div class="container">
   <head>
  
    </head>
    <body>
 <div>
 {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Description Selection</b></h4>
    <br><br>
            
     </div>
            
            <div class="row">
        <div class="col-md-12 ">

            <form method="post" action="{{url('update_desc_sel')}}" id="form">  
            <input type="hidden" name="id" value="{{$description_selection->id}}">
            @csrf
<div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >Description Selection Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="desselname"class="form-control"value="{{$description_selection->Description_Selection_Name}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Selection Description:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="seldes" id="" value="{{$description_selection->Selection_Description}}">
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





   