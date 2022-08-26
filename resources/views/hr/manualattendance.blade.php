@extends('layouts.hmsmain')
@section('content')

<table class="table table-bordered">
	<th>
		
		<td><b>Present</b></td>
		<td><b>Absent</b></td>
		<td><b>Half-day</b></td>
		<td><b>Late</b></td>
	</th>
	@foreach($staffs as $staf)
	<tr class="data">
		<td>{{$staf->name}}</td>
		<td><input type="checkbox" class="present" name="hobby[]" checked></td>
		<td><input type="checkbox" class="halfday" name="" ></td>
		<td><input type="checkbox" class="absent" name="" ></td>	
	</tr>
	@endforeach
	</table>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>
    $(".present").click(function(){
        $(this).closest('.data').find('.halfday').prop("checked", false);
		$(this).closest('.data').find('.absent').prop("checked", false);

    });
	$(".halfday").click(function(){
        $(this).closest('.data').find('.present').prop("checked", false);
		$(this).closest('.data').find('.absent').prop("checked", false);

    });
	$(".absent").click(function(){
        $(this).closest('.data').find('.halfday').prop("checked", false);
		$(this).closest('.data').find('.present').prop("checked", false);

    });
	
</script>
@endsection