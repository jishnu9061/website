
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
    <h2 style="text-align:center; text-shadow: 2px 1px;">Tax Chart</h2>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Settings
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="add_tax_chart">Add Tax Chart</a>
    <a class="dropdown-item" href="add_tax_excise">Add Tax Excise</a>
    <a class="dropdown-item" href="add_tax_vat">Add Tax VAT</a>
    <a class="dropdown-item" href="add_tax_wht">Add Tax WHT</a>
    <a class="dropdown-item" href="add_tax_wht-vat">Add Tax WHT-VAT</a>
  </div>

  <a href="{{('')}}"><button class="btn btn-primary"style="margin-left:75%;" type="button">
    Print
  </button></a>
  </div>
  <hr class="mb-4">.
  <table class="table" >
  <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax Chart</span></h6><br>
            
                 
                        <tr>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Brand</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Lower Limit</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Upper Limit</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Rate(%)</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Action</th>
                       
                    </tr>
             
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td class="text-center" style="color:rgb(13, 1, 56);">A</td>
                        <td  style="color:rgb(13, 1, 56);">0.00</td>
                        <td  style="color:rgb(13, 1, 56);">424554</td>
                        <td  style="color:rgb(13, 1, 56);">10.0</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">3</td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </table><br>
                        
                        <table class="table" >
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax Excise</span></h6><br>
                            <tr>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Name</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Value(%)</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Action</th>
                            </tr>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>

                        <tr>
                            <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                            <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                              <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                              <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>

                        <tr>
                            <td  class="text-center" style="color:rgb(13, 1, 56);">3</td>
                            <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                              <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        
                        </table><br>

                        <table class="table" >
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax VAT</span></h6><br>
                            <tr>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Name</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Value(%)</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Ordering</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Action</th>
                            </tr>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>

                        <tr>
                            <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                            <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                              <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                              <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>

                       
                        <tr>
                            <td  class="text-center" style="color:rgb(13, 1, 56);">4</td>
                            <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  style="color:rgb(13, 1, 56);"></td>
                            <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                               <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                               <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
</table><br>
                        <table class="table" >
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax WHT</span></h6><br>
                            <tr>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Name</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Value(%)</th>

                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Action</th>
                            </tr>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                    
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
</table><br>
                            <table class="table" >
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax VAT-WHT</span></h6><br>
                            <tr>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Name</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Tax Value(%)</th>

                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                                <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Action</th>
                            </tr>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                      
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            </table><br>
                          




    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
        </body>
</html>

  @endsection
      














   