@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <div class="">


        <div>
            <div class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>
                        New Fee Note</u></b></span></div><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" id="form">
                @csrf
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Document Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Issued Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Client</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">File</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Credit Note Send To ?</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
                <hr class="mb-4">

                <div class="row">
                <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Billing Information</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea  class="form-control" id="form7Example7" rows="3"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
    <hr class="mb-4">

    <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Attach to a Fee Note</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="date" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Currency:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Exchange Rate</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="number" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Approver</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Bank Account</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                <option>---select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-1">
                            <label for="username">Mode Of Delivery</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <select name="code" id="cars">
                                <option>---Select---</option>
                                    <option>Main Client</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>


                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">To the attention of:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name=""    id="username" value="" required >
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Subject/Title:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="" id="username" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    </div><br><br>

                    <div class="btn btn-primary"
                    style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>Credit Note Items</u></b></span></div><br>
                <br><br>
                <table class="table table-bordered" id="new-item">
                <thead>
                    <tr>
                        <th class="text-center">Item Type</th>
                        <th class="text-center">Item Category</th>
                        <th class="text-center">Particulars Of Service Rended</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">V.A.T</th>
                     
                    </tr>
                </thead>
                <tbody>
                        <tr id="data">
                            <td  scope="row" class="text-center" id="medicine_name_1">  <select name="code" id="cars">
                                <option>---Select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"> <select name="code" id="cars">
                                <option>---Select---</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select></td>
                            <td  scope="row" class="text-center" id="medicine_name_1"> <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea></td>
                            <td  scope="row" style="width:15%;" class="text-center" id="medicine_name_1"> <input type="textarea" class="form-control" name="" id="username" value=""></td>
                            <td  scope="row"  style="width:15%;"  class="text-center" id="medicine_name_1"> <input type="textarea" class="form-control" name="" id="username" value=""></td>
                        </tr>
                </tbody>
            </table>


                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">New Item</button>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Delete Item</button>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="username">Notes</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <textarea  class="form-control" id="form7Example7" rows="3"></textarea>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:53%;">Save Credit Note</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

</div>




@endsection