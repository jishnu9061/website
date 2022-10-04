@extends('layouts.hmsmain')
@section('content')
<html>
   <head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <style >
          body
        {
          background-color: white;
        }
    
        
         .col-sm
         {
        margin-left:2px;
         margin-top:6px;
         width:400px;
      
         height:350px;
         }
         
         
         h6
        {
            font-size:small;
            font-weight:bold;
             color:white;
             background-color:#d6ba8a;
             padding:10px;
            }
     
            form{
                margin-left:4px;
            }
            table{
                
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

   <div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Configuration Details</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br> <br>
  
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h6> Appearences:</h6>
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
                                    <option>---Select---</option>
                                    <option>Auto Numbering</option>
                                    <option>Alpha Numeric Code</option>
                                </select>
                            </td>
                         </tr>
                         <tr>
                            <td style="width:30%">File Approval Method:</td>
                            <td> 
                                <select type="text" value="" id="" name="fam"style="width:100%">
                                <option>---Select---</option>
                                <option>Automatic Approval</option>
                                <option>2nd Phase aApproval</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:30%">Branch Option:</td>
                        <td> 
                            <select type="text" value="" id="" name="boptn"style="width:100%">
                            <option>---Select---</option>
                            <option>Branches Dependent</option>
                            <option>Branches Inependent</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%">Instruction Approval Option:</td>
                    <td> 
                        <select type="text" value="" id="" name="iao"style="width:100%">
                        <option>---Select---</option>
                        <option>Approve All Instruction</option>
                        <option>Amount Greater Than Balance</option>
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
  <div class="row">
<div class="col-sm">
     <h6>Client Portal:</h6>
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
    <option>---Select---</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Invoices (Client Portal):</td>
            <td> 
             <select type="text" value="" id="" name="invoices"style="width:100%">
    <option>---Select---</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Payments (Client Portal):</td>
            <td> 
             <select type="text" value="" id="" name="payment"style="width:100%">
    <option>---Select---</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Documents (Client Portal):</td>
            <td> 
             <select type="text" value="" id="" name="documents"style="width:100%">
    <option>---Select---</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Approve File Progress for Client Portal:</td>
            <td> 
             <select type="text" value="" id="" name="filecportal"style="width:100%">
    <option>---Select---</option>
    <option>Yes</option>
    <option>No</option>
    </select>
</td>
        </tr>

        <tr>
            <td style="width:30%">Show Other Associate Coloumn:</td>
            <td> 
             <select type="text" value="" id="" name="acoloumn"style="width:100%">
    <option>---Select---</option>
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
<div class="row">
    <div class="col-sm">
     <h6>Mail Configurations:</h6>
     <table class="table">
        <tbody>
          
        <tr>
            <td style="width:30%">Mail Protocol:</td>
            <td> <select type="text" value="" id="" name="mprotocol"style="width:100%">
    <option>---Select---</option>
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
    <option>---Select---</option>
    <option>True</option>
    <option>...</option>
    </select></td>
        </tr>
            
        <tr>
            <td style="width:30%">SMTP Secure:</td>
            <td>   <select type="text" value="" id="" name="ssecure"style="width:100%">
    <option>---Select---</option>
    <option>TSL</option>
    <option>SSL</option>
    </select></td>
        </tr>

       
        </tbody>
      </table>
        </div>
        </div>
</div>
     <div class="row">
         <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
                        </div>
                    </div>>
        </div>
    
        </body>
</html>
  @endsection
      












    


   