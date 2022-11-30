@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
   <div class="container" >            
               <h4 id="hdtpa"><b>View Civil Litigation</b></h4>
               <br>

<form action="">

               <div class="row align-items-start">
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Matter Info</label>
                    <input type="text" class="form-control" placeholder="2016-10-155-ER/AP">
           </div>
           </div>
        <div class="col">
           <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Plaintiff</label>
                    <input type="text" class="form-control" placeholder="Charles Norris">
           </div>
        </div>
    <div class="col">
       <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matter Type</label>
                    <input type="text" class="form-control" placeholder="Civil Dispute">
        </div>
    </div>
  </div>
  <div class="row align-items-start">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendent</label>
                    <input type="text" class="form-control" placeholder="jean C. Van Damme">
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Attroney</label>
                    <textarea class="form-control" rows="2">Deway Cheatum Contact Sara Howe</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Case Details</label>
                    <textarea class="form-control" rows="2">Filed Date: 8/7/2017 Service by: Personal Cook First Civil</textarea>
                        </div>  
    </div>
    </div>
  <div class="row align-items-end">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Insurer</label>
                    <textarea class="form-control" rows="2">Plaintiff's Insurer</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Witness</label>
                    <textarea class="form-control" rows="2">Plaintiff's Witness</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Plaintiff's Expert</label>
                    <textarea class="form-control" rows="2">Plaintiff's Expert</textarea>
                        </div>  
    </div>
    </div>
  <div class="row align-items-end">
    <div class="col">
      <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Insurer</label>
                    <textarea class="form-control" rows="2">Defendant's Insurer</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Witness</label>
                    <textarea class="form-control" rows="2">Defendant's Witness</textarea>
                        </div>
    </div>
    <div class="col">
    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Defendant's Expert</label>
                    <textarea class="form-control" rows="2">Defendant's Expert</textarea>
                        </div>  
    </div>
    </div>

   </form>
   
      <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supporting Details</label>
                    <span class="m-2"></span>
                    <input type="file" class="form-control" >
                        </div>
      </div>
  </div> -->



@endsection