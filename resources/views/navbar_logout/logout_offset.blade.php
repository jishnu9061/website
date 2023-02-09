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
    padding:10px;font-size: 18px;background-color: #1d1d50;color: #ffffff;
 
   
  } 

  .overlay ul li{
    width:50%;
  }
  
  .overlay a:hover, .overlay a:focus {
    color: #c5bebe;
  }
  .center-xy{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  align-content: center;
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
    
    <ul class="p-3"  style="
    margin:0;
    padding:0% 2%;
    float: left;
    height: 100px;
    width:100%;
  
    display: flex;
    flex-direction: row;
    /* align-items: top;   */
    list-style:none;
    ">

   
    <li style=" text-align:left;" >
    <a style="background-color: #ffffff; color: #ff0000;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
 
      <li style=" text-align:right;"><a href= "{{url('logt')}}">Logout</a></li>
  
  </ul>

  <div class="container">
    <div class="row">
      <div class="col-3 center-xy" > <img style="max-width: 40px;" src="assets/img/cr_logo.jpeg" class="img-fluid" alt="Responsive image"></div>
      <div class="col-9">
        <div class="row">
          <div class="col" >Name</div>
         
          <div class="w-100"></div>
          <div class="col" >Email</div>
          <div class="w-100"></div>
          <div class="col" >Proof Setting</div>
          
        </div>
<br>
      </div>
      
    </div>
    <div class="row">
      <div class="col-3 center-xy"><i  class="fa fa-address-card " aria-hidden="true"></i></div>
      <div class="col-9">
        <div class="row">
          <div class="col" >Name</div>
         
          <div class="w-100"></div>
          <div class="col" >Email</div>
          <div class="w-100"></div>
          <div class="col" >Proof Setting</div>
          
        </div>

      </div>
    </div>
  </div>
  <br>

  
<div class="p-1">
  <table class="table-responsive-xl">
    <thead>
      <tr style="color:#f1d9b0;">
        <th scope="col">Sl.No:</th>
        <th scope="col">IP Address</th>
        <th scope="col">Login Time/Date</th>
        
      </tr>
    </thead>
    <tbody>

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
      