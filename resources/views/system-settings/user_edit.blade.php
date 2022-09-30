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
</head>
      <style>
   .container{
    
   }
 
      table {
            /* font-family: arial, sans-serif; */
            border-collapse: collapse;
            width: 95%;
            margin-left:25px;
     
            
        }
        td, th {
            border: 1px solid rgb(255, 255, 255);
            text-align: left;
            padding: 8px;
         }
        th{
             background-color: #D5BD94; 
         }
         td{
            color:rgb(13, 1, 56);
         }
         .row{
            column-gap: 100px;
         }
         select{
            background-color:white;
         }

        </style>





<body>
  <div class="container">



  <script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
        
   

<h2 style="text-align:center; ">Edit User Details </h2>
    <hr class="mb-4"><br>
    <form>
    <table class="table">
<div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="http://localhost/CRA/public/addthestaffs" id="form">
              <!-- <input type="hidden" name="_token" value="ddpMUOg3SUr8CszFAIwbkc9qzJ5kC1beAhSW3XhM"> -->
               <div class="row">
                  <div class="col-md-5">
                    <div class="mb-1">
                  
                        <input type="file" class="form-control" name="name" id="customFile" style="height:100px;width:100px;" >
                        <label style="text-align:center;">Signature</label>
                    </div> 
                </div> 
                
                </div> 



            <div class="row">
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">User Code:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Initials:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Postal:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">User Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Password:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Town:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Mobile:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Email:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">Department:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="row">
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">User Group:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <input type="text" class="form-control" name="name" id="ucode" >
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">G/L Account:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                        <select type="text" value="" name="type">
                        <option>  </option>
                            <option>Caroline Ratemo</option>
                            <option>Petty Cash Account-Office</option>
                            <option>Mpesa Cash Account-771804</option>
                            <option>Office Mpesa A/C-0724708999</option>
                            
                        </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="mb-1">
                        <label for="username">User Roles:</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            

    
                            <input type="text" class="form-control" name="name" id="ucode"style="height:100px;width:100px; ">
                            
                        </div>
                    </div>
                </div>
             
            </div>
            </table>
            </form>
            <div class="class"style="text-align:center;">
            <!-- <input  type="submit"value="Save" name="Submit"style="background-color:rgb(13, 1, 56);color: white "> -->
    <input type="submit"value="Save" name="submit"style="background-color:rgb(13, 1, 56);color: white; "> 
    <input type="button"value="Close" name="close"style="background-color:red;color: white; ">

    
</div>   
            </div> 
</body>
</html>
@endsection