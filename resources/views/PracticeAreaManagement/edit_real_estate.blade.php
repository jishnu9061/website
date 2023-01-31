@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('real_estate')}}" style="color: #1D1D50;">Real Estat</a> /
    <a href="#" style="color: #1D1D50;">Edit Real Estat</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Real Estate</b></h4>
    <br>

    <div class="card">

        <div class="card-body">

            <form action="{{url('update_real_estate')}}" method="post">
                @csrf
                <div class="container">

                    <div class="row">
                        <input type="hidden" value="{{$edit->id}}" name="id">
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">File No</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="file_no" value="{{$edit->file_no}}"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="client_name"
                                        value="{{$edit->client_name}}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="matter_type"
                                        value="{{$edit->matter_type}}" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">

                                <label for="exampleFormControlInput1" class="form-label">Buyer</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="buyer" value="{{$edit->buyer}}"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Attorney</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="attroney" value="{{$edit->attroney}}"
                                        placeholder="">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Property
                                    Details</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2"
                                        name="property">{{$edit->property}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-1">

                                <label for="exampleFormControlInput1" class="form-label">Closing
                                    Statement</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2"
                                        name="close_statement">{{$edit->close_statement}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Listing Realtor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2"
                                        name="listing_realtor">{{$edit->listing_realtor}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Selling Realtor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea class="form-control" rows="2"
                                        name="selling_realtor">{{$edit->selling_realtor}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label for="exampleFormControlInput1" class="form-label">Company Title</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" placeholder="" value="{{$edit->file_no}}"
                                        name="company_title">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->


                <div class="conatainer" style="float:right;">
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-primary" onclick="history.back();">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection