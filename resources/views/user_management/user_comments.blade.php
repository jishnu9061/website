@extends('layouts.hmsmain')
@section('content')

<html>
<div class="container">
    
<body>
<div>
            <div>
                {{-- heading --}}
    <h4 id="hdtpa"><b>Comments</b></h4>
    <br><br>
               
     </div>
            
    <form> 
      
        <input type="text" class="form-control" id="" style="border: 1px solid rgb(13, 1, 56);" placeholder="Write your comments here...."><br><br>
   
  
                                                            <div class="col-sm">
                                                                <br>
                                                                <button type="submit" class="btn btn-primary float:right;"Style="width:10%;">Post</button>
                                                                <button type="button" class="btn btn-primary float:left"Style="width:10%;"data-dismiss="modal">Cancel</button>
                                                            </div>
     
      </form>
   </body>
   </div>
</html><br><br>
@endsection