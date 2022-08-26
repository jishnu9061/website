@extends('layouts.hmsmain')
    @section('content')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        </head>
        <div class="spacer" >
                <form method="POST" action="{{url('view_request')}}">
                    <h3 style="text-align:center">Requested Items</h3>
                    <table class="table table-bordered" id="allpatients" style="margin-top: 40px;">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Department</th>
                                <th scope="col">Status</th>
                                <th scope="col">View</th>
                                <th scope="col">Issue Request</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($request as $data)
                                <tr class="">
                                    <td>{{date('d-m-Y',strtotime($data->request_intenddate))}}</td>
                                    <td>{{$data->department}}</td>
                                    <td>{{$data->request_statusname}}</td>
                                    <td><a href="{{url('/view_request_details' )}}"><i  style="color:#607080" class="fa fa-eye" aria-hidden="true"></i></td>
                                    {{-- <td><a href="{{url('issue_request'.$data->request_intendid )}}"><i  style="color:#607080" class="fa fa-arrow-right" aria-hidden="true"></i></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(function(){
        $("#allpatients").dataTable();
        })
    </script>
@endsection
