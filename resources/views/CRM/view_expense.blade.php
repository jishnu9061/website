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
                        <td>{{$view_expense_list->date}}</td>
                    </tr>
                    <tr>
                        <th>Staff Name :</th>
                        <td>{{$view_expense_list->staff_name}}</td>
                    </tr>
                    <tr>
                        <th>Expense Reference :</th>
                        <td>{{$view_expense_list->expense_reference}}</td>
                    </tr>
                    <tr>
                        <th>Customer Type :</th>
                        <td>{{$view_expense_list->customer_type}}</td>
                    </tr>
                    <tr>
                        <th>Project Assigned By :</th>
                        <td>{{$view_expense_list->task_assigned_by}}</td>

                    </tr>
                    <tr>
                        <th>Billing Amount :</th>
                        <td>{{$view_expense_list->billing}}</td>

                    </tr>
                    <tr>
                        <th>Description :</th>
                        <td>{{$view_expense_list->description}}</td>
                    </tr>
                    <tr>
                        <th>Status :</th>
                        <td>{{$view_expense_list->status}}</td>
                    </tr>
                    <tr>
                        <th>Supporting Details :</th>
                        <td>{{$view_expense_list->supporting_details}}</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </form>



</div>
@endsection