@extends('layouts.hmsmain')
@section('content')


{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>View Tender Applied Details</b></h4>
    <br>

    <div class="container">
        <form method="post" action="{{url('')}}">
            @csrf
            <div class="container">
                <div class="text-center">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <h5> Tender Details Form </h5>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">Date</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>

                            </tr>
                            <tr>
                                <td scope="row">Item Name</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Quantity</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Supplier Name</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Mobile No.</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Address</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Description</td>
                                <td><textarea class="form-control" rows="2" placeholder=""></textarea></td>
                            </tr>
                            <tr>
                                <td scope="row">Supporting Documents</td>
                                <td><input type="file" class="form-control">
                                    <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
                                </td>

                            </tr>
                            <tr>
                                <td scope="row">Period of Contract (in Days)</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Total Cost of Tender</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">Payment Type</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="button" class="btn btn-primary " Style="width:50%;">Accept</button>
                        <button type="button" class="btn btn-primary " Style="width:45%;">Reject</button>
                    </div>
                </div>

            </div>

        </form>

    </div>
</div>

@endsection