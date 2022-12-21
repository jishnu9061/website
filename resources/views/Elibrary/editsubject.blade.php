@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit </b></h4>
    <br>
    <br>
</div>
<div class="container">

    <form action="{{url('update_subject')}}" method="post">
        @csrf

        <div class="row">


            <input type="hidden" name="id" value="{{$edit->id}}">

            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Subject Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="sub_name" value="{{$edit->sub_name}}" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Category</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="category" value="{{$edit->category}}" id="age">
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
        <br>






        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <br>
                <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Update</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    data-dismiss="modal">Cancel</button>
            </div>
        </div>
</div>

</form>






















@endsection