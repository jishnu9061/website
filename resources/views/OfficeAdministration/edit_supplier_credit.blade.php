@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <h4 id="hdtpa"><b>Edit Supplier Credit Note</b></h4>
    <br>
    <div class="card">

<div class="card-body">
    <form method="post" enctype="multipart/form-data" action="{{url('')}}">
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Date</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Branch</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Nairobi</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Credit Note No.</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Supplier</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>choose a supplier</option>
                            <option value="1">supplier 1</option>
                            <option value="2">supplier 2</option>
                            <option value="3">supplier 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Attach to Invoice</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>None</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-1">
                    <div class="mb-3">
                        <label for="inputEmail4">Currency</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>KES</option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="mb-3">
                        <label for="inputEmail4">Exchange Rate </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Client</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--- select ---</option>
                            <option value="1">client 1</option>
                            <option value="2">client 2</option>
                            <option value="3">client 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">File</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--- select ---</option>
                            <option value="1">file 1</option>
                            <option value="2">file 2</option>
                            <option value="3">file 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Financial Account</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--- select ---</option>
                            <option value="1">Acc 1</option>
                            <option value="2">Acc 2</option>
                            <option value="3">Acc 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Partner Drawings Account</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--- select ---</option>
                            <option value="1">Acc 1</option>
                            <option value="2">Acc 2</option>
                            <option value="3">Acc 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Partner Drawings Item</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--- select ---</option>
                            <option value="1">item 1</option>
                            <option value="2">item 2</option>
                            <option value="3">item 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">Amount</label>
                        <input type="text" class="form-control">
                        <div class="form-text">(inclusive of VAT & Excise Duty)</div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <div class="mb-3">
                        <label for="inputEmail4">Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="mb-3">
                        <label for="inputEmail4">VAT Tax</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>VAT (@0%)</option>
                            <option value="1">VAT (@5%)</option>
                            <option value="2">VAT (@10%)</option>
                            <option value="3">VAT (@15%)</option>
                        </select>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary " Style="width:50%;">Update</button>
                    <button type="button" class="btn btn-primary " Style="width:45%;"
                        onclick="history.back()">Cancel</button>
                </div>
                <div class="col-sm">

                </div>
            </div>

        </div>

    </form>
</div>
</div>

</div>

@endsection