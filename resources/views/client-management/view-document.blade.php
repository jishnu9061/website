


@extends('layouts.hmsmain')
@section('content')
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>


</div>
<br>
<div class="container">
    <h3 style="text-align:center">View Document</h3><br><br>
    <table class="table table-hover" style="border: 1px solid">
       
        @csrf
        <tbody >
            <tr>
                <th style="width:30%" >No</th>
                <td></td>
            </tr>
            <tr>
                <th>Client No</th>
                <td></td>
            </tr>
                <th>Client Name</th>
                <td></td>
            </tr>
            </tr>
                <th>Document</th>
                <td></td>
            </tr>
            </tr>
                <th></th>
                <td></td>
            </tr>
             <tr>
                <th></th>
                    <td></td>
            </tr>
            <tr>
                <th></th>
                    <td></td>
            </tr>


        </tbody>
    </table>
</div>



@endsection
