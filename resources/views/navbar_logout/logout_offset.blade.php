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
        padding:0% 2%;
        float: left;
        height: 100px;
        width:100%;
        display: flex;
        flex-direction: row;
        /* align-items: top;   */
        list-style:none;margin:0px;
        ">       
      <li style=" text-align:left;" >
      <a style="background-color: #ffffff; color: #ff0000;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
        <li style=" text-align:right;"><a href= "{{url('logt')}}">Logout</a></li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="col-3 center-xy" style="width:40%; "> <img style="width: 100px;height:auto;border:solid;border-radius:25%;" src="{{asset('/') }}/images/faces/{{ Auth::user()->photo_path}}" class="img-fluid" alt="Responsive image"></div>
          <div class="col-9"style="width:60%; ">
            <div class="row">
              <div class="col" >Users Name: {{ Auth::user()->username }}</div>
              <div class="w-100"></div>
              <div class="col" >Email: {{ Auth::user()->email }}</div>
              <div class="w-100"></div>
              <div class="col" >Profile Setting(u/c)</div>
            </div>
          <br>
        </div>
        </div>
      </div>
      <br><?php $ipaddress=DB::table('users_ip_track')->where('uniqueid',Auth::user()->uniqueid)->orderBy('id', 'desc')->get();$serial_no_logout=0; ?>
      <div class="p-1">
        <table class="table-responsive-xl" style="width:100%">
          <thead>
            <tr  >
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
      