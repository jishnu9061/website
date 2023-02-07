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
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
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
    color: #f1f1f1;
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

  
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href= "{{url('logt')}}" >Log Out</a>
      {{-- <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a> --}}
    </div>
  </div>
  

  
  <script>
     const htm = document.getElementsByTagName("html");
  const bnf = document.getElementById("myNav");

  function openNav() {
    document.getElementById("myNav").style.width = "30%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
 

  window.onclick = function(event) {
    if (event.target == htm) {
        document.getElementById("myNav").style.width = "0%";
    }
}
  </script>