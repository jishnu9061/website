@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
    <h4 id="hdtpa"><b>Edit </b></h4>
    <br>


<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <div class="container">
            <form action="{{url('update_file')}}" method="post">
                @csrf
        
                <div class="row">
        
                <input type="hidden" name="id" value="{{$edit->id}}">
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Date Of Upload</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="date" class="form-control" name="upload_date" value="{{$edit->upload_date}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Subject</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <select name="subject" id="cars">
                                    <option >{{$edit->subject}}</option>
                                    <option>---select---</option>
                                    <option>family law</option>
                                    <option>insurance</option>
                                    <option>accident</option>
                                    <option>event </option>
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Book/File Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="text" class="form-control" name="file_name" value="{{$edit->file_name}}" id="age">
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
                            <label for="username">Auther</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="text" class="form-control" name="auther" value="{{$edit->auther}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Publisher</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="text" class="form-control" name="publisher" value="{{$edit->publisher}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Uploaded By</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="text" class="form-control" name="upload_by" value="{{$edit->upload_by}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
                <br>
                <div class="row">
        
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Discription</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <textarea rows="4" cols="50" name="discription" class="form-control" type="text">{{$edit->discription}}</textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
                <br>
                <div class="row">
        
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Upload E-file</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
        
                                </div>
                                <input type="file" class="form-control" name="e_file" value="{{$edit->e_file}}" id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        
        
                <div class="row">
                    <div class="col-sm">
        
                    </div>
                    <div class="col-sm">
        
                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Update</button>
                        <button type="button" onclick="history.back()" class="btn btn-primary float:left" Style="width:45%;"
                            data-dismiss="modal">Cancel</button>
                    </div>
                </div>
        
        
            </form>
        </div>
    </div>
  </div>











@endsection