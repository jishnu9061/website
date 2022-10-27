
@extends('layouts.hmsmain')
@section('content')
<html>

   <head>

      <style >
          body
        {
          background-color: white;
        }

   </head>
   <body>
<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>WakiliCMS Notification Config</u></b></span></button><br>
           
     </div>
            <br>
            <br>
    <form>
    <div class="table-responsive">   
    <table class="table table-bordered" id="new-item">
<thead>
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Item</th>
                        <th class="text-center" >Email Notification</th>
                        <th class="text-center" >SMS Notification</th>
                    </tr>
             
</thead>
<tbody>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center">  <input type="checkbox" id="emailnotfn" name="emailnotfn"></td>
                        <td class="text-center">  <input type="checkbox" id="smsnotfn" name="smsnotfn" ></td>
                     </tr>
</tbody>
                    </table>
                    <br>
                    <div class="class"style="text-align:center;">
                    <button type="submit" class="btn btn-primary float:right;" Style="width:10%;">Update</button>
</div > 
</div >   
</form>
        </body>
        </div >   
</html>

  @endsection
      














   