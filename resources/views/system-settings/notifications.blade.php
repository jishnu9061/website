
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
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">WakiliCMS Notification Config </h2>
    <hr class="mb-4">.
  <table class="table" >

                        <tr>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Item</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Email Notification</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">SMS Notification</th>
                    </tr>
             
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);">Leave Application Process</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);">Staff Advance</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">3</td>
                        <td  style="color:rgb(13, 1, 56);">Staff Loan</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">4</td>
                        <td style="color:rgb(13, 1, 56);">File Instructions Notification</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">5</td>
                        <td  style="color:rgb(13, 1, 56);">Office Instructions Notification</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">6</td>
                        <td  style="color:rgb(13, 1, 56);">File Notifications</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">7</td>
                        <td  style="color:rgb(13, 1, 56);">Invoice Notifications</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">8</td>
                        <td  style="color:rgb(13, 1, 56);">Credit Note notifications</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">9</td>
                        <td  style="color:rgb(13, 1, 56);">Quatation Notifications</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                     <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">10</td>
                        <td  style="color:rgb(13, 1, 56);">Supplier Invoice Notifications</td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
                    
                            </table><br>
                          
        </body>
</html>

  @endsection
      














   