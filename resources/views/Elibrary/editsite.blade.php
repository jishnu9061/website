@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">E-Library</a> /
    <a href="{{url('site')}}" style="color: #1D1D50;">Legal Sites</a> /
    <a href="#" style="color: #1D1D50;">Edit Site</a>
</nav>
<br><br>
{{-- heading --}}
<h4 id="hdtpa"><b>Edit Site Details</b></h4>
<br>

<div class="card">

    <div class="card-body">
        <div class="container">
            <form action="{{ url('update_site') }}" method="post">
                @csrf

                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Title</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="title" value="{{ $edit->title }}"
                                    id="age">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Site URL</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="url" class="form-control" name="site_url" value="{{ $edit->site_url }}"
                                    id="age">
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
                            <label for="username">Description</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <textarea rows="4" cols="50" name="discription" class="form-control"
                                    type="text">{{ $edit->discription }}</textarea>
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Save</button>
                        <button type="button" onclick="history.back()" class="btn btn-primary float:left"
                            Style="width:45%;" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
        </div>

        </form>
    </div>
</div>

@endsection