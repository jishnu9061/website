@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:12px;">
      <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
      <a href="#" style="color: #1D1D50;">Store & Inventory-Item Movement Report</a>
</nav>
<br><br>
<div class="container">

    <h4 id="hdtpa"><b>Item Movement Report</b></h4>
    <br>
    <div class="card">

        <div class="card-body">
            <form method="post" action="" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Items</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="item" id="cars">
                                    <option>---select---</option>
                                    <option>item 1</option>
                                    <option>item 2</option>

                                </select><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">

                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <a href="{{ url('view_item_movement') }}"> <button type="button"
                                    class="btn btn-primary float:right;">View</button></a>
                            <button type="button" class="btn btn-primary float:left"
                                onclick="history.back();">Cancel</button>
                        </div>
                    </div>
            </form>

        </div>
    </div>

</div>


@endsection