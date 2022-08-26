@extends('layouts.hmsmain')
@section('content')
<Style>
    .table-head
    {
        color:white;
    }
</Style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<div class="spacer" style="height:40px;margin-top: 30px;"></div>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>View All Patient</h3>
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
                    <th>Sl</th>
                    <th>Date</th>
                    <th>Patient Name</th>
                    <th>Department</th>
                    <th>Consultant</th>
                    <th>Lab</th>
                    <th>Clinical Observation</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($test_view as $view )
                <tr class="table table-hover">
                    <td><?php echo $no++;?></td>
                    <td>{{date('d-m-Y H:i:s',strtotime($view->date))}}</td>
                    <td>{{ $view->firstname }}</td>
                    <td>{{ $view->department}}</td>
                    <td>{{ $view->added_by}}</td> 
                    <td>{{ $view->lab_deptname }}</td>
                    <td><a href="{{ url('view_patient_test/'.$view->patientlab_id.'/'.$view->id) }}"><i class="fa fa-eye"></i></a></td>
                </tr>
                @endforeach
                    
            </tbody>
        </table>
    </section>
</div>
<script>
    $('#mydatatable').dataTable({
        colReorder: true,
        order: [],
        pageLength: 0,
        lengthMenu: [10,20, 40, 60, 80, 90, 100],
    });
</script>
@endsection