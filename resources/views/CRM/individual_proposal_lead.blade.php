@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<div class="container">

    <div class="col-sm-4" style="">
        <h4 style="border: 0.5px solid #f1d9b0;
                    margin-left:100%;
                    border-radius: 25px;
                    background-color: #f1d9b0;
                    padding: 2%;
                    width: 100%;
                    height:90%;
                    text-align:center;
                    box-shadow: inset 0 0 3px #d3d0ca;
                    opacity: .9;">
            <b style="font-size:18px;">Proposals</b>
        </h4>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url('store_individual_proposal_leads')}}">
                @csrf
                <input type="hidden" name="id" value="{{$individual_proposal_leads->id}}">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Date of contact</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="date" class="form-control" name="date" value="" id="username" required>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Contacted By</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Contacted" id="cars">
                                    <option></option>
                                    <option>Emp 1</option>
                                    <option>Emp 2</option>
                                    <option>Emp 3</option>

                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Source</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control" name="Source" value="" id="username" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Status</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Status" id="cars">
                                    <option>New</option>
                                    <option>Accepted</option>
                                    <option>Rejected</option>
                                    <option>Follow-UP</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Number is required.
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <br>
                <br>
                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:right;" Style="width:45%;"
                            onclick="history.back()">Close</button>
                    </div>
                </div>
            </form>

        </div>


    </div>

    @endsection