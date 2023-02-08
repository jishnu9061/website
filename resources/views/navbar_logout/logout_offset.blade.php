<style>

  
  .overlay {
     height: 100%;
    width: 0;
    position: fixed;
    z-index: 10000;
    top: 0;
    right: 0;
    background-color: rgb(255, 255, 255);
   
    overflow-x: hidden;
    transition: 0.2s;
    
  }
  .back-o {
    height: 100%;
    width: 0;
    top: 0;
    right: 0;
    position: fixed;
    z-index: 9999;
    margin: auto;
  
    background-color: rgba(0,0,0, 0.5);
    overflow-x: hidden;

  }
  .overlay a {
    text-decoration: none;
    border: 1px solid rgb(240, 228, 227); padding:10px;font-size: 18px;background-color: #1d1d50;color: #ffffff;
 
   
  } 

  .overlay ul li{
    width:50%;
  }
  
  .overlay a:hover, .overlay a:focus {
    color: #c5bebe;
  }
  

  
  @media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
    }
  }

  
  </style>

  <div class="back-o" id="backo">
  <div id="myNav" class="overlay">
    
    <ul class="p-5"  style="
    margin:0;
    padding:0% 2%;
    float: left;
    height: 100px;
    width:100%;
  
    display: flex;
    flex-direction: row;
    align-items: center;  
    list-style:none;
    ">

   
    <li style=" text-align:left;" >
    <a style="background-color: #ffffff; color: #ff0000;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
 
      <li style=" text-align:right;"><a href= "{{url('logt')}}">Logout</a></li>
  
  </ul>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <img src="assets/img/cr_logo.jpeg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-sm" style="tect-align:center; display: flex;
      flex-direction: row;
      align-items: center; " >
        One of three columns
      </div>
      
    </div>
  </div>
  
<div class="p-5">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>

  </div>
</div>

  
      <script>
          function openNav() {
            document.getElementById("myNav").style.width = "30%";
            document.getElementById("backo").style.width = "100%";
          }
          
          function closeNav() {
            document.getElementById("myNav").style.width = "0%";
            document.getElementById("backo").style.width = "0%";
          }
      </script>

      <script>
            const sdbarright = document.getElementById("myNav");
            const sdbarback = document.getElementById("backo");
            
            window.onclick = function(event) {
            if (event.target == sdbarright) {
                  document.getElementById("myNav").style.width = "0%";
                  document.getElementById("backo").style.width = "0%";
              }
            if (event.target == sdbarback) {
                document.getElementById("myNav").style.width = "0%";
                document.getElementById("backo").style.width = "0%";
            }
          }
      </script>
      