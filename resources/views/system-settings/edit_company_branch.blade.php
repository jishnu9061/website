@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('other_confgn')}}" style="color: #1D1D50;">Other Configurations</a> /
    <a href="{{url('company_branch')}}" style="color: #1D1D50;">Company Branch</a> /
    <a href="#" style="color: #1D1D50;">Edit Company Branch</a>
</nav>
<br><br>

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Company Branch</b></h4>
    <br><br>


    <div class="card">

        <div class="card-body">
            <form method="post" action="{{url('update_company_branch')}}" id="form">

                <input type="hidden" name="id" value="{{$branch_details->id}}">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Branch No:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input class="form-control" type="text" id="bnum" name="bnum"
                                    value="{{$branch_details->branch_no}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label>Branch Code:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="bcode" name="bcodes" class="form-control"
                                    value="{{$branch_details->branch_code}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Branch Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="bname" name="bname" class="form-control"
                                    value="{{$branch_details->branch_name}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Postal Address:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea rows="4" cols="50" name="paddress" class="form-control"
                                    type="text">{{$branch_details->address}}</textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Physical Address:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea rows="4" cols="50" name="physicaladd" class="form-control"
                                    type="text">{{$branch_details->physical_address}}</textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Tel:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" id="tel" name="tel" class="form-control"
                                    value="{{$branch_details->telephone}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mobile:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" id="mobile" name="mobile" class="form-control"
                                    value="{{$branch_details->mobile}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Fax:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="fax" name="fax" class="form-control"
                                    value="{{$branch_details->fax}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Town:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="town" id="town" style="width:100%;">
                                    <option>{{$branch_details->town}}</option>
                                    <option>Nairobi </option>
                                    <option>Kisumu</option>
                                    <option>Nakuru</option>
                                    <option>Mombasa</option>
                                    <option>Thika</option>
                                    <option>Malindi</option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{$branch_details->email}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Website:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="website" name="website" class="form-control"
                                    value="{{$branch_details->website}}">
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
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection