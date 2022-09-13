@extends('layouts.hmsmain')
@section('content')
<html>
    <head>
     
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
     body
        {
          background-color: #f0e7ce;
          font-family:  Arial, Helvetica, sans-serif;
        }
    h2
    {
    font-family:  Arial, Helvetica, sans-serif;
    font-size:large;
    font-weight:bold;
    color:rgb(13, 1, 56); 
    background-color:rgb(177, 127, 62);
    }
   p{
    font-size:large;
   }
    a
    {
        color: rgb(13, 1, 56); 
        font-size:medium;
    }
    h1{
        font-size:large;
    font-weight:bold;
    color:rgb(13, 1, 56); 
    text-align:center;
    }
    
a.button1{

display : inline-block;
padding:0.35em 1.2em;
background-color:rgb(13, 1, 56); 
margin:0 0.3em 0.3em 0;
border-radius:0.12em;
box-sizing: border-box;
text-decoration:none;
font-family:monospace;
font-weight:300;
color:rgb(240, 205, 10);
text-align:center;
transition: all 0.2s;
}
</style>
</head>
<body>
<h2>Other Configurations</h2>
<p><a href="#">Configurations</a> | <a href="#Company Branch">Company Branch</a> | <a href="#">Template Category</a> | <a href="#">Letter Types</a> | <a href="#">Payment Items</a> | <a href="#">Courts</a> | <a href="#">Description Selection</a> | <a href="#">Tax Tables</a> | <a href="#">Notifications</a> </p>

<!-- <div id="Company Branch">
<h1>Company Branch</h1>
<p>


</p>
</div> -->


</body>
</html>
@endsection
