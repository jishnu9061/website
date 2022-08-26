@extends('layouts.hmsmain')
@section('content')

<div class="container">
	<form method="POST" action="{{url('addmed')}}">
		@csrf
<div class="row">
	<div class="col-md-7">
		<input type="text" name="searchmed" id="searchmed" class="form-control">
	</div>
	<div class="col-md-2">
		<input type="number" name="searchmed" id="dds" class="form-control">
	</div>
	<div class="col-md-3">
		<button type="submit" class="btn  btn-block btn-secondary">Add</button>
	</div>
	
</div> 
</form> 
<div style="height: 60px;">
	
</div>
<div>
	<table class="table table-striped">
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		<tr>
			<td>ewq</td>
			<td>ewq</td>
			<td>ewq</td>
		</tr>
		<tr>
			<td>edvwq</td>
			<td>ewvq</td>
			<td>edwdvq</td>
		</tr>
	</table>
</div>
</div>
    <script type="text/javascript">


    // CSRF Token

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $(document).ready(function(){


      $( "#searchmed" ).autocomplete({
       alert('dfg');
        source: function( request, response ) {

          // Fetch data

          $.ajax({

            url:"{{route('searchmeds')}}",

            type: 'post',

            dataType: "json",

            data: {

               _token: CSRF_TOKEN,

               search: request.term

            },

            success: function( data ) {

               response( data );

            }

          });

        },

        select: function (event, ui) {

           $('#employee_search').val(ui.item.label);

           $('#employeeid').val(ui.item.value); 

           return false;

        }

      });


    });

    </script>

@endsection