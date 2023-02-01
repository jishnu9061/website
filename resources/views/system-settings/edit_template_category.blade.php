@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">System Setup</a> /
    <a href="{{url('other_confgn')}}" style="color: #1D1D50;">Other Configurations</a> /
    <a href="{{url('template_category')}}" style="color: #1D1D50;">Template Category</a> /
    <a href="#" style="color: #1D1D50;">Edit Template Category</a>
</nav>
<br><br>
<div class="container">

    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Category Details</b></h4>
    <br><br>


    <div class="card">

        <div class="card-body">
            <form method="post" action="{{url('update_template_category')}}" id="form">
                <input type="hidden" name="id" value="{{$template_category->id}}">

                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Template Category:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="temcategory" style="width:100%;">

                                    <option>{{$template_category->Template_Category}}</option>
                                    <option>Business Formation</option>
                                    <option>Business Operations</option>
                                    <option>Business Property</option>
                                    <option>Employment</option>
                                    <option>Financial</option>
                                    <option>Personal & Family</option>
                                    <option>Real Estate</option>
                                    <option>Will & Estate Planning</option>
                                </select>


                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Category Type:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="cattype" id=""
                                    value="{{$template_category->Category_Type}}">
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
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection