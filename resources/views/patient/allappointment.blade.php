@extends('layouts.hmsmain')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="spacer" style="height:40px;margin-top: 30px;"></div>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>View All Appointments</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
            </div>
        </div>
    </div>
    <section class="section">
        <table class="table table-striped table-bordered" id="mydatatable">
            <thead>
                <tr>
                    <th>Appointment Date</th>
                    <th>Patient Id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Doctor</th>
                    <th>Token Number</th>
                    <th>Print</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allappointments as $patient)
                    <tr class="table table-hover">
                        <td scope="row">{{date('d-m-Y',strtotime($patient->appointmentdate))}}</td>
                        <td>{{$patient->patientid}}</td>
                        <td>{{$patient->firstname}}</td>
                        <td>{{$patient->Department}}</td>
                        <td>{{$patient->name}}</td>
                        <td>{{$patient->token}}</td>
                        <td><a href="{{url('print_appointment'.$patient->id)}}"><i class="fas fa-print"></i></a></td>
                        <td><a href="{{url('edit_appointment'.$patient->id)}}"><i class="fas fa-edit"></i></a></td>
                        <td><a onClick="return myFunction();" href="{{url('delete_appointment'.$patient->id)}}"><i class="fas fa-trash-alt" style="color:#607080"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
<script type="text/javascript" charset="utf8" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $('#mydatatable').dataTable({
        colReorder: true,
        order: [],
        pageLength: 0,
        lengthMenu: [10,20, 40, 60, 80, 90, 100],
    });
  </script>
@endsection
