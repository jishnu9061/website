@extends('layouts.hmsmain')
@section('content')




<!-- <script>
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
            </script>
</head> -->

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Company Details</b></h4>
    <br><br>





    <!-- <input type="text" class="form-control" name="name" id="name" > -->

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_company_details')}}" id="form">
                <input type="hidden" name="id" value="{{$company_details->id}}">
                <br>

                <!-- --------------------------------------image------------------------------------------------->
                <label>
                    <input type="file" accept="image/jpeg, image/png, image/jpg" name="image" id="file"
                        onchange="loadFile(event)" value="{{$company_details->logo}}">
                    <span class="btn btn-primary"><span class="fa fa-plus m-2"></span>Edit Logo</span>
                </label>
                <br>
                <img id="output" width="10%" />
                <!-- --------------------------------------image------------------------------------------------->


                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Company Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{$company_details->company_name}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Company Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="address" id="address"
                                    value="{{$company_details->address}}">
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
                            <label for="username">Town/City</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="city" id="city"
                                    value="{{$company_details->town}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Company Website</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="website" id="website"
                                    value="{{$company_details->company_website}}" min="0" max="99">
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
                            <label for="username">Company Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{$company_details->email}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Company Type</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="type" id="type" style="width:100%;">
                                    <option>{{$company_details->company_type}} </option>
                                    <option>Partnership</option>
                                    <option>Sole partership</option>
                                    <option>LLP</option>
                                    <option>LTD</option>
                                    <option>LLC</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">PIN No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="pinnum" id="pinnum"
                                    value="{{$company_details->pin_no}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">VAT No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="vatnum" id="vatnum"
                                    value="{{$company_details->vat_no}}">
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
                            <label for="username">NHIF Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="nhifcode" id="nhifcode"
                                    value="{{$company_details->NHIF}}" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">NSSF Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="nnum" id="nnum"
                                    value="{{$company_details->NSSF_no}}" min="0" max="99">
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