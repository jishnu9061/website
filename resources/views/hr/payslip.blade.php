@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:17px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> / 
    <a href="#" style="color: #1D1D50;">HR</a> /
    <a href="#" style="color: #1D1D50;">Payslip</a>
</nav>
<br><br>
{{-- heading --}}
<h4 id="hdtpa"><b>Payslip</b></h4>
<br>

<div class="card">
    <div class="card-body">
        <form action="{{url('generatepayslip')}}">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    <select id="b" class="form-control" name="year">

                        @for($i=2022;$i<=2080;$i++) <option value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select>
                </div>

                <div class="col-md-3">
                    <select id="b" class="form-control" name="month" id="sele">

                        <option id="01" value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>

                    </select>
                </div>
                <div class="col-md-3">
                   
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                    <button type="submit" class="btn btn-primary"> Generate Payslip </button>
                    <button type="button" class="btn btn-primary" onclick="history.back()"> Cancel </button>

                </div>
            </div>
        </form>
    </div>
</div>

@endsection