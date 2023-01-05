@extends('layouts.hmsmain')
@section('content')

<style>
th {
    width: 30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b> Expense Details </b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th>Date :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Staff Name :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Expense Reference :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Customer Type :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Project Assigned By :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Billing Amount :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Description :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Status :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Supporting Details :</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </form>



</div>
@endsection