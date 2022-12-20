@extends('layouts.hmsmain')
@section('content')
<div class="container">
    <h4 id="hdtpa"><b> View Memo </b></h4>
    <br>
    <div class="container">
        <form method="post" action="{{url('')}}">
            @csrf
            <div class="container">
                <div class="text-center">
                    <table class="table">
                        <tbody>
                            <!-- <tr>
                                <td colspan="2">
                                    <h5> Memo Details </h5>
                                </td>
                            </tr> -->

                            <tr>
                                <td scope="row">Date</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>

                            </tr>
                            <tr>
                                <td scope="row">Memo From</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Memo To</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Department</td>
                                <td><input class="form-control" type="text" placeholder="" aria-label="input example">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Subject</td>
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

                        </tbody>
                    </table>

                </div>

            </div>

        </form>

    </div>

</div>
@endsection