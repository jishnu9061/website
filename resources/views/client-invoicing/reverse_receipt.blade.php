@extends('layouts.hmsmain')
@section('content')

   {{-- heading --}}
   <h4 id="hdtpa"><b>Reverse Receipt</b></h4>
   <br><br>

       <br>
 
            <form method="post" action="" id="form">  
       @csrf
       <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3" >
                    <label >Receipt No:</label>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text"  id="" name="rolename"value=""class="form-control">
                            <div class="invalid-feedback" style="width: 100%;">
                            Required Field.
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
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Submit</button>
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