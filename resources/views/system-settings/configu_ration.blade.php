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
         .col-sm
         {
        margin-left:2px;
         margin-top:6px;
         width:400px;
         background-color:#f0e7ce; 
         height:300px;
         }
         .container2{
        margin-left:500px;
        margin-bottom:1000px;
         width:400px;
         background-color:#f0e7ce; 
         height:400px;
         }
         .container3{
        margin-left:500px;
        margin-bottom:1000px;
         width:400px;
         background-color:#f0e7ce; 
         height:250px;
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
       </style>
   </head>
   <body>
    <h2>Configuration Details</h2>

    <div class="container">
  <div class="row">
    <div class="col-sm">
     <h3> Appearences:</h3>
      <label for="logo_width"style=" color:black;margin-left:2px;font-size:x-small; width:150px;">Logo Width:</label>
      <input type="text"  id="lwidth" name="lwidth"value=""style="width:150px;height:20px;">
      
      <label for="logo_height"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Logo Height:</label>
      <input type="text"  id="lheight" name="lheight"value=""style="width:150px;height:20px;">

      <label for="c_stsmp_height"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Company Stamp Height:</label>
      <input type="text"  id="csheight" name="csheight"value=""style="width:150px;height:20px;">

      <label for="c_stsmp_width"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Company Stamp Width:</label>
      <input type="text"  id="cswidth" name="cswidth"value=""style="width:150px;height:20px;">

      <label for="c_stsmp_width"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Company Stamp Width:</label>
      <input type="text"  id="cswidth" name="cswidth"value=""style="width:150px;height:20px;">

      <label for="background_color"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Background Color:</label>
      <input type="text"  id="bcolor" name="bcolor"value=""style="width:150px;height:20px;">

      <label for="client_number_method"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Client Numbering Method:</label>
      <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="cnummethd" name="cnummethd">
      <option>Select</option>
      <option>Auto Numbering</option>
    </select>
    
    <label for="file_apprvl_method"style="color:black;margin-left:2px;font-size:x-small; width:150px;">File Approval Method:</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="famethd" name="famethod">
    <option>Select</option>
    <option>Automatic Approval</option>
     </select>
     <label for="branch_option"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Branch Option:</label>
     <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="boption" name="boption">
     <option>Select</option>
     <option>Branches Dependent</option>
    </select>
    <label for="instnappoptn"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Instruction Approval Option:</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="inappoptn" name="inappoptn">
    <option>Select</option>
    <option>Approve All Instructions</option>
</select>
        </div>

<div class="col-sm">
    <h3>Client Portal:</h3>
    <label for="cp_logo"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Client Portal Logo Area Background Color:</label>
    <input type="text"  id="cplogo" name="cplogo"value=""style="width:150px;height:20px;">
    
    <label for="cp_header"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Client Portal Header Background Color:</label>
    <input type="text"  id="cpheader" name="cpheader"value=""style="width:150px;height:20px;">
    
    <label for="file_process"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Show File Process (Client Portal):</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="fileprocess" name="fileprocess">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>

    <label for="invoices"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Show Invoices (Client Portal):</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="invoices" name="invoices">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>

    <label for="payments"style="color:black;;margin-left:2px;font-size:x-small; width:200px;">Show Payments (Client Portal)</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="payments" name="payments">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
    
    <label for="documents"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Show Documents (Client Portal)</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="documents" name="documents">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
    
    <label for="file_progress"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Approve File Progress for Client Portal:</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="fprogress" name="fprogress">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>

    <label for="other_associate"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Show Other Associate Coloumn:</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="otherassociate" name="otherassociat">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</div>

    <div class="col-sm">
    <h3>Mail Configuration:</h3>
    
    <label for="mail_portal"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:150px;">Mail Protocol:</label>
    <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="mportal" name="mportal">
    <option>Select</option>
     <option>STMP</option>
     </select>

     <label for="server_address"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:150px;">SMPT Server Address:</label>
     <input type="email"  id="seraddress" name="seraddres"value=""style="width:200px;height:20px;">
        
     <label for="port_number"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:150px;">SMPT Port Number:</label>
     <input type="number"  id="portnum" name="portnum"value=""style="width:200px;height:20px;">
     
     <label for="authentication"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:150px;">STMP Authentication:</label>
     <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="authentication" name="authentication">
     <option>Select</option>
     <option>True</option>
    </select>
    
    <label for="Secure"style="color:rgb(13, 1, 56);margin-left:2px;font-size:x-small; width:150px;">SMTP Secure:</label>
    <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="secure" name="secure">
    <option>Select</option>
    <option>TSL</option>
</select>
</div>
  </div>

    
   </body>
</html>
  @endsection

   