@extends('layouts.hmsmain')
@section('content')
<html>

<head>

</head>

<body>

    <div class="container">
        <br>
        <div>
            <h4 id="hdtpa"><b>Edit Assignment</b></h4>
            <br>
        </div>

        <form method="post" action="{{url('update-assigment')}}" id="form">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{$edit_assigment->id}}">
                <div class="col-md-12">
                    <div class="mb-1">
                        <label for="username">Assignment</label>
                        <div class="input-group">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" id="w3review" rows="4" cols="50" class="form-control" value="{{ $edit_assigment->assignment}}" name="assignment"
                                id="username" val required>

                            <br>
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
                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Save</button>
                    <button type="button" class="btn btn-primary float:right;" data-dismiss="modal">Cancel</button>
                </div>
            </div>
    
    </form>
    </div>
    
 
    @endsection