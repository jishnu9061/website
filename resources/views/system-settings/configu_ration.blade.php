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
        h2
        {
            font-size:large;
            font-weight:bold;
             color:rgb(13, 1, 56); 
             background-color:rgb(177, 127, 62);
             padding:15px;
            }
         .container{
         margin-left:0px;
         width:auto;
         border:1px solid black;
         height:2000px;
         }
         .container1{
         margin-left:2px;
         margin-top:6px;
         width:400px;
         background-color:#f0e7ce; 
         height:400px;
         }
         .container2{
        margin-left:500px;
        margin-bottom:1000px;
         width:400px;
         background-color:#f0e7ce; 
         height:400px;
         }
         h3
        {
            font-size:small;
            font-weight:bold;
             color:white;
             background-color:rgb(13, 1, 56);
             padding:10px;
            }
     
            form{
                margin-left:4px;
            }
       
         /* .table1 {
         width:400px;
         height:250px;
         margin:auto;
         font-size:24px;
         border:1px solid #000;
         border-collapse:collapse; }
         .table1 th {
         color:#000;
         vertical-align:middle;
         text-align:center;
         border:1px solid black; }
         .table1  td {
         color:#474747;
         vertical-align:middle;
         text-align:left;
         border:1px solid #000; }
         .table2 {
         width:400px;
         height:250px;
         margin-left:200px;
         font-size:24px;
         border:1px solid #000;
         border-collapse:collapse; }
         .table2 th {
         color:#000;
         vertical-align:middle;
         text-align:center;
         border:1px solid black; }
         .table2  td {
         color:#000099;
         vertical-align:middle;
         text-align:left;
         border:1px solid #000; } */
      </style>
   </head>
   <body>
    <h2>Configuration Details</h2>
      <div class="container">
        <div class="container1">
        <h3>Appearences:</h3>
        <form action="#">
            <div class="form-group">
                <label for="logo_width"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Logo Width:</label>
                <input type="text"  id="lwidth" name="lwidth"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="logo_height"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Logo Height:</label>
                <input type="text"  id="lheight" name="lheight"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="c_stsmp_height"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Company Stamp Height:</label>
                <input type="text"  id="csheight" name="csheight"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="c_stsmp_width"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Company Stamp Width:</label>
                <input type="text"  id="cswidth" name="cswidth"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="background_color"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Background Color:</label>
                <input type="text"  id="bcolor" name="bcolor"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="client_number_method"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Client Numbering Method:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="cnummethd" name="cnummethd">
                <option>Auto Numbering</option>
                <option>......</option>
            </select>
            </div>
            <div class="form-group">
                <label for="file_apprvl_method"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">File Approval Method:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="famethd" name="famethod">
                <option>Automatic Approval</option>
                <option>......</option>
            </select>
            </div>
            <div class="form-group">
                <label for="branch_option"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Branch Option:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="boption" name="boption">
                <option>Branches Dependent</option>
                <option>......</option>
            </select>
            </div>
            <div class="form-group">
                <label for="instnappoptn"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Instruction Approval Option:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="inappoptn" name="inappoptn">
                <option>Branches Dependent</option>
                <option>......</option>
            </select>
            </div>
         </form>
         </div>

         <div class="container2">
        <h3>Client Portal:</h3>
        <form action="#">
            <div class="form-group">
                <label for="logo_width"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Logo Width:</label>
                <input type="text"  id="lwidth" name="lwidth"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="logo_height"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Logo Height:</label>
                <input type="text"  id="lheight" name="lheight"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="c_stsmp_height"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Company Stamp Height:</label>
                <input type="text"  id="csheight" name="csheight"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="c_stsmp_width"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Company Stamp Width:</label>
                <input type="text"  id="cswidth" name="cswidth"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="background_color"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Background Color:</label>
                <input type="text"  id="bcolor" name="bcolor"value=""style="width:275px;height:20px;">
            </div>
            <div class="form-group">
                <label for="client_number_method"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Client Numbering Method:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="cnummethd" name="cnummethd">
                <option>Auto Numbering</option>
                <option>......</option>
            </select>
            </div>
            <div class="form-group">
                <label for="file_apprvl_method"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">File Approval Method:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="famethd" name="famethod">
                <option>Automatic Approval</option>
                <option>......</option>
            </select>
            </div>
            <div class="form-group">
                <label for="branch_option"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Branch Option:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="boption" name="boption">
                <option>Branches Dependent</option>
                <option>......</option>
            </select>
            </div>
            <div class="form-group">
                <label for="instnappoptn"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:100px;">Instruction Approval Option:</label>
                <select style="width:275px;height:20px;color:black;font-size:x-small;"type="text" value="" id="inappoptn" name="inappoptn">
                <option>Branches Dependent</option>
                <option>......</option>
            </select>
            </div>
         </div>
            
              
      </div>
   </body>
</html>
  


    @endsection

   