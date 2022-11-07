@extends('layouts.hmsmain')
@section('content')




    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    
    <nav class="navbar navbar-expand-lg navbar-light   " id="nnav" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" >
        {{-- style="border: solid 1px #4c7baa;" --}}
        <div class="w3-sidebar w3-bar-block p-1" style="width:auto; height:auto; ">

  



  {{-- <h3 class="w3-bar-item">Matter</h3> --}}
  <a style="border-left: solid 1px #4c7baa;" value="click me" onclick="this.style.color='#000000'; this.style.backgroundColor = '#4c7baa'" type="button" onclick="document.getElementById('ww ').style.color='#3d98fc'" class="nav-item nav-link active" href="#sea">Matter</a>
  <a style="border-left: solid 1px #4c7baa;" value="click me" onclick="this.style.color='#000000'; this.style.backgroundColor = '#4c7baa'" type="button" onclick="document.getElementById('wwa').style.color='#3d98fc'" class="nav-item nav-link active"  href="#seb">Notification</a>
  <a style="border-left: solid 1px #4c7baa;" type="button" onclick="document.getElementById('wwb').style.color='#3d98fc'" class="nav-item nav-link active"  href="#sec">Contacts</a>
  <a style="border-left: solid 1px #4c7baa;" type="button" onclick="document.getElementById('wwc').style.color='#3d98fc'" class="nav-item nav-link active"  href="#sed">Custom Fields</a>
  <a style="border-left: solid 1px #4c7baa;" type="button" onclick="document.getElementById('wwd').style.color='#3d98fc'" class="nav-item nav-link active"  href="#see">Billing</a>
  <a style="border-left: solid 1px #4c7baa;" type="button" onclick="document.getElementById('wwe').style.color='#3d98fc'" class="nav-item nav-link active"  href="#sef">Task</a>

</div> </div></div> </nav>

  


    
    <!-- {{-- <h4 id="hdtpa"><b>Matters</b></h4>


     <br><br><br> --}}

     {{-- <ul class="p-2" style="position: absolute; z-index:100; background-color:rgb(243, 242, 227);  display: flex;
     flex-direction: column;
     justify-content: space-between;
     align-items: center; left:0px; top:0px; height:100%; line-height: 15.6; list-style-type:none;   ">
         <li><a id="gg"  class="btn btn-primary " href="#sef">Task</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#see">Billing</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#sed">Custom Fields</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#sec">Contacts</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#seb">Notification</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#sea">Matter</a> </li>

     </ul> --}} -->



     
     <!-- {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top " id="nnav" >
         <a onclick="myFunction()" class="navbar-brand" href="#"><h4 ><b>Matters</b></h4></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav" >
            
             <a type="button" onclick="document.getElementById('ww ').style.color='#3d98fc'" class="nav-item nav-link active" href="#sea">Matter</a>
             <a type="button" onclick="document.getElementById('wwa').style.color='#3d98fc'" class="nav-item nav-link active" class="nav-item nav-link active" href="#seb">Notification</a>
             <a type="button" onclick="document.getElementById('wwb').style.color='#3d98fc'" class="nav-item nav-link active" class="nav-item nav-link active" href="#sec">Contacts</a>
             <a type="button" onclick="document.getElementById('wwc').style.color='#3d98fc'" class="nav-item nav-link active" class="nav-item nav-link active" href="#sed">Custom Fields</a>
             <a type="button" onclick="document.getElementById('wwd').style.color='#3d98fc'" class="nav-item nav-link active" class="nav-item nav-link active" href="#see">Billing</a>
             <a type="button" onclick="document.getElementById('wwe').style.color='#3d98fc'" class="nav-item nav-link active" class="nav-item nav-link active" href="#sef">Task</a>

             
            
             <script>
              function myFunction() {
                document.getElementById("myDIV").style.transitionDuration = "1s";
              }
              </script>

             <div><a class="nav-item nav-link active" type="button" onclick="document.getElementById('nnav').style.display='none'"><i class="fa fa-bars"></i></a> </div> 
              
           </div>
         </div>
       </nav>
        --}} -->

       <section  class="ml-5 mr-5"  >
