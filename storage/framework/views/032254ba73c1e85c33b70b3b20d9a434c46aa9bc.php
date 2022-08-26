<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/vendors/iconly/bold.css">
<link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/app.css">
<link rel="stylesheet" href="assets/css/customstyle.css">
<style>
    body{
        background-color:#f4f4f4;
    }
.main{
    margin:27px;
   padding:50px;
    background-color:#fff;
}
.grey{
   
    background-color:#fbfbfb;  
    padding:30px;
}
.cool
{
 padding:30px; 
}
.mainrow{
    padding:20px;
}
.border
{
  border:1px solid black;
  margin:20px;
}
.insideborder
{
  border-left:1px solid #e1e1e1;
  border-right:1px solid #e1e1e1;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5" id="hidethat"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
    <div class="main">
    <div class="row mainrow">
       <div class="col-md-6">
       <h3 style=""><?php echo e(Auth::user()->Hospital); ?></h3>
       </div>
       <div class="col-md-6">
<br>


       </div>
   </div>

   <div class="row grey" >
       <div class="col-md-3">
    <b>Employee Id:<?php echo e($stafidxx); ?></b>
       </div>
       <div class="col-md-3">
      <b>Name:<?php echo e($stafnamexx); ?></b>
       </div>
       <div class="col-md-3">
<b>Email:<?php echo e($stafemailxx); ?></b>
       </div>
       <div class="col-md-3">
<b>Phone:</b>
       </div>
   </div>

   <div class="row border">
       <div class="col-md-4">
    
    <h6 class="p-3"> Salary</h6>
    <hr class="mb-2">
   <table class="table table-responsive">
 
    <tr>
      <td>Basic Pay:</td>
      <td><?php echo e($staffsalary); ?></td>
    </tr>
        <tr>
      <td>Gross Pay:</td>
      <td><?php echo e($grosspay); ?></td>
    </tr>
        <tr>
      <td>Net Pay:</td>
      <td><?php echo e($atlast); ?></td>
    </tr>

  </table>
     </div>
            <div class="col-md-4 insideborder" >


  <h6 class="p-3">Allowances</h6>
  <hr class="mb-2">
  <table class="table table-responsive">
   <?php $__currentLoopData = $staffallowance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
      <td><?php echo e($data->allowancename); ?></td>
            <?php if(isset($data->price)): ?>
      <td><?php echo e($data->price); ?></td>
            <?php elseif(isset($data->percent)): ?>
            <?php
             $bb=$data->percent;
             $reduct=($bb/100)*$staffsalary;
            ?>
            <td><?php echo e($reduct); ?></td>

            <?php endif; ?>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
     </div>
            <div class="col-md-4">

   <h6 class="p-3">Deductions</h6>
   <hr class="mb-2">
<table class="table table-responsive">
         <?php $__currentLoopData = $staffreduction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><?php echo e($data->allowancename); ?></td>
            <?php if(isset($data->price)): ?>
            <td><?php echo e($data->price); ?></td>
            <?php elseif(isset($data->percent)): ?>
            <?php
             $bb=$data->percent;
             $reduct=($bb/100)*$staffsalary;
            ?>
            <td><?php echo e($reduct); ?></td>

            <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td>
            Loans
          </td>
          <td>
            <?php echo e($loansum); ?>

          </td>
        </tr>
                <tr>
          <td>
            Leaves
          </td>
          <td>
            <?php echo e($final); ?>

          </td>
        </tr>
 </table>

     </div>


       

</div>
   <div class="row ">
       <div class="col-md-4">
        </div>
               <div class="col-md-4">
        </div>
               <div class="col-md-4">

        </div>
      </div>
   </div>
<!--          <div class="">
Allowances:<br>
Reduction:  <br>         
Salary:<br>

       </div>
       <div class="">
       <?php echo e($totalallowsum); ?><br>
       <?php echo e($totalreductsum); ?><br>
       <?php echo e($staffsalary); ?><br> 
     </div> -->
    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\erp-globaleyet\resources\views/hr/stafspayslip.blade.php ENDPATH**/ ?>