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
        <h3 style="text-align:center"><b><u>Prescribed Test Detalis</u></b></h3>
        <br>
        
        <div class="row">
            <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
                <h6>Patient Id:{{ $test_details[0]->patient_id}}</h6>
                <h6>Patient Name:{{ $patient[0]->firstname }}</h6>
                <h6>Age/Sex:{{$patient[0]->age }}Y/{{$patient[0]->gender }}</h6>
                {{-- <h6>Address:{{$appointments[0]->Department}}</h6> --}}
            </div>
            <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
                {{-- <h6>Date:{{$test_details[0]->date }}</h6> --}}
            </div>
            <div class="col-md-4 col-lg-4"  style="padding-top: 6px;">
                <h6>Date:{{date('d-m-Y H:i:s',strtotime($test_details[0]->date))}}</h6>
                <h6>Docter:{{$test_details[0]->added_by}}</h6>
                <h6>Department:{{$test_details[0]->department}}</h6>
                <h6>Lab Name:{{ $test_details[0]->lab_deptname }}</h6>
                {{-- <h6>Address:{{$appointments[0]->Department}}</h6> --}}
            </div>
        </div>
        <br>
    <section class="section">
        <table class="table table-striped table-bordered" id="mydatatable">
            <thead>
                <tr class="table table-hover">
                    <th scope="col">Sl</th>
                    <th scope="col">Test</th>
                    <th scope="col">Combo Test</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($patient_test as $tests)
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td>{{ $tests->test_name }}</td>
                    <td>{{ $tests->combo_name }}</td>
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