<br id="sea">
       <form   class="p-5 m-0" style="background-color: #f8f9fa;" >
        
        <h5 id="ww">Matter</h5>
        <div class="form">
            
          <div class="form-group ">

            
            <label for="inputEmail4">Email</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="form-group ">
            <label for="comment">Comments:</label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
          </div>
        </div>

        <div class="form-group row ">
            <div class="col-md-6" >
          <label for="inputAddress">Address</label>
          <select class="custom-select custom-select mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <div class="col-md-6" >
            <label for="inputAddress">Address</label>
            <select class="custom-select custom-select mb-3">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          
          
         
        </div>
   

        <div class="form-group row ">
            <div class="col-md-6" >
          <label for="inputAddress">Address</label>
          <select class="custom-select custom-select mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>

        <div class="col-md-6" >
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
          
          
         
        </div>

        <div class="form-group row ">
 

        <div class="col-md-6" >
            <label for="inputAddress">Address</label>
            <input type="date" class="form-control" placeholder="First name">
          </div>
          
          <div class="col-md-6" >
            <label for="inputAddress">Address</label>
            <input type="date" class="form-control" placeholder="First name">
          </div>
          
         
        </div>

        <div class="form-group row ">
 

            <div class="col-md-6" >
                <label for="inputAddress">Address</label>
                <input type="date" class="form-control" placeholder="First name">
              </div>
              
              <div class="col-md-6" >
                <label for="inputAddress">Address</label>
                <input type="date" class="form-control" placeholder="First name">
              </div>
              
             
            </div>

        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Satisfied
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>


<br id="seb"><br><br><br>

      <form class="p-5" style="background-color: #f8f9fa;" >
        <h5 id="wwa" >Notification</h5>
        <div class="form">
            
          <div class="form-group ">

            
            <label for="inputEmail4">Email</label>
            <input type="text" class="form-control" placeholder="First name">
          </div>

          <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
            this text used only
            <br> for demo purpose
        </div></div>


        </form>

        <br id="sec"><br><br><br>

        <form class="p-5" style="background-color: #f8f9fa;">
            <h5 id="wwb" >Contacts</h5>
            <div class="form">
                
                <div class="form-group row ">
                    <div class="col-md-6" >
                  <label for="inputAddress">Address</label>
                  <select class="custom-select custom-select mb-3">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
        
                <div class="col-md-6" >
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" placeholder="First name">
                  </div> </div>

                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Satisfied
                      </label>
                    </div>
                  </div></div>
            
    
            </form>

            <br id="sed"><br><br><br>
            <form class="p-5" style="background-color: #f8f9fa;">
                <h5 id="wwc" >Custom Fields</h5>
                <div class="form">

                    <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                        this text used only
                        <br> for demo purpose
                    </div>
                    
                    <div class="form-group row ">
                        <div class="col-md-6" >
                      <label for="inputAddress">Address</label>
                      <select class="custom-select custom-select mb-3">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
            
                    <div class="col-md-6" >
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" placeholder="First name">
                      </div> </div>
    
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Satisfied
                          </label>
                        </div>
                      </div>
                    </div>
        
                </form>

                <br id="see"><br><br><br>
                <form class="p-5" style="background-color: #f8f9fa;">
                    <h5 id="wwd" >Billing</h5>
                    <div class="form">
    
                        <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                  <label class="form-check-label" for="gridCheck">
                                    Satisfied
                                  </label>
                                </div>
                              </div>
                            this text used only
                            <br> for demo purpose
                        </div>
                        
                        <div class="form-group ">
                     
                
                        
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" placeholder="First name">
                          </div>
        
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                Satisfied
                              </label>
                            </div>
                          </div>
                        </div>
            
                    </form>
    
                    <br id="sef"><br><br><br>

                    <form class="p-5" style="background-color: #f8f9fa;" >
                        <h5 id="wwe" >Task</h5>
                        <div class="form">
        
                            <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                           
                                this text used only
                                <br> for demo purpose
                            </div>
                            
                            <div class="form-group ">
                         
                    
                            
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" placeholder="First name">
                              </div></div>
            
                       
                        
                
                        </form>
                        
                    </section>

                    </section> 

                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                   {{-- bj --}}
                 
@endsection











