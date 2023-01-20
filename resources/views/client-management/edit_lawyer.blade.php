@extends('layouts.hmsmain')
@section('content')
<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Lawyer Details</b></h4>
    <br><br>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{url('update_lawyer')}}" id="form">
    @csrf
    <input type="hidden" name="id" value="{{$asign_lawyer->id}}">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label>Client Number</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control"
                        name="client_number" id="" value="{{$asign_lawyer->client_number}}">
                    <div class="invalid-feedback" style="width: 100%;">
                        Name is required.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label>Client Type</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="client_type" id="">
                        <option>{{$asign_lawyer->client_type}}</option>
                        <option value="Individual">Individual</option>
                        <option value="Corporate">Corporate</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label>Client Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <select name="client_name" id="">
                        <option>{{$asign_lawyer->client_name}}</option>
                        <option value="residential">Select</option>
                        <option value="residential">Residential</option>
                        <option value="non-residential">Non-Residential
                        </option>
                    </select>
                </div>
            </div>
        </div>



        <div class="col-md-6">
            <div class="mb-1">
                <label>File Number</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control"
                        name="file_number" id="" value="{{$asign_lawyer->file_number}}" min="0"
                        max="99">
                    <div class="invalid-feedback" style="width: 100%;">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label>Lawyer Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <select name="lawyer_name" id="">
                        <option>{{$asign_lawyer->lawyer_name}}</option>
                        <option>Kenya</option>

                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-1">
                <label>Court Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control"
                        name="court_name" value="{{$asign_lawyer->court_name}}" id="">
                    <div class="invalid-feedback" style="width: 100%;">

                    </div>
                </div>
            </div>
        </div>



            <div class="col-md-4">
                <div class="mb-1">
                    <br>
                    <button type="submit" class="btn btn-primary"
                        style="width:45%;">Save</button>
                    <button type="button" class="btn btn-primary"
                        data-dismiss="modal"
                        style="width:45%;">Cancel</button>
                </div>
            </div>
        </div>
</form>
</div>

</div>
</div>
</div>
</div>
</div>
</div>




























    @endsection