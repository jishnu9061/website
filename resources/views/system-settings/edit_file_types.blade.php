@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('file_types')}}" style="color: #1D1D50;">File Types</a> /
    <a href="#" style="color: #1D1D50;">Edit File Types</a>
</nav>
<br><br>
<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit File Type</b></h4>
    <br><br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_file_types')}}" id="form">
                <input type="hidden" name="id" value="{{$file_types->id}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>File Type Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="name" value="{{$file_types->file_type}}"
                                    class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Short Names:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" id="" name="sname" value="{{$file_types->short_name}}"
                                    class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Retainer Period(Years):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" id="" name="year" value="{{$file_types->retainer_period}}"
                                    class="form-control">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Approver(s):</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="approver" style="width:100%;">
                                    <option>{{$file_types->approvers}}</option>
                                    <option>Alekeen W Benson</option>
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
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                            onclick="history.back()">Cancel</button>
                        <br>
                        <br>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection