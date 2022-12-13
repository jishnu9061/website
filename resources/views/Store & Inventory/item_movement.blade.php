@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Item Movement Report</b></h4>
    <br>
    <div class="container" Style="width:50%; float:center;">

        <form method="post" action="" id="form">
            @csrf
            <div class="row">
                <div class="col-md-12">
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
            <a href="{{ url('view_item_movement') }}"> <button type="button" class="btn btn-primary float:right;"
                    Style="width:50%;">View</button></a>
            <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                data-dismiss="modal">Cancel</button>
        </div>
    </div>

</div>


@endsection