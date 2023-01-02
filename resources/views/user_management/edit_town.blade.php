@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <!-- <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>
                        Edit Town</u></b></span></div><br><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->
    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Town</b></h4>
    <br><br>



    <div class="card">

        <div class="card-body">


            <form method="post" action="{{url('update_town')}}" id="form">
                @csrf
                <div class="row">

                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <input type="hidden" name="id" value="{{$manage_towns->id}}">
                        <label for="username">Town/City</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="Town_City" id=""
                                value="{{$manage_towns->Town_City}}">
                            <div class="invalid-feedback" style="width: 100%;">
                                Name is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>



                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                    </div>
                </div>

            </form>
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