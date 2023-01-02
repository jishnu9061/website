@extends('layouts.hmsmain')
@section('content')
    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Edit Category Management </b></h4><br>
        <div class="card">
            <div class="card-header">
            </div>
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
                                        Style="width:50%;">update</button>
                                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
    @endsection
