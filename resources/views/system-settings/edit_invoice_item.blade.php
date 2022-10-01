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
    <style>
        
         table{
              
                border:hidden;
                font-size:medium;
                color:black;
            
            }
           th,td,tr{
            border:hidden;
            color:black;

           }
        </style>
    </head>
    <body>
    <!-- <h2 >Add Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Edit Invoice Item</h2>
    <hr class="mb-4">.
    <form>
    <table class="table">
    <tbody>
                       
                        <tr>
                                <td style="width:30%">Type Name:</td>
                                <td><input type="text"  id="" name="typename"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>


                         <tr>
                            <td style="width:30%">Comments:</td>
                            <td><input type="text"  id="" name="comments"value=""style="width:30%;color:rgb(13, 1, 56);background-color:white;"></td>
                        </tr>
                        <tr>
                            <td style="width:30%">Item Category:</td>
                            <td> 
                                <select type="text" value="" id="" name="category"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                                <option>---select---</option>
                                <option>Fees</option>
                                <option>Disbursements w/VAT</option>
                                <option>Disbursements w/o VAT</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:30%">Sales Tax Code:</td>
                            <td> 
                                <select type="text" value="" id="" name="code"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                                <option>---select---</option>
                                <option>Non-Taxable</option>
                                <option>Taxable</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:30%">Income Account:</td>
                            <td> 
                                <select type="text" value="" id="" name="account"style="width:30%;color:rgb(13, 1, 56);background-color:white;">
                                <option>---select---</option>
                                <option>1000====Income from Legal Fees</option>
                                <option>1100====Other Income</option>
                                <option>1101====Other Income - Vatable Disbursements</option>
                                <option>1102====Other Income - Miscellaneous Income</option>
                                <option>1103====Other Income - Interest Earned</option>
                                <option>1104====Other Income - Loan Administration Fees</option>
                                <option>9500====Other Income - Client gets Account Payable - Cooperative Bank</option>
                              
                         
                        </tr>
            </table>
            <div class="class"style="text-align:center;">
    
            <a href="something"><input type="submit"value="Update" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> </a>
            <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

            
    </div>
        </form>
    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
            
</body>
</html>
@endsection