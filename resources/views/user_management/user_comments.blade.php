@extends('layouts.hmsmain')
@section('content')
        <nav style="font-size:15px;">
            <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
            <a href="#" style="color: #1D1D50;">User Management</a> /
            <a href="{{url('manage_user_account')}}" style="color: #1D1D50;">Manage User Account</a> /
            <a href="#" style="color: #1D1D50;">User Comments</a>
        </nav>
        <br><br>

<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Comments</b></h4>
    <br><br>


    <div class="card">

        <div class="card-body">
            <form>

                <input type="text" class="form-control" id="" style="border: 1px solid rgb(13, 1, 56);"
                    placeholder="Write your comments here...."><br><br>


                <div class="col-sm">
                    <br>
                    <button type="submit" class="btn btn-primary float:right;" Style="width:10%;">Post</button>
                    <button type="button" class="btn btn-primary float:left" Style="width:10%;"
                        onclick="history.back()">Cancel</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
