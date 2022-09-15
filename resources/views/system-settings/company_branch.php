<html>
    <head>
     
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
     body
        {
          background-color: #f0e7ce;
          font-family:  Arial, Helvetica, sans-serif;
          margin-left:10px;
          margin-right:10px;
        }
        a.btn.btn-primary
        {
            background-color:rgb(177, 127, 62);
            color:rgb(13, 1, 56); 
            margin-top:30px;
            margin-left:25px;
            border: 1px solid rgb(240, 205, 10);
        }
        h1
        {
            padding-top:10px;
            font-size:large;
            font-weight:bold;
            font-family:  Arial, Helvetica, sans-serif;
            color:rgb(13, 1, 56); 
            text-align:left ;
            background-color:rgb(177, 127, 62);
            margin-left:25px;
           
        } 
        p{
          margin-left:25px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 95%;
            margin-left:25px;
     
            
        }
        td, th {
            border: 1px solid rgb(240, 205, 10);
            text-align: left;
            padding: 8px;
         }
        th{
             background-color:rgb(177, 127, 62);
             color:rgb(13, 1, 56);
         }
         td{
            color:rgb(13, 1, 56);
         }

        
       
</style>
    </head>
    <body>
  
        <h1>Company Branch</h1>
       

    <a href="http://localhost/CRA/resources/views/system-settings/add_company_branch.php" class="btn btn-primary" >Add Branch</a><br><br>
    <p>Total Result: 2</p>
    <table>
   
  <tr>
    <th>Sl No</th>
    <th>Branch No</th>
    <th>Branch Code</th>
    <th>Branch Name</th>
    <th>Status</th>
    <th>Edit</th>
    <th></th>
  </tr>
  <tr>
    <td>1</td>
    <td>02</td>
    <td>NBI</td>
    <td>Nairobi</td>
    <td style="color:green;font-weight:bold;">Active</td>
    <td><a href="edit_db" target="_blank"style="color:blue;">Edit</a> 
</td>
    <td><input type="checkbox"></td>
    </tr>

  <tr>
    <td>2</td>
    <td>03</td>
    <td>MSA</td>
    <td>Mombasa</td>
    <td style="color:red;font-weight:bold;">In-Active</td>
    <td><a href="edit_db" target="_blank"style="color:blue;">Edit</a>
    <td><input type="checkbox"></td>
    </tr>
  
</table><br><br>

<select style="width:200px;height: 30px;background-color:#f0e7ce; border: 1px solid rgb(177, 127, 62);padding-right:10px;margin-left:1250px;">
    <option>  Activate Category </option>
    <option>De-Activate Category</option>
    <option>Delete Category</option>
</select>
<button class="btn btn-primary" style="width:42px;height:35px;background-color:rgb(177, 127, 62); border: 1px solid rgb(240, 205, 10);margin-left:1250px;
            color:rgb(13, 1, 56);text-align: center; ">Go</button>
        


 



   
    </body>
    </html>