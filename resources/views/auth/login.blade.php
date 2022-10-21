
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:17:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRA</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<style>.vl {
    border-left: 1px solid rgb(0, 0, 0);
    height: 700px;
    
        border-radius:10px 10px 10px 10px;
        opacity: 10%;
        /* box-shadow: 10px 10px 5px 12px lightblue; */
        
  }</style>

<body>

   
    
    <div id="auth">
        <div class="row h-100" >
     <div class="col-lg-5 " >
        <div id="auth-left" >
            <div class="auth-logo " >
                <img class="mx-auto d-block"  id="cr_logo" src="assets/images/Logo cra.png" alt="" style="width:45%;height:45%; ">
            </div>

            <div class="" style="text-align: center">   <h5 style="font-size: 200%" class="auth-title">Log in.</h5>
            {{-- <p class="auth-subtitle mb-4">Log in with your data that you entered during registration.</p>  --}}
        </div>

        <form method="POST" action="{{ route('login') }}">
                        @csrf
          @if(Session::has('errors'))

           <div class="alert alert-dark" role="alert">
              {{ Session::get('errors')}}
           </div>
                          
                     @endif
                <div class="form-group position-relative has-icon-left mb-4">


                    <input id="email" type="number" class="form-control form-control-xl" placeholder="Employee Id" name="email" value="" required autocomplete="email" autofocus>
                    
                  
                    <div class="form-control-icon">
                        <i class="bi bi-person-fill" ></i>
                    </div>
                </div>


                <div class="form-group position-relative has-icon-left mb-4" >
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">

                            
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock-fill" style="color: #1D1D50"></i>
                    </div>
                </div>

                
                <div class="form-check form-check-lg d-flex align-items-end" >
                    <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" style="margin-top: 0px">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault" >
                        Keep me logged in
                    </label>
                </div>
                
                 <button type="submit" class="btn btn-primary btn-block btn-lg  mt-4" style="margin: 0px; border: 1px solid #1D1D50;">
                                    {{ __('Login') }}
                 </button>
            </form>
            <div class="text-center mt-5 text-lg" style="font-size: 22px">
                <p class="text-gray-600">Don't have an account? <br> <a href="auth-register.html" class="font-bold">Sign
                        up</a>.</p>
                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
            </div>
        </div>
     </div>
        {{ Session::forget('errors')}}

        


        <div class="align-items-center col-lg-7  d-flex justify-content-center">
            <div class="vl"></div>
         
              <img  id="auth-right" src="assets/images/bg/loginimage.jpg" style="border-radius: 50px; " class="  mx-auto d-block" alt="Responsive image">

            
        </div>
     </div>

    </div>
</body>


<!-- Mirrored from zuramai.github.io/mazer/demo/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:17:09 GMT -->
</html>

