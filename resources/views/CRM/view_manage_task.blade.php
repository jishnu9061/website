@extends('layouts.hmsmain')
@section('content')

<style>
th{ 
    width:30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b> Task Details </b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th>Task Name :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Milestone :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Task Assigned By :</th>
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
                        <th>Task Priority :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Task Status :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Task Description :</th>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>


    </form>






</div>
@endsection