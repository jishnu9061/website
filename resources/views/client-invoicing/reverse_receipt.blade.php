@extends('layouts.hmsmain')
@section('content')
<div class="container">
    {{-- heading --}}
    <h4 id="hdtpa"><b>Reverse Receipt</b></h4>
    <br><br>

    <br>

    <form method="post" action="" id="form">
        @csrf

        <div class="col-lg-6 col-md-6 offset-md-3">
            <label>Receipt No:</label>

            <div class="input-group">
                <div class="input-group-prepend"></div>
                <input type="text" id="" name="rolename" value="" class="form-control">
                <div class="invalid-feedback" style="width: 100%;">
                    Required Field.
                </div>
            </div>

            <br>
            <div class="text-center">

                <div class="col-sm">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>

</div>

@endsection