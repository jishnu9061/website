@extends('layouts.hmsmain')
@section('content')

<html>
<div class="container">
  
      <style>
       .attachments
      {
        border: 2px solid rgb(13, 1, 56);
        margin: 20px;
        padding: 25px;

      }
   
 
</style>
</head>
<body>
<div>
            <div>
                <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Attachments</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Attachments</b></h4>
    <br><br>
     </div>
          
    <form> 
      <div class="attachments">
    <h3 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Documents to Upload</h3><br>
    <i class="fa-solid fa-download"style="margin-left:50%;"></i>
    <p style="text-align:center;"> Select a file or drop it here</p>



    <!-- <button><input type="file" class="form-control" name="name" id="customFile" style="height:100px;width:100px;" >Select a File</button> -->
    <input type="file"value="Select a File" name="submit"style="background-color:rgb(13, 1, 56);color: white; margin-left:38%;"> 
      </div>
      </form>
   </body>
   </div>
</html>
@endsection