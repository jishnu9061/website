<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>CRA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'poppins',sans-serif;
        }
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            
            */background: url('')no-repeat;
            background-position: center;
            background-size: cover;
        }
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%; 
            min-height: 100%;
        }
        .form-box{
            position: relative;
            width: 400px;
            height: auto;
            background: transparent;
            border: 2px solid rgba(255,255,255,0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
            left:-30%;
            padding: 3rem 0rem 1rem 0rem; 
        }
        h2{
            font-size: 2em;
            color: #fff;
            text-align: center;
        }
        .inputbox{
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }
        .inputbox label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }
        input:focus ~ label,
        input:valid ~ label{
        top: -5px;
        }
        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding:0 35px 0 5px;
            color: #fff;
        }
        .inputbox ion-icon{
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }
        .forget{
            margin: -15px 0 15px ;
            font-size: .9em;
            color: #fff;
            display: flex;
            justify-content: space-between;  
        }

        .forget label input{
            margin-right: 3px;
            
        }
        .forget label a{
            color: #fff;
            text-decoration: none;
        }
        .forget label a:hover{
            text-decoration: underline;
        }
        button{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }
        .register{
            font-size: .9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }
        .register p a{
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }
        .register p a:hover{
            text-decoration: underline;
        }
         #preloader_login{
            background: #000  url('') no-repeat center center;
            height: 100vh;
            width:100%;
            position: fixed;
            z-index: 100;
        }
        #cr_logo {
            display: block;
            width: 150px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
            opacity: 1;
        }
        .center_pre{
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .ring_pre{
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            animation: ring 2s linear infinite;
        }
        @keyframes ring {
        0%{
            transform: rotate(0deg);
            box-shadow: 1px 5px 2px #fbaf19;
        }
        50%{
            transform: rotate(180deg);
            box-shadow: 1px 5px 2px #fbaf19;
        }
        100%{
            transform: rotate(360deg);
            box-shadow: 1px 5px 2px #fbaf19;
        }
        }
        .ring_pre:before{
            position: absolute;
            content: '';
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(255,255,255,.3);
        }
        .span_pre{
            color: #737373;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 200px;
            animation: text 3s ease-in-out infinite;
        }
        @keyframes text {
        50%{
            color: black;
        }
        }
        .alert {
            position: relative;
            padding: 0.25rem 0.25rem;
            margin-bottom: 0rem;
            border: none;
            border-radius: 0.25rem;
        }
        .alert-danger {
            background-color: #f3616d;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="preloader_login">
        <div class="center_pre">
            <div class="ring_pre"></div>
            <span clsss="span_pre">
            <img id="cr_logo" class="ffff" src="{{asset('/') }}assets//images/Logo cra.png" alt="CRA" style="margin-top:0px;">
            </span>
        </div>
    </div>
    <section style="background-color: #1d1d50">
        <video autoplay muted loop id="myVideo">
            <source src="{{asset('/') }}/assets/image/justice_and_law login_back.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        <div class="form-box">
            <div class="form-value">
            
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <img class="" id="" src="assets/images/Logo cra.png" alt="" style="width:6rem;height:6rem;padding-left:35%; ">
                    <h2>Login</h2>
                    @if (Session::has('errors'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('errors') }}
                        </div>
                    @endif
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" name="email"required>
                        <label for="">UniqueId</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password"  required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  </label>
                      
                    </div>
                    <button>{{ __('Login') }}</button>
                    <div class="register">
                        <p><a href="#">Forget Password</a></p>
                    </div>
                </form>
            </div>
            {{ Session::forget('errors') }}
        </div>
    </section>
    <script>
        var preloader = document.getElementById("preloader_login");
        window.addEventListener('load',function(){
            preloader.style.display="none";
        })
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>