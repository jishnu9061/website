@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="{{url('suppliers_list')}}" style="color: #1D1D50;">Suppliers List</a> /
    <a href="#" style="color: #1D1D50;">View Suppliers List</a>
</nav>
<br><br>
<div class="container">

    <h4 id="hdtpa"><b>View Supplier List</b></h4>
    <br>

    <form method="post" enctype="multipart/form-data" action="{{url('')}}">

        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Category</label>
                        <select class="form-select" aria-label="Default select example" Disabled>
                            <option selected>Information Technology</option>
                            <option value="1">tech 1</option>
                            <option value="2">tech 2</option>
                            <option value="3">tech 3</option>
                        </select>
                        <!-- <button type="button" class="btn btn-primary">Add</button> -->
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Supplier</label>
                        <input type="text" class="form-control" placeholder="ABC CONSULT" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">PIN Number</label>
                        <input type="text" class="form-control" placeholder="P051462895P" Disabled>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Postal Address</label>
                        <input type="text" class="form-control" placeholder="136-00621, Nairobi" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Postal Code</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Town / City</label>
                        <input type="text" class="form-control" placeholder=" Nairobi" Disabled>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Telephone No.</label>
                        <input type="text" class="form-control" placeholder="0713515179" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Fax No.</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Email Address</label>
                        <input type="text" class="form-control" placeholder="2consultabc@gmail.com" Disabled>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <div class="mb-3">
                        <label for="inputEmail4">Physical Address</label>
                        <textarea class="form-control" rows="2" Disabled></textarea>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Website</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Payment Terms</label>
                        <select class="form-select" aria-label="Default select example" Disabled>
                            <option selected>20 Days</option>
                            <option value="1">30 Days</option>
                            <option value="2">60 Days</option>
                            <option value="3">90 Days</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">

                </div>
            </div>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Contact Person</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Designation</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Extension No.</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Mobile No.</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Email Address</label>
                        <input type="text" class="form-control" Disabled>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Notes</label>
                        <textarea class="form-control" rows="3" Disabled></textarea>
                    </div>
                </div>
            </div>


        </div>

    </form>

</div>

@endsection