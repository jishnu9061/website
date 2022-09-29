
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
  <table class="table table-bordered" id="new-item">
    <thead>
  <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax Chart</span></h6><br>
            
                 
                        <tr>
                        <th class="text-center" >No</th>
                        <th class="text-center" >Tax Brand</th>
                        <th class="text-center" >Lower Limit</th>
                        <th class="text-center">Upper Limit</th>
                        <th class="text-center" >Rate(%)</th>
                        <th class="text-center" >Status</th>
                        <th class="text-center">Action</th>
                       
                    </tr>
                </thead>
                <tbody>
            
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                        <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                            <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>  
                        </table><br>
                        <table class="table table-bordered" id="new-item">
                            <thead>
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax Excise</span></h6><br>
                            <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center" >Tax Name</th>
                                <th class="text-center" >Tax Value(%)</th>
                                <th class="text-center" >Status</th>
                                <th class="text-center" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>

                     
                        </table><br>

                        <table class="table table-bordered" id="new-item">
                            <thead>
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax VAT</span></h6><br>
                            <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center" >Tax Name</th>
                                <th class="text-center">Tax Value(%)</th>
                                <th class="text-center" >Tax Ordering</th>
                                <th class="text-center" >Status</th>
                                <th class="text-center" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table><br>

                    <table class="table table-bordered" id="new-item">
                        <thead>
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax WHT</span></h6><br>
                            <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center" >Tax Name</th>
                                <th class="text-center" >Tax Value(%)</th>

                                <th class="text-center" >Status</th>
                                <th class="text-center" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                    
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table><br>
                    <table class="table table-bordered" id="new-item">
                        <thead>
                            <h6 style="text-align:center;color:rgb(13, 1, 56);"><span class="border "style="background-color:rgb(198, 195, 211); "> Tax VAT-WHT</span></h6><br>
                            <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center" >Tax Name</th>
                                <th class="text-center" >Tax Value(%)</th>

                                <th class="text-center" >Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td  class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                                <td  style="color:rgb(13, 1, 56);"></td>
                      
                                <td  style="color:rgb(13, 1, 56);"></td>
                                <td  scope="row"class="text-center"style="color:rgb(13, 1, 56);">
                                 <a href="{{url('#')}}"><i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i>
                                <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                            </table><br>
                          




    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
        </body>
</html>

  @endsection
      














   