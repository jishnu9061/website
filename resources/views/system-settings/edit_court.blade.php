@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('other_confgn')}}" style="color: #1D1D50;">Other Configurations</a> /
    <a href="{{url('courts')}}" style="color: #1D1D50;">Courts</a> /
    <a href="#" style="color: #1D1D50;">Edit Court</a>
</nav>
<br><br>
<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Court</b></h4>
    <br><br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_court')}}" id="form">
                <input type="hidden" name="id" value="{{$court->id}}">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Date:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="Date" class="form-control" id="" name="date" value="{{$court->date}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Court Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="courtcat">
                                    <option> {{$court->court_category}}</option>

                                    <option>Supreme Court</option>
                                    <option>Court Of Appeal</option>
                                    <option>High Court</option>
                                    <option>Industrial Court</option>
                                    <option>Magistrate Court</option>
                                    <option>Islamic Court</option>
                                    <option>Labour Court</option>
                                    <option>East Africa Court</option>
                                    <option>Small Claim Court</option>
                                    <option>Others</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Court Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="courtname" class="form-control"
                                    value=" {{$court->court_name}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                        <br>
                        <br>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>


@endsection