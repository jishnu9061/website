@extends('layouts.hmsmain')
@section('content')
	<div style="height: 20px;">
		
	</div>

<table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        From Date
                    </th>
                    <th>
                        To Date
                    </th>
                    <th>
                        Time from
                    </th>
                    <th>
                        To
                    </th>
                     <th>
                        Where
                    </th>
                </tr>
                
            </thead>
            <tbody>
            @foreach($schedule as $duty)
                <tr>
                    <td>{{$duty->fromdate}}</td>
                    <td>{{$duty->todate}}</td>
                    <td>{{$duty->fromtime}}</td>
                    <td>{{$duty->totime}}</td>
       
                    <td></td>
                 
                </tr>
            @endforeach
                
            </tbody>
        </table>
@endsection