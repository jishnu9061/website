@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Cheque Cancellation</a>
</nav>
<br><br>
<div class="container">

    <h4 id="hdtpa"><b>Cheque Cancellation</b></h4>



    <br>
   
<br>
<div>
<div class="card">

<div class="card-body">
    <form method="post" action="" id="form">
        @csrf

        <div class="row">
        
        <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Cheque No</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>

               
                <div class="col-md-4">

            </div>
            </div>


          

        </div>

        <br>

        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <br>
                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    onclick="history.back()">Cancel</button>
            </div>
        </div>

</form>
</div>
</div>

</div>








@endsection