
@extends('layouts.hmsmain')
@section('content')
<html>
  
   <head>

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
 /* tr:nth-child(odd)
{
    background-color:rgb(198, 195, 211);
}            */
 </style>
   </head>
   <body>
    <div>
   <div class="container">
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <!-- <h2 style="text-align:center; text-shadow: 2px 1px;">Menu Access Configuration</h2>
 <hr class="mb-4">. -->
 <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Menu Access Configuration</u></b></span></div><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        
            </div>
            <br>

<h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">WakiliCMS Menu Configuration</h3>
<br>
<form>
<div class="table-responsive"> 
           
  <table class="table table-bordered" id="new-item">
    <thead>          
                        <tr>
                        <th class="text-center" >*</th>
                        <th class="text-center" >Description</th>
                        <th class="text-center" >ADM</th>
                        <th class="text-center">PTN</th>
                        <th class="text-center" >ADV</th>
                        <th class="text-center" >ACC</th>
                        <th class="text-center">BDM</th>
                        <th class="text-center" >HRM</th>
                        <th class="text-center">SEC</th>
                        <th class="text-center" >PPL</th>
                        <th class="text-center" >INT</th>
                        <th class="text-center">CLK</th>
                        <th class="text-center" >LA</th>
                        <th class="text-center">SADV</th>
                        <th class="text-center" >ASSADV</th>
                        <th class="text-center" >RCPT</th>
                        <th class="text-center">SPT</th>
                        <th class="text-center" >PA</th>
                        <th class="text-center">ICT</th>
                        <th class="text-center" >OA</th>
                       
                 </tr>
                </thead>
                <tbody>
            
                    <tr>
                        <td  class="text-center" >1</td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center"></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center" ></td>
                        <td class="text-center"></td>
                     <td  class="text-center" ></td>
                        <td class="text-center" ></td>
                        <td  class="text-center"></td>
                        <td class="text-center" ></td>
                        </tr>
                   </tbody>  
                    </table>
                    <!-- <input type="submit"value="Update" name="submit"style="background-color:rgb(13, 1, 56);color: white;margin-left:50%;">  -->
                </form><br>
               
                <form>
 
</div>

<div class="row">
         <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                          
                        </div>
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        
                            <br>
                            <br>
                        </div>
                    </div>
        </div>

</div>
<br>
</div>  
</body>

</html>
<br>
  @endsection
      
