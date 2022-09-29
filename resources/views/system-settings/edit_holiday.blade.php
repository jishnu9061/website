@extends('layouts.hmsmain')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<style>
     body
        {
    
          margin-left:10px;
          margin-right:10px;
          padding-top:10px;
        }
        /* h2
        {
   
    font-size:large;
    font-weight:bold;
    color:rgb(13, 1, 56); 
    background-color:rgb(177, 127, 62);
    padding:15px;
    
    } */
        .container{
            padding-top:20px;
            margin-top: 50px;
            
        } 
        label
      {
       
        font-size:large;
        width:200px;
        display:inline-block;
        /* font-family: monospace; */
      
        }
        input
        {
          width: 400px;
          height:30px;

        }

        a.button3{
            display : inline-block;
            padding:0.35em 1.2em;
            background-color:rgb(13, 1, 56); 
            margin:0 0.3em 0.3em 0;
            border-radius:0.12em;
            box-sizing: border-box;
            text-decoration:none;
            font-weight:300;
            color:rgb(240, 205, 10);
            text-align:center;
            transition: all 0.2s;
        }


a.button4{
  display : inline-block;
  padding:0.35em 1.2em;
  background-color:#f0e7ce; 
  margin:0 0.3em 0.3em 0;
  border-radius:0.12em;
  border-color: rgb(13, 1, 56); 
  box-sizing: border-box;
  text-decoration:none;
  /* font-family:monospace; */
  font-weight:300;
  color:rgb(13, 1, 56);
  text-align:center;
  transition: all 0.2s;
  outline: auto;
 
  }
  table{
            color:white;
            background-color:rgb(177,127,62);
            border collapse:collapse;
            font-size:16px;
            padding:5px;
            border:5px solid white;
            text-align:center;
        }
        td{
            color:rgb(13, 1, 56);
         }

      
        </style>

</head>
<body>
<!-- <h2>Edit Holidays</h2><br><br> -->
<h2 style="text-align:center; text-shadow: 2px 1px;">Edit Holidays / Weekend Date</h2>
    <hr class="mb-4">.
<!-- <div class="container">
        <form action="#">
            <div class="form-group">
                <label for="Branch No"style="color:rgb(13, 1, 56);">Date:</label>
                <input type="number"  id="bnum" name="bnum"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="Branch Code"style="color:rgb(13, 1, 56);">Day:</label>
                <input type="text"  id="bcode" name="bcodes"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="Branch Name"style="color:rgb(13, 1, 56);">Year:</label>
                <input type="text"  id="bname" name="bname"value=""size="50"><br><br>
            </div> -->

           <table >
                <tr>
                <td>Date:</td>
                    <td><input type="date"  id="date" name="date"value=""></td>
                </tr>
                <tr>
                <td>Day:</td>
                    <td><input type="text"  id="day" name="day"value=""></td>
                </tr>
                <tr>
                <!-- <td>Year:</td>
                    <td><input type="number"  id="year" name="year"value=""></td>
                </tr> -->
            </table><br><br> 
       
 <a href="something" class="button3">Save</a>
<a href="something" class="button4">Close</a>

    </div>
    </form>

    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
    
    </body>
</html>
@endsection