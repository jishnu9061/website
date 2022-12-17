@extends('layouts.hmsmain')
@section('content')
<div class="container">
<div>
          
    <h4 id="hdtpa"><b>Edit Role</b></h4>
    <br><br>
     </div>
           
 
            <form method="post" action="{{url('update_role')}}" id="form">  
       @csrf
       <div class="row">
       <input type="hidden" name="id" value="{{$edit_role->id}}">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Role Name:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="role_name" value="{{$edit_role->role_name}}" class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
                        </div>
                    </div>
                </div>
              
            </div>
                  
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
    </form>


</body>
</div>
</html>
@endsection