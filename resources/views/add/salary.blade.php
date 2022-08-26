@extends('layouts.hmsmain')
@section('content')
<div class="container">
	<table class="table"> 
	<thead>
		<tr>
			<h5>SALARY</h5>
		</tr>
         <hr class="mb-4">
		
	</thead>
@if(Session::has('salaryadded'))

   <div class="alert alert-dark" role="alert">
   {{ Session::get('salaryadded')}}
   </div>
                          
@endif
	<tbody class="data" id="studentsData">
		<form method="post" action="{{url('paysalary')}}">
			@csrf
		<tr >
			<td><h6>Basic Pay</h6></td>
			<td><input type="number" name="aa" id="aa" class="form-control" value="{{$staffsalary}}" placeholder="00.00"></td>
		</tr>
		<input type="hidden" value="{{$id}}" name="employeeid">
	    @foreach($staffallowance as $data)
	     <tr>
			<td>{{$data->allowancename}}</td>
            @if(isset($data->price))
			<td><input type="number" name="sumtotal" id="sumtotal" value="{{$data->price}}" class="form-control" placeholder="00.00"></td>
            @elseif(isset($data->percent))
            <?php
             $bb=$data->percent;
             $reduct=($bb/100)*$staffsalary;
            ?>
            <td><input type="number" name="sumtotal" id="sumtotal" value="{{$reduct}}" class="form-control" placeholder="00.00"></td>

            @endif
		</tr>
		@endforeach
         @foreach($staffreduction as $data)
         <tr>
            <td>{{$data->allowancename}}</td>
            @if(isset($data->price))
            <td><input type="number" name="sumtotal" id="sumtotal" value="{{$data->price}}" class="form-control" placeholder="00.00" min="0"></td>
            @elseif(isset($data->percent))
            <?php
             $bb=$data->percent;
             $reduct=($bb/100)*$staffsalary;
            ?>
            <td><input type="number" name="sumtotal" id="sumtotal" value="{{$reduct}}" class="form-control" placeholder="00.00" min="0"></td>

            @endif
        </tr>
        @endforeach
        @foreach($loan as $data)
         <tr>
            <td>Loan Deduction</td>
           
            <td><input type="number" name="sumtotal" id="sumtotal" value="{{$data->deduct}}" class="form-control"></td>

            
        </tr>
        @endforeach
         <tr>
            <td>Leave Deduction</td>
           
            <td><input type="number" name="sumtotal" id="sumtotal" value="{{$final}}" class="form-control"></td>

            
        </tr>
		<tr>
			<td><h6 >Actual Pay</h6></td>
			<td><input type="number" name="sumtotal" value="{{$finalsalary}}" id="sumtotal" class="form-control" placeholder="00.00"></td>
		</tr>
		<tr>
			<td><h6></h6></td>
			<td><button type="submit" class="btn btn-secondary btn-block">Pay it</button></td>
		</tr>
		</form>
		{{Session::forget('salaryadded')}}
	</tbody>
	</table>
</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script>
    $(document).ready(function() {
                $.ajax({

                    url: '/allowancetostaff',

                    type: "GET",

                    dataType: "json",


                    success:function(data) {

                        // $('#studentsData').html(response);

                        $('table[id="studentsData"]').empty();

                        $.each(data, function(key, value) {
                            var markup = '<tr> <td>' + value.id + '</td> <td>' + value.student_id + '</td> <td>' + value.first_name+ ' '  + value.last_name + '</td> <tr>';


                            $('table[id="studentsData"]').append(markup);
                        });
                    }

                });

            }

</script>
<script type="text/javascript">
 
   $(document).on('keyup','#aa,#bb,#cc,#dd,#ee,#ff',function(){

         var aa = $(this).closest('.data').find('#aa').val();
         var bb = $(this).closest('.data').find('#bb').val();
         var cc = $(this).closest('.data').find('#cc').val();
         var dd = $(this).closest('.data').find('#dd').val();
         var ee = $(this).closest('.data').find('#ee').val();
         var ff = $(this).closest('.data').find('#ff').val();
         var aaa = parseInt(aa);
         var bbb = parseInt(bb);
         var ccc = parseInt(cc);
         var ddd = parseInt(dd);
         var eee = parseInt(ee);
         var fff = parseInt(ff);
         var gg = $(this).closest('.data').find('#gg').val();
         var hh = $(this).closest('.data').find('#hh').val();
         var ii = $(this).closest('.data').find('#ii').val();
         var ggg = parseInt(gg);
         var hhh = parseInt(hh);
         var iii = parseInt(ii);
         var subin= ggg + hhh + iii;
         
         var newvalue = aaa + bbb + ccc + ddd + eee + fff;
         var newvaluez = newvalue - subin;
           $('#sumtotal').val(newvaluez);
     
     });
   $(document).on('keyup','#gg,#hh,#ii',function(){
         var aa = $(this).closest('.data').find('#aa').val();
         var bb = $(this).closest('.data').find('#bb').val();
         var cc = $(this).closest('.data').find('#cc').val();
         var dd = $(this).closest('.data').find('#dd').val();
         var ee = $(this).closest('.data').find('#ee').val();
         var ff = $(this).closest('.data').find('#ff').val();
         var aaa = parseInt(aa);
         var bbb = parseInt(bb);
         var ccc = parseInt(cc);
         var ddd = parseInt(dd);
         var eee = parseInt(ee);
         var fff = parseInt(ff);
         
         var newvalue = aaa + bbb + ccc + ddd + eee + fff;

         var gg = $(this).closest('.data').find('#gg').val();
         var hh = $(this).closest('.data').find('#hh').val();
         var ii = $(this).closest('.data').find('#ii').val();
         var ggg = parseInt(gg);
         var hhh = parseInt(hh);
         var iii = parseInt(ii);
         var subin= ggg + hhh + iii;
         var newvaluez = newvalue - subin;
           $('#sumtotal').val(newvaluez);
     
     });
   
</script>

@endsection