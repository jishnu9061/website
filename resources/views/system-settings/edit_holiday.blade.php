@extends('layouts.hmsmain')
@section('content')


<div class="container">


    {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Holidays</b></h4>
    <br><br>

    <div class="card">

        <div class="card-body">

            <form method="post" action="{{url('update_holiday')}}" id="form">
                <input type="hidden" name="id" value="{{$weekend_and_holiday->id}}">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Date:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="date" id="date"
                                    value="{{$weekend_and_holiday->Date}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Day:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="day" class="form-control" name="day" id="day"
                                    value="{{$weekend_and_holiday->Day}}">
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