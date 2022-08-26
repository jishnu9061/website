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
    	
      <div class="" style="height: 50px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;">
        <div class="row">
            <div class="col-md-3">
                  <h5 style="color: red;text-align: center;">Department: {{$dep}}</h5> 
            </div>
            <div class="col-md-5">
                <h5 style="color: red;text-align: center;" id="ct6"></h5> 
            </div>
            <div class="col-md-4">
                <h5 style="color: red;text-align: center;">Total Que: {{$quecount}}</h5> 
            </div>
        </div>
		

	</div>


        
            
        </div>
         <div class="row" style="padding-left:10px;padding-right: 10px;">

       @foreach($doctors as $doctor)

    <div class="col-md-2">
        
    <div  style="height: 60px;border: 1px solid #8D6851;border-radius: 10px;padding:0; padding-top: 8px; background-color: black;" > 
    <h4 style="color:#ececec;text-align: center;">{{$doctor->name}}</h4> 
    </div>
    <div  style="height: 105px;border: 1px solid grey;border-radius: 10px;padding:0;padding-top: 8px; background-color: black;">
    
    <h1 style="color: red;text-align: center;padding-top: 15px;">{{$doctor->serve}}</h1> 

    </div>

    </div>
      @endforeach
        <?php 
        $fil=6-$filcount;
        ?>
@for($i=0;$i<$fil;$i++)
  <div class="col-md-2">
        
    <div  style="height: 60px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;" >
    
    <h4 style="color:#ececec;text-align: center;">--</h4> 

    </div>
    <div  style="height: 105px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;" >
    
    <h4 style="color: red;text-align: center;padding-top: 10px;">--</h4> 

    </div>

    </div>
@endfor
        
      
        
 </div>
 <div class="row" style="padding-left:15px;padding-right: 15px;">

	   @foreach($depqueue as $queue)
    
    <div class="col-md-1" style="height: 105px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;" >
	
	<h4 style="color: red;text-align: center;">{{$queue->token}}</h4> 
    </div>
		@endforeach
        <?php 
        $var=60-$quecount;
        ?>

        @for($i=1;$i<=$var;$i++)
       <div class="col-md-1" style="height: 105px;border: 1px solid grey;border-radius: 10px;padding-top: 8px; background-color: black;" >
    
    <h4 style="color: red;text-align: center;">--</h4> 
    </div>
        @endfor
 </div>
		


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
