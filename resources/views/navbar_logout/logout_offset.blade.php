<style>
  body {
    font-family: 'Lato', sans-serif;
  }
  
  .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 10000;
    top: 0;
    right: 0;
    background-color: rgb(255, 255, 255);
  
    overflow-x: hidden;
    transition: 0.5s;
  }
  .back-o {
    height: 100%;
    width: 0;
    top: 0;
    right: 0;
    position: fixed;
    z-index: 9999;
    margin: auto;
    background-color: rgb(255, 0, 0);
    background-color: rgba(0,0,0, 0.5);
    overflow-x: hidden;

  }
  
  .overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
  }
  
  .overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .overlay a:hover, .overlay a:focus {
    color: #aca0a0;
  }
  
  .overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
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
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href= "{{url('logt')}}" >Log Out</a>
      {{-- <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a> --}}
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