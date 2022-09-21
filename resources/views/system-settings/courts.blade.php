
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
       
        
     
         /* background-color:#f0e7ce;  */
      
             th, td ,tr{
               border: 1px solid  gray ;
                border-collapse: collapse;
}
table{
    outline: 1px solid  gray ;
}
td:nth-child(odd) {
            background-color:rgb(198, 195, 211); 
        }
          
            </style>
   </head>
   <body>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Court List</h2>
        <a href="{{('add_court')}}"><button class="btn btn-primary add-btn">Add Court</button></a>
        <a href="{{('add_court_category')}}"><button class="btn btn-primary add-btn">Add New Court Category</button></a>
  <hr class="mb-4">.
    <!-- <div class="container"> -->
      <div class="mydiv">
             <table class="table" >
                  
                        <tr>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Court Name</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Edit</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Supreme Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);">Supreme Court of Keniya</td>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></td>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Court Of Appeal :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);">Court Of Appeal at Busia </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);">Court Of Appeal at Eldoret </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td class="text-center"  style="background-color:white;color:rgb(13, 1, 56);">3</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);">Court Of Appeal at Kissi </th>
                        <td class="text-center"  style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">High Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Industrial Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Magistrate Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Labours Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">East Africa Court :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Others :</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>

                    <tr>
                        <td colspan="4"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Small Claims Court:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">1</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                    <tr>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);">2</th>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"> </th>
                        <td  class="text-center" style="background-color:white;color:rgb(13, 1, 56);"><a href="{{url('edit_court')}}">Edit</td>
                        <td  style="background-color:white;color:rgb(13, 1, 56);"class="text-center"><input type="radio"></th>
                    </tr>
                </table>
                <div class="class"style="text-align:right;">
                <select style="width:10%;height:100%;color:white;font-size:small;background-color:rgb(13, 1, 56);"type="text" value="" name="type">
    <option>Delete Court</option>
    <option>Active Category</option>
</select>
<input type="button"value="Go" name="close"style="background-color:rgb(13, 1, 56);color: white; ">
    </div>
    <br>
    <br>
    </div>
   
        </body>
</html>
  @endsection
      














   