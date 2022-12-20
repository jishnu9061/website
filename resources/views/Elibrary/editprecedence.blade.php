@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Edit Precedence Register Repository</b></h4>
    <br>
</div>
<div class="container">
    <form>

        <div class="row">

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">File No</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Client Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">File Handled By</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Date From</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="date" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Date To</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="date" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">File Status</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <select name="event" id="cars">
                            <option>---select---</option>
                            <option>Active</option>
                            <option>Pending</option>
                            <option>Closed</option>

                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-1">
                    <label for="username">File Discription</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <textarea rows="4" cols="50" name="paddress" class="form-control" type="text"></textarea>
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Upload File</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="file" class="form-control" name="user" id="age">
                        <div class="invalid-feedback" style="width: 100%;">
                            Incorporation is required
                        </div>
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
                <button type="submit" class="btn btn-primary float:right;" Style="width:50%;">Save</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                    data-dismiss="modal">Cancel</button>
            </div>
        </div>


    </form>
</div>











@endsection