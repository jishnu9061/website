@extends('layouts.hmsmain')
@section('content')



<div class="container">
    <h4 id="hdtpa"><b>Edit Supplier  Details</b></h4>
    <br>


    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Supplier  Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Number is required.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Product Supply</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>

    <div class="row">

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">TAX ID</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Contact No</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-1">
                <label for="username">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="email" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">Address</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <textarea class="form-control" rows="3"></textarea>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">City</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">State</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-1">
                <label for="username">PIN code</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="text" class="form-control" name="" id="username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-1">
                <label for="username">Product Details</label>
                <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <textarea class="form-control" rows="3"></textarea>

                    <br>
                </div>
            </div>
        </div>

    </div>
    <br>


    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <br>
            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
            <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                onclick="history.back()">Close</button>
        </div>
    </div>
</div>
</form>
















@endsection