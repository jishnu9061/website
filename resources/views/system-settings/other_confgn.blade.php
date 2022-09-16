@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
     
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
     body
        {
          background-color: #f0e7ce;
          /* font-family:  Arial, Helvetica, sans-serif; */
        }
    h2
    {
    /* font-family:  Arial, Helvetica, sans-serif; */
    font-size:large;
    font-weight:bold;
    color:rgb(13, 1, 56); 
    background-color:rgb(177, 127, 62);
    padding:15px;
    
    }
  
a.btn.btn-primary{
  color: rgb(238, 196, 105);
  background-color:rgb(29, 2, 129);
}
button{
  margin-left:200px;
}


</style>
</head>
<body>
 
<h2>Other Configurations</h2><br><br>

<!-- <p><a href="#">Configurations</a> | <a href="#">Company Branch</a> | <a href="#">Template Category</a> | <a href="#">Letter Types</a> | <a href="#">Payment Items</a> | <a href="#">Courts</a> | <a href="#">Description Selection</a> | <a href="#">Tax Tables</a> | <a href="#">Notifications</a> </p> -->
<div class="container-fluid">
  

<a href="#"  ><button type="button" class="btn btn-primary ">Configurations</button></a><br><br>
<a href="{{url('company_branch')}}"><button type="button" class="btn btn-primary ">Company Branch</button></a><br><br>
<a href="#"  ><button type="button" class="btn btn-primary ">Template Category</button></a><br><br>
<a href="#"  ><button type="button" class="btn btn-primary ">Letter Types</button></a><br><br>
<a href="#"  ><button type="button" class="btn btn-primary ">Payment Items</button></a><br><br>
<a href="#"  ><button type="button" class="btn btn-primary ">Courts</button></a><br><br>
<a href="#"  ><button type="button" class="btn btn-primary ">Description Selections</button></a><br><br>
<a href="#"  ><button type="button" class="btn btn-primary ">Tax Tables</button></a><br><br>
<a href="#"  ><button type="button" class="btn btn-primary ">Notifications</button></a><br><br>

</div>
<!-- <button type="button" class="btn btn-primary btn btn-block">Block level button</button>
<button type="button" class="btn btn-primary btn btn-block">Block level button</button> -->



</body>
</html>
@endsection
