@extends('layouts.hmsmain')
@section('content')

<div class="container">
    <h4 id="hdtpa"><b>Matters</b></h4>


     <br><br><br>



     
     <ul class="p-2" style="position: absolute; z-index:100; background-color:rgb(243, 242, 227);  display: flex;
     flex-direction: column;
     justify-content: space-between;
     align-items: center; left:0px; top:0px; height:100%; line-height: 15.6; list-style-type:none;   ">
         <li><a id="gg"  class="btn btn-primary " href="#sef">Task</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#see">Billing</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#sed">Custom Fields</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#sec">Contacts</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#seb">Notification</a> </li>
         <li><a id="gg"  class="btn btn-primary " href="#sea">Matter</a> </li>

     </ul>

     
     {{-- <nav style=" " class="navbar navbar-expand-lg navbar-light bg-light fixed">
         <a class="navbar-brand" href="#">Navbar</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav">

             <a  class="nav-item nav-link active" href="#sea">hgh</a>
             <a  class="nav-item nav-link active" href="#seb">yjgj</a>
             <a  class="nav-item nav-link active" href="#sec">yuyu</a>
             <a  class="nav-item nav-link active" href="#sed">yutyiu</a>
             <a  class="nav-item nav-link active" href="#see">yiyi</a>



             
           </div>
         </div>
       </nav> --}}


     </div>














     <!-- Modal Header -->
     <div class="modal-header" >
         <h2 class="text-centre"><b>Add New File</b></h2>

     </div>

     <!-- Modal body -->
     <div class="modal-body">
         <div class="container">
          
             <form method="post" action="{{ url('add-new-file') }}"
                 enctype="multipart/form-data">
                 @csrf
                 <h5 id="sea">Matter</h5>

                 <form >
                     
                     <div class="form-row">
                       <div class="col">
                         <input type="text" class="form-control" placeholder="First name">
                       </div>
                      
                     </div>
                     <br>
                     <div class="form-row">

                     <div class="col">
                         <input type="text" class="form-control" placeholder="Last name">
                       </div>
                       
                     <div class="col">
                         <input type="text" class="form-control" placeholder="Last name">
                       </div>

                      </div>

                      <br>
                      <div class="form-group">
                         <label for="exampleFormControlTextarea1">Example textarea</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                       </div>

                       <div class="form-row">


                         <div class="col">
                       <select class="form-control">
                         <option>Default select</option>
                         <option>Default select</option>
                         <option>Default select</option>
                       </select>
                     </div>

                       <div class="col">

                       <select class="form-control">
                         <option>Default select</option>
                         <option>Default select</option>
                         <option>Default select</option>
                       </select>

                     </div>


                     

                     </div>
<br>

                     <div class="form-row">

                         <div class="col">
                             <input type="text" class="form-control" placeholder="Last name">
                           </div>
                           
                         <div class="col">
                             <input type="text" class="form-control" placeholder="Last name">
                           </div>

                          </div>
                          <br>


                          <div class="form-row">


                             <div class="col">
                           <select class="form-control">
                             <option>Default select</option>
                             <option>Default select</option>
                             <option>Default select</option>
                           </select>
                         </div>

                           <div class="col">

                           <select class="form-control">
                             <option>Default select</option>
                             <option>Default select</option>
                             <option>Default select</option>
                           </select>

                         </div>

                         <br>
                         

                         </div>

                         <br>
                         
                         <div class="form-row">


                             <div class="col">
                           <select class="form-control">
                             <option>Default select</option>
                             <option>Default select</option>
                             <option>Default select</option>
                           </select>
                         </div>

                   


                         

                         </div>
                         <br>
                         <div class="form-row">

                             <div class="col">
                                 <input type="date" class="form-control" placeholder="Last name">
                               </div>
                               
                             <div class="col">
                                 <input type="date" class="form-control" placeholder="Last name">
                               </div>

                              </div>
                              <br>

                              <div class="form-row">

                                 <div class="col">
                                     <input type="date" class="form-control" placeholder="Last name">
                                   </div>
                                   
                                 <div class="col">
                                     <input type="date" class="form-control" placeholder="Last name">
                                   </div>

                                  </div>

                                  <div class="form-check form-check-inline">
                                     <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                     <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                   </div>
                                   <br>
                                   <br><br><br>
                                

                                 

                                 <h5 id="seb">Notification</h5>
                                 

                                   <div class="form-row">
                                   

                                     <div class="col">
                                         <input type="text" class="form-control" placeholder="Last name">
                                       </div>
                                       
                             

                                      </div>
                                      <br>

                                      <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                         this text used only
                                         <br> for demo purpose
                                     </div>

                                     <br><br><br>

                                     <h5 id="sec">Contacts</h5>
                                      
                                          <div class="form-row">

                                             
                                                 <div class="col">
                                                     <select class="form-control">
                                                       <option>Default select</option>
                                                       <option>Default select</option>
                                                       <option>Default select</option>
                                                     </select>
                                                   </div>
           
                                               
                                               
                                             <div class="col">
                                                 <input type="text" class="form-control" placeholder="Last name">
                                               </div>
     
                                              </div>

                                              <div class="form-check form-check-inline">
                                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                 <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                               </div>
                                               <br><br><br>

                                               <h5 id="sed">Custom Fields</h5>
                                              
                                              
                                               <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                                 this text used only
                                                 <br> for demo purpose
                                             </div>
                                             <br>
                                               <div class="form-row">

                                             
                                                 <div class="col">
                                                     <select class="form-control">
                                                       <option>Default select</option>
                                                       <option>Default select</option>
                                                       <option>Default select</option>
                                                     </select>
                                                   </div>

                                              </div>
                                              <br>

                                              <div class="form-check form-check-inline">
                                                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                 <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                               </div>
                                               <br>
                                              <div class="form-row">
                                                 

                                                     <div class="col">
                                                         <input type="Date" class="form-control" placeholder="Last name">
                                                       </div>
                                                       
                                                   </div>
                                                   
                                                   <br><br><br>
                                                   <h5 id="sed">Billing</h5>

                                                   <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                                     <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                         <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                       </div>
                                                      this text used only
                                                      <br> for demo purpose
                                                  </div>

                                                  <div class="form-row">

                                                  <div class="col">
                                                     <select class="form-control">
                                                       <option>Default select</option>
                                                       <option>Default select</option>
                                                       <option>Default select</option>
                                                     </select>
                                                   </div>
                                                 </div>
                                                 <h6 id="see">Billing</h6>
                                                

                                                 <div class="form-check form-check-inline col">
                                                     <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                     <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                   </div>
                                                   <h6>Billing</h6>  
                                                   

                                                 
                                                   <div class="form-check form-check-inline col">
                                                     <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                     <label class="form-check-label" for="inlineCheckbox1">Satisfied</label>
                                                 </div>
                                                 <br><br><br>
                                                     <h5 id="sef">Task</h5>
                                                     <div class="p-1 m-1" style="background-color:aliceblue; font-size:10px; border: 1px solid;">
                                                         this text used only
                                                         <br> for demo purpose
                                                     </div>

                                                     <h6 >Task List</h6>
                                                     
                                                  <div class="form-row">

                                                     <div class="col">
                                                        <select class="form-control">
                                                          <option>Default select</option>
                                                          <option>Default select</option>
                                                          <option>Default select</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                              </div>

                                             </form>

                   {{-- bj --}}







@endsection