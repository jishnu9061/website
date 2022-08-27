<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zuramai.github.io/mazer/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:15:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.html" type="image/x-icon">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div id="app">
    	<div style="height: 60px;">
    		
    	</div>
      <div class="" style="height: 50px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;">
		<h5 style="color: red;text-align: center;" id="ct6"></h5> 

	</div>

    <div class="row" style="padding-left:20px;padding-right:20px;border:40px;">
			<?php $__currentLoopData = $queues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $queue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="col-lg-2 col-md-2" >
     <div style="height: 50px;border: 1px solid grey;padding-top: 8px; background-color: black;">
	
	<h6 style="color: grey;text-align: center;"><?php echo e($queue[0]->Department); ?></h6> 
    </div>
    <div style="height: 100px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;">
	
	<h4 style="color: red;text-align: center;"><?php echo e($queue[0]->token); ?></h4> 
    </div>
     <div style="height: 100px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;">
	
	<h4 style="color: red;text-align: center;">--</h4> 
    </div>
     <div style="height: 100px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;">
	
	<h4 style="color: red;text-align: center;">--</h4> 
    </div>
    </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		


</div>

    </div>
    <script>function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()
</script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:16:21 GMT -->

</html>
<?php /**PATH C:\xampp\htdocs\multi-hospital\resources\views/counter/counter.blade.php ENDPATH**/ ?>