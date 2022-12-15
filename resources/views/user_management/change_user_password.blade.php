@extends('layouts.hmsmain')
@section('content')
<div class="container">
 <div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Change Password</u></b></span></button><br> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Change Password</b></h4>
    <br><br>
          
    
           
    <p style="color:red;text-align:center;"> Password must be atleast 8 character long, Contain atleast 1 capital letter,<br> atleast 1 numeric character and atleast 1 special character</p>

    <form method="post" action="" id="form">  
       @csrf
   
       <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >User's Name:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select type="text" value="" id="" name="user_name"style="width:100%;">
                               
                  
                                <option>Princess Caroline(caroline)</option>
                                <option></option>
                                <option></option>
                            </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Old Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password"  id="" name="old_password"value=""class="form-control"style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                        <label >New Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password"  id="" name="new_password"value=""class="form-control"style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                Required Field.
                                </div>
                            </div>
                        </div>
                   
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label>Confirm Password:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="password"  id="" name="confirm_password"value=""class="form-control"style="width:100%;">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Required Field.
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>

                    <div class="row">
         <div class="col-sm">

                        </div>
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <br>
                            <div class="class"style="text-align:center;">
                    <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Save</button>
                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"onclick="history.back()">Cancel</button>
</div > 
</div>  
              
                            <br>
                            <br>
                        </div>
                    </div>
       
</form>  
</body>
        </div>
</html>
@endsection