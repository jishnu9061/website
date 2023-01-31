@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">E-Library</a> /
    <a href="{{url('subject_category') }}" style="color: #1D1D50;">Book Category</a> /
    <a href="#" style="color: #1D1D50;">Edit Book Category</a>
</nav>
<br><br>
    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Edit Category Management </b></h4><br>
        <div class="card">
            <div class="card-body">
            <form action="{{url('update_subject_category')}}" method="post">
                        @csrf

                        <div class="row">
                        <input type="hidden" name="id" value="{{$edit->id}}">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="username">Category</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" name="title" value="{{$edit->title}}" id="age">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Incorporation is required
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-3">
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
                                    <button type="submit" class="btn btn-primary float:right;"
                                        Style="width:50%;">Update</button>
                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                        onclick="history.back()">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
    @endsection
