@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">Office Administration</a> /
    <a href="#" style="color: #1D1D50;">Supplier Expense Report</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Supplier Expense Report</b></h4>
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
                    <th scope="col">Original Currency</th>
                    <th scope="col">Amount Due (KES)</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tr>
                <th colspan="7">ABC CONSULT</th>
            </tr>

            <tbody>
                <tr>
                    <td><input class="form-control" type="text" value="698" aria-label="Disabled input example" disabled
                            readonly></td>
                    <td><input class="form-control" type="text" value="21-12-2022" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td><input class="form-control" type="text" value="100 pics of File Lables" rows="3"
                            aria-label="Disabled input example" disabled readonly></td>
                    <td><input class="form-control" type="text" value="Office Stationary"
                            aria-label="Disabled input example" disabled readonly></td>
                    <td><input class="form-control" type="text" value="1.00 (KES)" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td><input class="form-control" type="text" value="1,000.00" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td class="text-center"><a href="{{ url('') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i>
                            <a href="{{ url('') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i>
                                <a href="{{url('')}}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i>
                    </td>
                </tr>

                <tr>
                    <td colspan="5"> <input type="text" placeholder="Total ABC CONSULT" class="form-control" disabled>
                    </td>
                    <td><input type="text" placeholder="1,000.00" class="form-control" disabled></td>
                </tr>

                <tr>
                    <td colspan="7"></td>
                </tr>

                <tr>
                    <th colspan="7">ABERDARE DOWNSTREAM MINERAL WATER</th>
                </tr>

                <tr>
                    <td><input class="form-control" type="text" value="02032020" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td><input class="form-control" type="text" value="20-12-2020" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td><input class="form-control" type="text" value="5- 20LTR Office Dispenser Water"
                            aria-label="Disabled input example" disabled readonly></td>
                    <td><input class="form-control" type="text" value="Kitchen Shopping and Consumables"
                            aria-label="Disabled input example" disabled readonly></td>
                    <td><input class="form-control" type="text" value="1.00 (KES)" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td><input class="form-control" type="text" value="1,900.00" aria-label="Disabled input example"
                            disabled readonly></td>
                    <td class="text-center"><a href="{{ url('') }}"><i style="color:rgb(13, 1, 56);"
                                class="fa fa-eye"></i>
                            <a href="{{ url('') }}"><i style="color:rgb(13, 1, 56);" class="fa fa-edit"></i>
                                <a href="{{url('')}}"> <i style="color:rgb(13, 1, 56);" class="fas fa-trash-alt"></i></td>
                </tr>

                <tr>
                    <td colspan="5"> <input type="text" placeholder="Total ABERDARE DOWNSTREAM MINERAL WATER"
                            class="form-control" disabled> </td>
                    <td><input type="text" placeholder="1,900.00" class="form-control" disabled></td>
                </tr>

                <tr>
                    <td colspan="7"></td>
                </tr>

                <tr>
                    <th colspan="7">ZUKU INTERNET</th>
                </tr>
                <tr>
                    <td colspan="5"> <input type="text" placeholder="Total ZUKU INTERNET" class="form-control" disabled>
                    </td>
                    <td><input type="text" placeholder="0.00" class="form-control" disabled></td>
                </tr>
                <tr>
                    <td colspan="7"></td>
                </tr>

                <tr>
                    <td colspan="5"> <input type="text" placeholder="Total" class="form-control" disabled>
                    </td>
                    <td><input type="text" placeholder="2,900.00" class="form-control" disabled></td>
                </tr>
            </tbody>
        </table>
    </div>















</div>

@endsection