@extends('layouts.hmsmain')
@section('content')
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
      <style >
          body
          {
            background-color: white;
        }
        th, td ,tr{
            border: 1px solid  gray ;
            border-collapse: collapse;
        }
table{
    outline: 1px solid  gray;
}
 tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}            </style>
   </head>
   <body>
   
    <h2 style="text-align:center; text-shadow: 2px 1px;">Edit User Details </h2>
    <hr class="mb-4">.
    <div class="container-fluid">
        <div class="row sm">
            <div class="col-sm-4 " >
                <label>User Code:</label>
                 <input type="text" id="code" name="code" value=""size="40">
                </div><br><br>
                <div class="col-sm-4 " > 
                    <label>Name:</label> 
                    <input type="text" id="code" name="code" value=""size="40">
                </div>
            </div>
        </div>


    




    </body>
</html>

  @endsection
      