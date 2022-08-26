@extends('layouts.hmsmain')
@section('content')
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="container">
	<br>
    <div class="col-md-2">
        <button href="#" class="edits" data-toggle="modal" id="patient" data-bs-toggle="modal"
        data-bs-target="#default" class="btn btn-block btn-secondary">Add</button>
      </div>
      <div class="table-responsive">
<table class="table table-hover" id="allpatients" style="margin-top: 40px;">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">View/Edit</th>
      <th scope="col">Delete</th>
        
    </tr>
  </thead>
  <tbody>
  
 @foreach($labprofiles as $lab)
      <tr class="product_data" id="data">
          <td id="name">{{$lab->id}}</td>
          <td id="labnamex">{{$lab->name}}</td> 
          <!--<td><a href="#" class="view" data-toggle="modal"  data-bs-toggle="modal" data-bs-target="#view"><i class="fas fa-edit"></i></a></td> -->
          <input type="hidden" id="amb_id" value="{{$lab->id}}" name="">
          <td><a href="#" class="edits" data-toggle="modal" id="amb_edit" data-bs-toggle="modal" data-bs-target="#edit"><i class="fas fa-edit"></i></a></td>
          <td><a href="{{ url('dellabprof'.$lab->name) }}"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
 @endforeach
   
    
   
  </tbody>
</table>
      </div>
</div>
  <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title bb" id="myModalLabel1">Add Lab Tests</h5> 
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                   <form action="{{url('labprofile')}}" method="post"> 
                                     @csrf
                                    <div class="modal-body">
                                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Profile Name</label>
			                <input type="text" class="form-control" name="labtestname" placeholder="" required>
                        </div>


                                        <table class="table table-borderless  order-list" id="tab_logic">
                                            <thead>
                                                <tr>
                                                    <th>Tests</th>
                                           <th></th>
            
                                                </tr>
                                              
                                            </thead>
                                                <tbody>
                                                    <tr>
                                             <td style="width:auto"> <select class="form-control select_group product"data-row-id="row_3" id="              product_detailes" name="testname[]"  style="width:100%;"  ><?php foreach ($labtests as $key):?>
                                            <option value="<?php echo $key->name ?>"><?php echo $key->name;?></option>
                                                                        <?php endforeach;?> 
                                                                    </select>
                                                        </td>
                                                
                                                        
                                                        <td> <input type="button" class="add_Row adRow" id="add_Row" value="Add"></td>
                                                    </tr>    
                                                </tbody>
                                        </table>
                        </div>
                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" style="width:25%">Save</button>
                                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                      </form>
                                </div>
                            </div>
                        </div>

  
                        <div class="modal fade text-left" id="edit" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                     
                                    <h5 class="modal-title bb" id="myModalLabel1">edit  </h5>
                                       
                                       
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                     <form action="{{url('labprofile')}}" method="post" > 
                                     @csrf
                                    <div class="modal-body" id="filldatax">
                                        
                                         <div class="card-body" >
                                
                                    
                        <div class="form-group mb-3">
                            <input type="hidden" id="id" name="ambu_id">
                            <label> Name</label>
                      <input type="text" class="form-control" name="vname" id="vname">
                        </div>
       
   
                        </div>
                        </div>            

                                  </form>
                                     
                     
                                </div>
                            </div>
                        </div>                        
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
</script>

<!-- Table add row -->
<script type="text/javascript">
  $(document).ready(function() {
  var counter = 0;

  $("#add_Row").on("click", function() {
    var newRow = $("<tr>");
    var cols = "";

    cols +='<td><select name="testname[]" class="form-control select2" style="width:100%;><option value="">Select</option> <?php foreach($labtests as $row):?><option value="<?php echo $row->name ;?>"><?php echo $row->name;?> </option><?php endforeach;?></select></td>'
   
    cols += '<td><button type="button" class="add_Row adRow ibtnDel " style="width:auto;"><i class="fas fa-backspace"></i></button></a></td>';
    newRow.append(cols);

    var defVal = $("select[name=acctname]").find(":selected").val();
    if (defVal) {
      $("select[name=accountName]").find(`option[value=${defVal}]`).hide();
    }
    $("table.order-list").append(newRow);
    setValCashVal('accountName'.concat(counter));
    bindScript();
    counter++;
  });

  // delete function
  $("table.order-list").on("click", ".ibtnDel", function(_event) {
    $(this).closest("tr").remove();
    counter -= 1
  });

});

     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
       $(document).on('click','#amb_edit',function(){
        var itemvalue = $(this).closest('#data').find('#labnamex').text();
         $.ajax({
            method:"POST",
            dataType:'html',
            url:"/viewlabproff",
            data:{
               
                'searchvalue':itemvalue,
            
            },
          
            success: function (response){
               $("#filldatax").html(response);
            },

          });
       
       })

       

</script>
<script>
    $(function () {
  $('[data-toggle="popover"]').popover()
  })
    $(document).on('click','#h',function(){
    //var itemvalue = $(this).val();
   var vw = $(this).closest('#data').find('#name').text(); 
    $("#gfh").val(h); 
  });
  </script>     

@endsection



