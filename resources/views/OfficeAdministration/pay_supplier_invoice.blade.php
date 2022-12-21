@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Pay Supplier Invoice</b></h4>
    <br>
    <div class="row align-items-start">
        <div class="col">
            <label class="form-label">Date</label>
            <input type="date" class="form-control">
        </div>
        <div class="col">
            <label class="form-label">Supplier</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>--- select ---</option>
                <option value="1">supplier 1</option>
                <option value="2">supplier 2</option>
                <option value="3">supplier 3</option>
            </select>
        </div>
    </div>
    <br>


    <!-- table -->
    <div class="table-responsive">
        <table class="table">

            <thead>
                <tr class="text-center">
                    <th scope="col">Invoice No</th>
                    <th scope="col">Invoice Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Exp Account</th>
                    <th scope="col">Net Due</th>
                    <th scope="col">WHT Amt</th>
                    <th scope="col">WHV Amt</th>
                    <th scope="col">View</th>
                </tr>
            </thead>
            <tr>
                <td colspan="4"></td>
                <td><input class="form-control" type="text" value="0.00" aria-label="Disabled input example" disabled
                        readonly></td>
                <td><input class="form-control" type="text" value="0.00" aria-label="Disabled input example" disabled
                        readonly></td>
                <td><input class="form-control" type="text" value="0.00" aria-label="Disabled input example" disabled
                        readonly></td>
                <td>   </td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>

            <tbody>

                <tr>
                    <td colspan="5"> <input type="text" placeholder="Mode of Payment" class="form-control" disabled>
                    </td>
                    <td colspan="3"><select class="form-select" aria-label="Default select example">
                            <option selected>select payment mode </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="5"> <input type="text" placeholder="Account Type" class="form-control" disabled>
                    </td>
                    <td colspan="3"><select class="form-select" aria-label="Default select example">
                            <option selected>---select--- </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="5"> <input type="text" placeholder="Account to Withdraw from" class="form-control"
                            disabled>
                    </td>
                    <td colspan="3"><select class="form-select" aria-label="Default select example">
                            <option selected>---select--- </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="5"> <input type="text" placeholder="Amount to Paid" class="form-control" disabled>
                    </td>
                    <td colspan="3"><input class="form-control" type="text" placeholder=""
                            aria-label=".form-control example"></td>
                </tr>

                <tr>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="5"> <input type="text" placeholder="Currency" class="form-control" disabled>
                    </td>
                    <td colspan="3"><select class="form-select" aria-label="Default select example">
                            <option selected>KES </option>
                            <option value="1"></option>
                            <option value="2"></option>
                            <option value="3"></option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="5"> <input type="text" placeholder="Exchange Rate" class="form-control" disabled>
                    </td>
                    <td colspan="3"><input class="form-control" type="text" placeholder=""
                            aria-label=".form-control example"></td>
                </tr>

            </tbody>
        </table>
    </div>
    <br>
    <div class="text-center">
        <button type="button" class="btn btn-primary" style="width:40%;">Pay Bills</button>
    </div>



</div>

@endsection