@extends('layouts.hmsmain')
@section('content')
    {{-- heading --}}
    <div class="container">
        <h4 id="hdtpa"><b>Edit Category Management </b></h4><br>
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
            <form>
                <div class="col-md-12">
                    <div class="mb-1">
                        <label for="username">Category</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
    
                            </div>
                            <input type="text" class="form-control" name="title" id="age">
                            <div class="invalid-feedback" style="width: 100%;">
                                Incorporation is required
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
                    <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                    <button type="button" class="btn btn-primary float:left" Style="width:45%;"
                        data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>  
        </div>
          
          </div>
    @endsection
