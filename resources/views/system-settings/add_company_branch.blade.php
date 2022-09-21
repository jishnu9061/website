@extends('layouts.hmsmain')
@section('content')

<!DOCTYPE html>
<html lang="en">
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
       
        font-size:medium;
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
/* font-family:monospace; */
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

      
        </style>

</head>
<body>
<!-- <h2>Add Company Branch</h2> -->
<h2 style="text-align:center; text-shadow: 2px 1px;">Add Company Branch</h2>
    <hr class="mb-4">.
<div class="container">
        <form action="#">
            <div class="form-group">
                <label for="Branch No"style="color:rgb(13, 1, 56);">Branch No:</label>
                <input type="number"  id="bnum" name="bnum"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="Branch Code"style="color:rgb(13, 1, 56);">Branch Code:</label>
                <input type="text"  id="bcode" name="bcodes"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="Branch Name"style="color:rgb(13, 1, 56);">Branch Name:</label>
                <input type="text"  id="bname" name="bname"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="Postal Address"style="color:rgb(13, 1, 56);">Postal Address:</label>
                <input type="text"id="padd" name="padd"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="tel"style="color:rgb(13, 1, 56);">Tel:</label>
                <input type="number"  id="tel" name="tel"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="mobile"style="color:rgb(13, 1, 56);">Mobile:</label>
                <input type="number"  id="mobile" name="mobile"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="fax"style="color:rgb(13, 1, 56);">Fax:</label>
                <input type="text"  id="fax" name="fax"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="town"style="color:rgb(13, 1, 56);">Town:</label>
                <input type="text" id="town" name="town"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="email"style="color:rgb(13, 1, 56);">Email:</label>
                <input type="email"  id="email" name="email"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="website"style="color:rgb(13, 1, 56);">Website:</label>
                <input type="text" id="website" name="website"value=""size="50"><br><br>
            </div>

            <div class="form-group">
                <label for="physical address"style="color:rgb(13, 1, 56);">Physical Address:</label>
                <input type="text" id="phadd" name="phadd"value=""size="50"><br><br>
            </div>

        
            <input  type="submit"value="Save" name="Submit"style="background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); ">
  
  <input type="button"value="Close" name="close"style="background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); ">

    </div>
    </form>
    <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form>
   
    
    </body>
</html>
@endsection