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
        /* h2
        {
            font-size:large;
            font-weight:bold;
             color:rgb(13, 1, 56); 
             background-color:rgb(177, 127, 62);
             padding:15px;
            } */
         .container{
         margin-left:0px;
         width:auto;
         border:1px solid black;
         height:100%;
         }
        
         .col-sm
         {
        margin-left:2px;
         margin-top:6px;
         width:400px;
         /* background-color:#f0e7ce;  */
         height:350px;
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
            table{
                background-color:#f0e7ce; 
                border:hidden;
                font-size:small;
                color:black;
            
            }
           th,td,tr{
            border:hidden;
            color:black;

           }
       </style>
   </head>
   <body>
    <!-- <h2 class="text-center">Configuration Details</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Configuration Details</h2>
      
  <hr class="mb-4">.
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3> Appearences:</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width:30%">Logo Width:</td>
                            <td><input type="text"  id="" name="lwidth"value=""style="width:100%"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Logo Height:</td>
                            <td> <input type="text"  id="" name="lheight"value=""style="width:100%"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Company Stamp Height:</td>
                            <td>  <input type="text"  id="" name="csheight"value=""style="width:100%"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Company Stamp Width:</td>
                             <td><input type="text"  id="" name="cswidth"value=""style="width:100%"></td>
                            </tr>
                            <tr>
                                <td style="width:30%">Background Color:</td>
                                <td><input type="text"  id="" name="bcolor"value=""style="width:100%"></td>
                            </tr>
                            <tr>
                                <td style="width:30%">Client Numbering Method:</td>
                                <td> 
                                    <select type="text" value="" id="" name="cnmethod"style="width:100%">
                                    <option>Select</option>
                                    <option>Auto Numbering</option>
                                    <option>...</option>
                                </select>
                            </td>
                         </tr>
                         <tr>
                            <td style="width:30%">File Approval Method:</td>
                            <td> 
                                <select type="text" value="" id="" name="fam"style="width:100%">
                                <option>Select</option>
                                <option>Automatic Approval</option>
                                <option>..</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:30%">Branch Option:</td>
                        <td> 
                            <select type="text" value="" id="" name="boptn"style="width:100%">
                            <option>Select</option>
                            <option>Branches Dependent</option>
                            <option>...</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%">Instruction Approval Option:</td>
                    <td> 
                        <select type="text" value="" id="" name="iao"style="width:100%">
                        <option>Select</option>
                        <option>Approve All Instruction</option>
                        <option>...</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-sm">
     <h3>Client Portal:</h3>
      <table class="table">
        <tbody>
          
        <tr>
            <td style="width:30%">Client Portal Logo Area Background Color:</td>
            <td><input type="text"  id="" name="clbcolor"value=""style="width:100%"></td>
        </tr>
        
        <tr>
            <td style="width:30%">Client Portal Header Background Color:</td>
            <td> <input type="text"  id="" name="chbcolor"value=""style="width:100%"></td>
        </tr>
        <tr>
            <td style="width:30%">Show File Process (Client Portal):</td>
            <td> 
             <select type="text" value="" id="" name="fileprocess"style="width:100%">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Invoices (Client Portal):</td>
            <td> 
             <select type="text" value="" id="" name="invoices"style="width:100%">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Payments (Client Portal):</td>
            <td> 
             <select type="text" value="" id="" name="payment"style="width:100%">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Documents (Client Portal):</td>
            <td> 
             <select type="text" value="" id="" name="documents"style="width:100%">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Approve File Progress for Client Portal:</td>
            <td> 
             <select type="text" value="" id="" name="filecportal"style="width:100%">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Other Associate Coloumn:</td>
            <td> 
             <select type="text" value="" id="" name="acoloumn"style="width:100%">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

         </tbody>
         
      </table> 
     
        </div>

        </div>

<br>
<br>
<br>
<br>        
<br>
<br>

<div class="row">
    <div class="col-sm">
     <h3>Mail Configurations:</h3>
     <table class="table">
        <tbody>
          
        <tr>
            <td style="width:30%">Mail Protocol:</td>
            <td> <select type="text" value="" id="" name="mprotocol"style="width:100%">
    <option>Select</option>
    <option>STMP</option>
    <option>...</option>
    </select></td>
        </tr>
          
        <tr>
            <td style="width:30%">SMPT Server Address:</td>
            <td><input type="text"  id="" name="saddress"value=""style="width:100%"></td>
        </tr>

          <tr>
            <td style="width:30%">SMPT Port Number:</td>
            <td><input type="number"  id="" name="pnum"value=""style="width:100%"></td>
        </tr>
          
        <tr>
            <td style="width:30%">STMP Authentication:</td>
            <td>   <select type="text" value="" id="" name="sauthntictn"style="width:100%">
    <option>Select</option>
    <option>True</option>
    <option>...</option>
    </select></td>
        </tr>
            
        <tr>
            <td style="width:30%">SMTP Secure:</td>
            <td>   <select type="text" value="" id="" name="ssecure"style="width:100%">
    <option>Select</option>
    <option>TSL</option>
    <option>...</option>
    </select></td>
        </tr>

       
        </tbody>
      </table>
        </div>
      <br>

     
      
    <div class="col-sm">
     <h3>Invoice:</h3>
      <table class="table">
        <tbody>
          
       
    </tbody>
      </table> 

        </div>
        </div>
        
        <input  type="submit"value="Update" name="Submit"style="background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); ">
  
  <input type="button"value="Cancel" name="cancel"style="background-color:rgb(13, 1, 56);color: rgb(238, 196, 105); ">
        </div>
        </body>
</html>
  @endsection
      












        <!--<div class="col-sm">
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

    <label for="payments"style="color:black;;margin-left:2px;font-size:x-small; width:200px;">Show Payments (Client Portal):</label>
    <select style="width:150px;height:20px;color:black;font-size:x-small;"type="text" value="" id="payments" name="payments">
    <option>Select</option>
    <option>Yes</option>
    <option>No</option>
    </select>
    
    <label for="documents"style="color:black;margin-left:2px;font-size:x-small; width:200px;">Show Documents (Client Portal):</label>
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
    
    <label for="mail_portal"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Mail Protocol:</label>
    <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="mportal" name="mportal">
    <option>Select</option>
     <option>STMP</option>
     </select>

     <label for="server_address"style="color:black;margin-left:2px;font-size:x-small; width:150px;">SMPT Server Address:</label>
     <input type="email"  id="seraddress" name="seraddres"value=""style="width:200px;height:20px;">
        
     <label for="port_number"style="color:black;margin-left:2px;font-size:x-small; width:150px;">SMPT Port Number:</label>
     <input type="number"  id="portnum" name="portnum"value=""style="width:200px;height:20px;">
     
     <label for="authentication"style="color:black;margin-left:2px;font-size:x-small; width:150px;">STMP Authentication:</label>
     <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="authentication" name="authentication">
     <option>Select</option>
     <option>True</option>
    </select>
    
    <label for="Secure"style="color:black;margin-left:2px;font-size:x-small; width:150px;">SMTP Secure:</label>
    <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="secure" name="secure">
    <option>Select</option>
    <option>TSL</option>
</select>
</div> 
  </div>

  <div class="row">
  <div class="col-sm">
    <h3>Mail Configuration:</h3>
    
    <label for="mail_portal"style="color:black;margin-left:2px;font-size:x-small; width:150px;">Mail Protocol:</label>
    <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="mportal" name="mportal">
    <option>Select</option>
     <option>STMP</option>
     </select>

     <label for="server_address"style="color:black;margin-left:2px;font-size:x-small; width:150px;">SMPT Server Address:</label>
     <input type="email"  id="seraddress" name="seraddres"value=""style="width:200px;height:20px;">
        
     <label for="port_number"style="color:black;margin-left:2px;font-size:x-small; width:150px;">SMPT Port Number:</label>
     <input type="number"  id="portnum" name="portnum"value=""style="width:200px;height:20px;">
     
     <label for="authentication"style="color:black;margin-left:2px;font-size:x-small; width:150px;">STMP Authentication:</label>
     <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="authentication" name="authentication">
     <option>Select</option>
     <option>True</option>
    </select>
    
    <label for="Secure"style="color:black;margin-left:2px;font-size:x-small; width:150px;">SMTP Secure:</label>
    <select style="width:200px;height:20px;color:black;font-size:x-small;"type="text" value="" id="secure" name="secure">
    <option>Select</option>
    <option>TSL</option>
</select>
</div> 
  </div> -->
    


   