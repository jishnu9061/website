@extends('layouts.hmsmain')
@section('content')


        <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>
                        Edit User Department</u></b></span></button><br><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Department Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Department Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="username" value="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Head of Department</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="" id="cars">
                                <option>select</option>
                                <option>Cedric Opara</option>
                                <option>Corrine Auma</option>
                                <option>Evans Munene</option>
                                <option>Florance Muthama</option>
                                <option>George Njoroge</option>
                                <option>Gichui Kirogo</option>
                                <option>Hillary Wamunyolo Casmir</option>
                                <option>Jackline Ogwemo</option>
                                <option>John Wachira</option>
                                <option>Jukius Mburu</option>
                                <option>Kevin Kavila</option>
                                <option>Martin Kyalo</option>
                                <option>Mike Ogutu </option>
                                <option>Owino PH Onyango</option>
                                <option>Princess Caroline</option>
                                <option>Sarah Gladys</option>
                                <option>Thagichu Nyaga</option>
                                <option>Wambua Musyoka</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="username">Appear in Performance Report</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="" id="cars">
                                    <option>--select--</option>
                                    <option>Yes</option>
                                    <option>No</option>   
                                </select>
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>
                    </div>
                </div>
        </div>
        </form>
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