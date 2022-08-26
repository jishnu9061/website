@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<table class="table"> 
	<thead>
		<tr>
			<h5>SALARY</h5>
		</tr>
		
	</thead>
	<tbody class="data">
		<tr >
			<td>Basic Pay</td>
			<td><input type="number" id="aa" class="form-control" placeholder="00.00"></td>
		</tr>
		<tr>
			<td>Travel allowance</td>
			<td><input type="number" id="bb" class="form-control" placeholder="00.00"></td>
		</tr>
		<tr>
			<td>Insurance</td>
			<td><input type="number" id="cc" class="form-control" placeholder="00.00"></td>
		</tr>
		<tr>
			<td>Medical allowance</td>
			<td><input type="number" id="dd" class="form-control" placeholder="00.00"></td>
		</tr>
		<tr>
			<td>Contribution allowance</td>
			<td><input type="number" id="ee" class="form-control" placeholder="00.00"></td>
		</tr>
		<tr>
			<td>Other allowance</td>
			<td><input type="number" id="ff" class="form-control" placeholder="00.00"></td>
		</tr>
		<tr>
			<td><h6 >Total</h6></td>
			<td><input type="number" id="sum" class="form-control" placeholder="00.00"></td>
		</tr>
	</tbody>
	</table>
</div>

<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function() {
    //this calculates values automatically 
    sum();
    $("#aa, #bb, #cc").on("keydown keyup", function() {

        sum();
    });
});

function sum() {
            var num1 = document.getElementById('aa').value;
            var num2 = document.getElementById('bb').value;
            var num3 = document.getElementById('cc').value;
          
			var result = parseInt(num1) + parseInt(num2) + parseInt(num3);
			var result1 = parseInt(num2) - parseInt(num1);
            
                document.getElementById('sum').value = result;
				document.getElementById('subt').value = result1;
           
        }
</script>
@endsection