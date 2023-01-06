@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
    <h4 id="hdtpa"><b>Edit Precedence Register</b></h4>
    <br>

<div class="card">
   
    <div class="card-body">
        <div class="container">
            <form action="{{url('update_precedence')}}" method="post">
                @csrf
        
                <div class="row">
        
                <input type="hidden" name="id" value="{{$edit->id}}">
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File No</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="text" class="form-control" name="file_no" value="{{$edit->file_no}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="text" class="form-control" name="client_name" value="{{$edit->client_name}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File Handled By</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="text" class="form-control" name="file_handle" value="{{$edit->file_handle}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date From</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="date" class="form-control" name="date_from" value="{{$edit->date_from}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date To</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="date" class="form-control" name="date_to" value="{{$edit->date_to}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File Status</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <select name="file_status" id="cars">
                                    <option>{{$edit->file_status}}</option>
                                    <option>---select---</option>
                                    <option>Active</option>
                                    <option>Pending</option>
                                    <option>Closed</option>
        
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">File Discription</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <textarea rows="4" cols="50" name="file_discription" class="form-control"
                                    type="text">{{$edit->file_discription}}</textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
        
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Upload File</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="file" class="form-control" name="upload_file" value="{{$edit->upload_file}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Save</button>
                        <button type="button" onclick="history.back()" class="btn btn-primary float:left" Style="width:45%;"
                            data-dismiss="modal">Cancel</button>
                    </div>
                </div>
        
        
            </form>
        </div>
    </div>
  </div>
@endsection