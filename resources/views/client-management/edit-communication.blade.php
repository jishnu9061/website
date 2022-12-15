@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="py-5 text-center">


   
        <div>
           
                        {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Communication</b></h4>
    <br>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{url('update-communication')}}" id="form">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id}}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communication Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="date" id="username" value="{{ $edit->communication_date}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="Client" id="cars">
                                    <option >{{ $edit->client}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <select name="File" id="cars">
                                    <option >{{ $edit->file}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Customer</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="Customer" id="age" value="{{ $edit->customer}}" min="0" max="99">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Age is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Telephone No</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="telephone" value="{{ $edit->telephone_no}}"
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="email" class="form-control" name="Email" value="{{ $edit->email}}"
                                    id="confirm_password">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Password is required.
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communication Sources</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Sources">
                                    <option>{{ $edit->communication_source}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mode of Communication</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Communication">
                                    <option >{{ $edit->mode_of_communication}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communicated With</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Communicated">
                                    <option >{{ $edit->communicated}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Duration</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Duration">
                                    <option >{{ $edit->duration}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Person Handling</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="Handling" id="cars">
                                    <option>{{ $edit->person_handling}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Timer</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="time" class="form-control" name="Timer" id="username" value="{{ $edit->time}}" placeholder=""
                                    required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Date is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Others</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="Others" id="username" value="{{$edit->others}}" placeholder=""
                                    required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Date is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Communicated Description</label>
                            <div class="input-group">
                                <textarea class="form-control" id="form7Example7" rows="2" name="Description"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Complaint Description is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Action Plan</label>
                            <div class="input-group">
                                <textarea class="form-control" id="form7Example7" rows="2" name="Action"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Complaint Description is required.
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
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection