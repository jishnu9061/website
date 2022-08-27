
<?php $__env->startSection('content'); ?>
<head>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
}
.twitter-typeahead, .tt-hint, .tt-input, .tt-menu { width: 100%; }

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes  fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
    <div class="">
        <h3 style="text-align:center"><b><u>Purchase Order Details</u></b></h3><br>
        <div class="">
          <table id="example1" class="table table-bordered table-striped " style="width 100%" >
              <tr>
                <th style="text-align:center">Purchase Date</th>
                  <td style="text-align:center"><?php echo e(date('d-m-Y',strtotime($purchase_order[0]->purchase_date))); ?></td>
              </tr>
              <tr>
                <th style="text-align:center">Order Number</th>
                  <td style="text-align:center"><?php echo e($purchase_order[0]->purchase_orderno); ?></td>
              </tr>
              <?php if($purchase_order[0]->supplier_name): ?>
              <tr>
                <th style="text-align:center">Supplier Name</th>
                  <td style="text-align:center"><?php echo e($purchase_order[0]->supplier_name); ?></td>
              </tr>
              <?php else: ?>
              <tr>
                <th style="text-align:center">Manufacturer</th>
                  <td style="text-align:center"><?php echo e($purchase_order[0]->manufacturer); ?></td>
              </tr>
              <?php endif; ?>
              <tr>
                <th style="text-align:center">Payment Type</th>
                  <td style="text-align:center" ><?php echo e($purchase_order[0]->payment_name); ?></td>
              </tr>
            </table>
          </div>


        </div>
        <br>

      <div class="box-header with-border">
        <h3 style="text-align:center"><b><u>Item Details</u></b></h3><br>
          <div class="box-tools pull-right">
          </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <!-- /.box-header -->
            <table id="example1" class="table table-bordered table-striped" style="width 100%">
              <thead>
                <tr>
                  <th>Items Name</th>
                  <th>Batch Number</th>
                  <th>Quantity</th>
                  <th>Purchase Price</th>
                  <th>Total Price</th>
                </tr>

                </thead>
                <tbody  id="show_data">
                    <?php
                           $grand_total=0;
                       ?>
                    <?php $__currentLoopData = $purchase_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                    <td><?php echo e($row->Item_name); ?></td>
                    <td><?php echo e($row->batch_no); ?></td>
                    <td><?php echo e($row->quantity); ?></td>
                    <td><?php echo e($row->price); ?></td>
                    <td><?php echo e($row->total); ?></td>
                    <?php
                    $grand_total += $row->total;
                ?>
                </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <th></th>
                   <th></th>
                   <th></th>
                   <th>Grand Total</th>
                   <td><?php echo e($grand_total); ?></td>



                </tbody>
                <tbody  id="show_data">
                    <?php
                           $grand_total=0;
                       ?>
                    <?php $__currentLoopData = $purchase_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Advance Amount</th>
                        <td><?php echo e($row->advance_amount); ?></td>
                </tr>
                <?php $__currentLoopData = $purchase_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Pending Amount</th>
                    <td><?php echo e($row->pending_amount); ?></td>
            </tr>





                </tbody>
                </table>


</div>
</div>
<div style="height: 50px;">

</div>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript">
	  $(document).on('input','#price',function(){
$('#percent').prop('readonly', true);

});
	    $(document).on('input','#percent',function(){
$('#price').prop('readonly', true);

});
</script>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>

</div>
<div id="allowances" class="tabcontent">

<div style="height: 50px;">

</div>

<div style="height: 50px;">

</div>
<div class="row">
   <div class="col-md-6 col-lg-6">
      <div class="container">


         

      


   </tbody>
</table>
   </div>
</div>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
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
               "_token": "<?php echo e(csrf_token()); ?>",
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

<div style="height: 50px;">

</div>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript">
	  $(document).on('input','#price',function(){
	  	alert('sdf');
$('#percent').prop('readonly', true);

});
	    $(document).on('input','#percent',function(){
$('#price').prop('readonly', true);

});
</script>



</div>
<div id="deductions" class="tabcontent">

<div style="height: 50px;">

</div>
<div class="row">
   <div class="col-md-6 col-lg-6">
      <div class="container">


         


      


   </tbody>
</table>

   </div>
</div>
<script src="<?php echo e(url('assets/js')); ?>/jquery.min.js"></script>
<script type="text/javascript">
 $(function () {
  $('[data-toggle="popover"]').popover()
})

     $(document).on('click','#testing1',function(){

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
               "_token": "<?php echo e(csrf_token()); ?>",
                'allowanceid':allowanceid,
                'staffid':staffid,
                'status':'reduction',

            },

            //success: function (response){
              //  alert(response.status);
            //},


          });
         })
     ;
     })
</script>


<div style="height: 50px;">

</div>

<script type="text/javascript">
	  $(document).on('input','#price',function(){
	  	alert('sdf');
$('#percent').prop('readonly', true);

});
	    $(document).on('input','#percent',function(){
$('#price').prop('readonly', true);

});
</script>



</div>

<div id="leavecategories" class="tabcontent">
<div style="height: 50px;">

</div>
<div class="row">
	<div class="col-md-6 col-lg-6">
		<form method="post" action="<?php echo e(url('addleavecategory')); ?>">
		<?php echo csrf_field(); ?>

		<input type="" name="allowance1price"  class="form-control" placeholder="Leave Type">
		<input type="" name="allowance1percent" id="percent" class="form-control" placeholder="No of Days per Month">
		<button type="submit" class="btn btn-secondary btn-block">Add Leave Category</button>
	    </form>
	</div>
	<div class="col-md-6 col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Leave Category
					</th>
					<th>
						Days per
					</th>
					<th>
						Percent
					</th>
					<th>
						Delete
					</th>
				</tr>

			</thead>
			<tbody>

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<form method="post" action="<?php echo e(url('reductiondelete')); ?>">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="delete">
					<td><button type="submit" class="fa fa-trash"></button></td>
					</form>
				</tr>


			</tbody>
		</table>
	</div>
</div>
</div>
<div id="loans" class="tabcontent">
<div style="height: 50px;">

</div>

<br>

</div>

<div class="container" style="padding: 50px;">
	 <table class="table table-bordered">
   <thead>
   	  <tr>
   	     <th >Total Amount</th>
   	     <th>Amount Paid</th>
   	     <th>Balance Left</th>
   	     <th >Duration<br>(Months)</th>
   	     <th>Monthly Deduction</th>
   	     <th>Loan Reason</th>
   	     <th>Status</th>
   	  </tr>
   </thead>
   <tbody>
    
      <tr>
         <td id="tot">&nbsp;&nbsp;&nbsp;</td>
         <td></td>
         <td ></td>
         <td id="dur">&nbsp;&nbsp;&nbsp;</td>
         <td></td>
         <td></td>
         <td id="del"></td>
      </tr>
   </tbody>
</table>
</div>

<script type="text/javascript">
	  $(document).on('input','#price',function(){
$('#percent').prop('readonly', true);

});

	    $(document).on('click','#submitloan',function(){
	  var months = $(this).closest('#data').find('#months').val();
	  var loanamount = $(this).closest('#data').find('#loanamount').val();
	  var uniqid = $(this).closest('#data').find('#uniqid').val();
    $('#tot').append((loanamount) + "<br />");
     $('#dur').append((months) + "<br />");
   $('#del').append(("<button id='uf' class='form-control'>del</button>") + "<br />");
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

          $.ajax({
            method:"POST",
            url:"/addloan",
            data:{

                'loanamount':loanamount,
                'months':months,
                'uniqid':uniqid

            },

            //success: function (response){
              //  alert(response.status);
            //},

          });
});
</script>
<script type="text/javascript">
   $(document).on('click','#uf',function(){
    $(this).closest('tr').remove();

  });
</script>


</div>
<div id="dutyschedule" class="tabcontent">
<div style="height: 50px;">

</div>
 <form action="<?php echo e(url('dutyschedule')); ?>">
        <?php echo csrf_field(); ?>
<div>
  <div class="row" style="background-color: #e0eaf4; padding:20px;">
     <div class="col-md-4">
      <p>From</p>
        <input type="date" class="form-control" name="fromdate">
     </div>
     <div class="col-md-4">
      <p>To</p>
      <input type="date" class="form-control" name="todate">
     </div>
     <div class="col-md-4">
      <div style="border: 2px solid white;border-radius:10px;padding: 6px;">
      
       <br>
      </div>
     </div>
  </div>
  <div style="height: 20px;">

  </div>
  <div class="row" style="background-color: #e0eaf4; padding:20px;">
     <div class="col-md-4">
      <p><b>Timings :</b> From</p>
          <select class="custom-select btn btn-light dropdown-toggle col-md-12" name="fromtime" id="inlineFormCustomSelectPref">
    <option selected>from</option>
    <option  class="dropdown-item" value="12:00 AM">12:00 AM</option>
    <option  class="dropdown-item" value="1:00 AM">1:00 AM</option>
    <option  class="dropdown-item" value="2:00 AM">2:00 AM</option>
    <option  class="dropdown-item" value="3:00 AM">3:00 AM</option>
    <option  class="dropdown-item" value="4:00 AM">4:00 AM</option>
    <option  class="dropdown-item" value="5:00 AM">5:00 AM</option>
    <option  class="dropdown-item" value="6:00 AM">6:00 AM</option>
    <option  class="dropdown-item" value="7:00 AM">7:00 AM</option>
    <option  class="dropdown-item" value="8:00 AM">8:00 AM</option>
    <option  class="dropdown-item" value="9:00 AM">9:00 AM</option>
    <option  class="dropdown-item" value="10:00 AM">10:00 AM</option>
    <option  class="dropdown-item" value="11:00 AM">11:00 AM</option>
    <option  class="dropdown-item" value="12:00 PM">12:00 PM</option>
    <option  class="dropdown-item" value="1:00 PM">1:00 PM</option>
    <option  class="dropdown-item" value="2:00 PM">2:00 PM</option>
    <option  class="dropdown-item" value="3:00 PM">3:00 PM</option>
    <option  class="dropdown-item" value="4:00 PM">4:00 PM</option>
    <option  class="dropdown-item" value="5:00 PM">5:00 AM</option>
    <option  class="dropdown-item" value="6:00 PM">6:00 AM</option>
    <option  class="dropdown-item" value="7:00 PM">7:00 PM</option>
    <option  class="dropdown-item" value="8:00 PM">8:00 PM</option>
    <option  class="dropdown-item" value="9:00 PM">9:00 PM</option>
    <option  class="dropdown-item" value="10:00 PM">10:00 PM</option>
    <option  class="dropdown-item" value="11:00 PM">11:00 PM</option>

         </select>
     </div>
     <div class="col-md-4">
      <p>To</p>
      <select class="custom-select btn btn-light dropdown-toggle col-md-12" name="totime" id="inlineFormCustomSelectPref">
    <option selected>to</option>

    <option  class="dropdown-item" value="">12:00 AM</option>
    <option  class="dropdown-item" value="">1:00 AM</option>
    <option  class="dropdown-item" value="">2:00 AM</option>
    <option  class="dropdown-item" value="">3:00 AM</option>
    <option  class="dropdown-item" value="">4:00 AM</option>
    <option  class="dropdown-item" value="">5:00 AM</option>
    <option  class="dropdown-item" value="">6:00 AM</option>
    <option  class="dropdown-item" value="">7:00 AM</option>
    <option  class="dropdown-item" value="">8:00 AM</option>
    <option  class="dropdown-item" value="">9:00 AM</option>
    <option  class="dropdown-item" value="">10:00 AM</option>
    <option  class="dropdown-item" value="">11:00 AM</option>
    <option  class="dropdown-item" value="">12:00 PM</option>
    <option  class="dropdown-item" value="">1:00 PM</option>
    <option  class="dropdown-item" value="">2:00 PM</option>
    <option  class="dropdown-item" value="">3:00 PM</option>
    <option  class="dropdown-item" value="">4:00 PM</option>
    <option  class="dropdown-item" value="">5:00 AM</option>
    <option  class="dropdown-item" value="">6:00 AM</option>
    <option  class="dropdown-item" value="">7:00 PM</option>
    <option  class="dropdown-item" value="">8:00 PM</option>
    <option  class="dropdown-item" value="">9:00 PM</option>
    <option  class="dropdown-item" value="">10:00 PM</option>
    <option  class="dropdown-item" value="">11:00 PM</option>

         </select>
     </div>
     <div class="col-md-4" style="padding-top:40px;" >
      <button type="submit" class="btn btn-secondary btn-block" >Submit</button>
     </div>
  </div>
</div>
</form>

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
                        Action
                    </th>
                </tr>

            </thead>
            <tbody>
            

            </tbody>
        </table>
</div>
<div style="height: 50px;">

</div>
<div class="container" id="hidediv" style="background-color:#eaeeff;padding: 50px;">
<div class="row">
	<div class="col-md-6 col-lg-6">
		

	</div>
</div>
</div>
<script>
    $(document).on('click','.tablinks',function(){
      $("#hidediv").hide();
    })
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.hmsmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\globalerp\resources\views/store/view_purchase_detailes.blade.php ENDPATH**/ ?>