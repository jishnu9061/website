@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="{{url('projects')}}" style="color: #1D1D50;">Projects</a> /
    <a href="#" style="color: #1D1D50;">View Projects</a>
</nav>
<br><br>
<style>
th{ 
    width:30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b> Project Details </b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th>Project Title :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Start Date :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>End Date :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Milestone :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Project Assigned By :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Project Priority :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Project Amount :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Project Status :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Project Description :</th>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>


    </form>






</div>
@endsection