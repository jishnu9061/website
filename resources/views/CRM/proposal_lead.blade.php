@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="#" style="color: #1D1D50;">Lead</a> /
    <a href="{{url('lead')}}" style="color: #1D1D50;">Corporate Customer Leads</a> /
    <a href="#" style="color: #1D1D50;">Proposals</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Proposals</b></h4>
    <br>
    <form method="post" action="{{url('store_proposal_leads')}}">
        @csrf
        <input type="hidden" name="id" value="{{$proposal_leads->Id}}">
        <div class="card">
            <div class="card-body">
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
