@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Practice Management</a> /
    <a href="{{url('personal_injury')}}" style="color: #1D1D50;">Personal Injury</a> /
    <a href="#" style="color: #1D1D50;">View Personal Injury</a>
</nav>
<br><br>
<div class="container">
    {{-- heading --}}
    <h4 id="hdtpa"><b> Injury Details</b></h4>
    <br><br>


    <form method="post" action="{{url('')}}">
        @csrf
        <div class="container">
            <div class="text-left">
                <table class="table">
                    <tbody>
                        <tr>
                            <td scope="row">File No:</td>
                            <td  type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Client Name:</td>
                            <td  type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Matter Type:</td>
                            <td   type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Attorney:</td>
                            <td   type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Incident Details:</td>
                            <td   type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Damage Details:</td>
                            <td   type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>

                        </tr>
                        <tr>
                            <td scope="row">Health Insurer:</td>
                            <td   type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Insurence Policy Details:</td>
                            <td   type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Defendant:</td>
                            <td   type="text" aria-label="default input example" value=""
                                    Disabled>
                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>

    </form>


</div>

@endsection


























<!-- <div class="row">

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
                                <input type="text" class="form-control" name="matter_info" id="age" value="" Disabled> -->
<!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
<!-- <div class="invalid-feedback" style="width: 100%;"> -->
<!-- Incorporation is required
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
                                <input type="text" class="form-control" name="matter_type" id="age" value="" Disabled> -->
<!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
<!-- <div class="invalid-feedback" style="width: 100%;">
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
                                <input type="text" class="form-control" name="incident" id="age" value="" Disabled> -->
<!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
<!-- <div class="invalid-feedback" style="width: 100%;">
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
                                <input type="text" class="form-control" name="damage" id="age" value="" Disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="username">Health Insurer</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" name="insurer" id="age" value="" Disabled> -->
<!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
<!-- <div class="invalid-feedback" style="width: 100%;">
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
                                <input type="text" class="form-control" name="policy_detail" id="age" value="" Disabled> -->
<!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
<!-- <div class="invalid-feedback" style="width: 100%;">
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
                                <input type="text" class="form-control" name="defendent" id="age" value="" Disabled> -->
<!-- <select name="box_type" id="cars">
                                <option>select</option>
                                                            <option>Box Type 1</option>
                                                            <option>Box Type 2</option>
                                                            <option>Box Type 3</option>
                                                            <option>Box Type 4</option>
                                                            
                                </select> -->
<!-- <div class="invalid-feedback" style="width: 100%;">
                                    Incorporation is required
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div> -->