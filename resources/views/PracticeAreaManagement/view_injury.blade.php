@extends('layouts.hmsmain')
@section('content')
<div class="container">
{{-- heading --}}
    <h4 id="hdtpa"><b>View Injury</b></h4>
    <br><br>
               
        
       
    <div class="row">

        <div class="col-md-12 order-md-1">

            <form method="" action="" id="form">
                @csrf
                <input type="hidden" value="" name="id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Matter Info</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="matter_info" id="age" value="">
                                <!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Matter Type</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="matter_type" id="age" value="">
                                <!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="text-center">
                 <h4>Plaintiff</h4>
             </div>
             <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Incident Details</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="incident" id="age" value="">
                                <!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Damage Details</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="damage" id="age" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Health Insurer</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="insurer" id="age" value="">
                                <!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Insurence Policy Details</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="policy_detail" id="age" value="">
                                <!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Defendant</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="defendent" id="age" value="">
                                <!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
                                <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div>



@endsection