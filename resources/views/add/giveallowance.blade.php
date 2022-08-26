@extends('layouts.hmsmain')
@section('content')
<div style="height: 50px;">
	
</div>
<div class="row">
   <div class="col-md-6 col-lg-6">
      <div class="container">

     
         <div style="height: 15px;"></div>
         <h6 style="text-align: center;">{{$staffdata->name}}</h6> 
         <hr class="mb-4">
         <input type="hidden" name="staffid" id="staffname" value="{{$staffdata->uniqueid}}">
         <div style="height: 10px;"></div>
         <button id="testing" class="btn btn-secondary btn-block">Submit</button>
      </div> 
   </div>
    <div class="col-md-6 col-lg-6">
      <table class="table table-bordered">
   <tbody>
   
      
      @foreach($allowancedata as $data)
      <tr>
         
         <td>{{$data->allowancename}}</td>
         <input type="hidden" name="{{$data->allowancename}}" value="{{$data->allowancename}}">
         <td><input type="checkbox" class="checkz" name="aaa" value="{{$data->id}}"></td>
        
      </tr>
      @endforeach
  
     
   </tbody>
</table>
   </div>
</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript">
 $(function () {
  $('[data-toggle="popover"]').popover()
})


     $(document).on('click','#testing',function(){
      $(this).text(' submited '); 
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