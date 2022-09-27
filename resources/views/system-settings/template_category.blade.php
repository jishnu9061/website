
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
    outline: 1px solid  gray ;
}
tr:nth-child(odd) {
            background-color:rgb(198, 195, 211); 
        }
        /* tr:nth-child(even)
        {
            background-color: rgb(233, 231, 238);
        } */
          
            </style>
   </head>
   <body>
    <!-- <h2 >Court List</h2><br>
    <a href="{{url('add_court')}}"  class="btn btn-primary"style="color:white;background-color:rgb(13, 1, 56);" >Add Court</a><br><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Template Category</h2>
        <a href="{{('add_template_category')}}"><button class="btn btn-primary add-btn"style="width=100%;height=100%;">Add Template Category</button></a>
        <hr class="mb-4">.
    <!-- <div class="container"> -->
      <div class="mydiv">
             <table class="table" >
                  
                        <tr>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">No</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Template Category</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Status</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);color:white;">Edit</th>
                        <th class="text-center" style="background-color:rgb(13, 1, 56);">  <input type="checkbox" ></th>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Business Formation:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Business Operations:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                   

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Business Property:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Employment:</td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    

                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Financial:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                         <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Personal & Family:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>

                    
                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Real Estate:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td colspan="5"style="color:rgb(13, 1, 56);font-size:medium;font-weight:bold;">Will & Estate Planning:</td>
                    </tr>
                  
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">1</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center"style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <td  class="text-center" style="color:rgb(13, 1, 56);">2</td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  style="color:rgb(13, 1, 56);"></td>
                        <td  class="text-center" style="color:rgb(13, 1, 56);"><a href="{{('edit_template_category')}}">Edit</a></td>
                        <td  style="color:rgb(13, 1, 56);"class="text-center"><input type="checkbox"></td>
                    </tr>
                   
                  
                  
                    
                   
                </table>
               
    <br>
    <br>
    </div>

    <!-- <form>
 <input type="button" value="Back" style="background-color:rgb(13, 1, 56);color:white;" onclick="history.back()">
</form> -->
        </body>
</html>
  @endsection
      














   