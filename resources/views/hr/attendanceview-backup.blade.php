
@extends('layouts.attendancelayout')
@section('content')

<div class="row" style="padding-bottom:24px;padding:15px;">
<div class="col-md-5">
    <form method="post" action="monthwise">
        @csrf
<select id="b" class="form-control" name="year">
@for($i=2022;$i<=2080;$i++)
<option value="{{$i}}">{{$i}}</option>
@endfor
</select>
</div>
<div class="col-md-5">
<select id="b" class="form-control" name="month">

<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>

</select>
</div>
<div class="col-md-2">
    <button type="submit" class="btn btn-primary form-control">Submit</button>
</div>
</form>
</div>
<table class="table table-bordered">
	<th>
        <td><b>Employee Name</b></td>
	@for($i=1;$i<=30;$i++)
<td><b>{{$i}}</b></td>
@endfor
	

	</th>
    @foreach($staffs as $staff)
	<tr class="data">
    <td></td>
		<td>{{$staff->name}}</td>
        @for($i=1;$i<=30;$i++)
<td><select id="mark" 
style="padding: 0.25px;
    margin:0;
    color: #000;
    font-size: 12px;
    background: transparent;
    -webkit-appearance: none;
    border-radius:3px;"
>
  <option value="P">P</option>
  <option value="CL">CL</option>
  <option value="ML">ML</option>
  <option value="A">A</option>
</select> </td>
@endfor
	</tr>
    @endforeach

	</table>
    <script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">

 $(function () {
  $('[data-toggle="popover"]').popover()
})
     $(document).on('change','#mark',function(){
         var a=this.value;
        alert(a);   
            $('.checkz:checked').each(function() {
   var allowanceid=this.value;
   var staffid = $('#staffname').val();
         $(this).prop('disabled', true);
         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
        
         
          $.ajax({
            method:"POST",
            url:"/allowancetostaff",
            data:{
               "_token": "{{ csrf_token()}}",
                'allowanceid':allowanceid,
                'staffid':staffid,
                'status':'allowance',
            },
          
            //success: function (response){
              //  alert(response.status);
            //},


          });
         }) 
     ;
     })
</script>
    @endsection