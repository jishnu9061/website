@extends('layouts.hmsmain')
@section('content')
{{-- heading --}}
<div class="container">
    <h4 id="hdtpa"><b>Supplier Monthly Schedule</b></h4>
    <br>

    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>

                    <th scope="col">Invoice No</th>
                    <th scope="col">Invoice Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Exp Account</th>
                    <th scope="col">Original Currency</th>
                    <th scope="col">Amount (KES)</th>
                    <th scope="col">WHT Amt (KES)</th>
                    <th scope="col">WHV Amt (KES)</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <td colspan="8"><b>ABC CONSULT</b></td>
                </tr>
                <tr>
                    <td>0285</td>
                    <td>22-12-20222</td>
                    <td> payment for business cards, vouchers, brandings, staff id, door labels.</td>
                    <td>Caroline Ratemo</td>
                    <td>1.00 (KES)</td>
                    <td>29,850.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>0678</td>
                    <td>21-12-20222</td>
                    <td> printing 300pcs of business cards for client.</td>
                    <td> Business Development & Marketing</td>
                    <td>1.00 (KES)</td>
                    <td>2,100.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td colspan="5">Total  ABC CONSULT</td>
                    <td>31,950.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td colspan="8"><b>ABERDARE DOWNSTREAM MINERAL WATER</b></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>20-12-20222</td>
                    <td> payment for 20L 5 bottles of water for office.</td>
                    <td>Caroline Ratemo</td>
                    <td>1.00 (KES)</td>
                    <td>1,900.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>026</td>
                    <td>19-12-20222</td>
                    <td> Amount paid for 5 bottles 20L of office drinking water.</td>
                    <td> Business Development & Marketing</td>
                    <td>1.00 (KES)</td>
                    <td>1,900.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td colspan="5">Total  ABERDARE DOWNSTREAM MINERAL WATER</td>
                    <td>3,800.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td colspan="5"><b>TOTAL</b></td>
                    <td>35,750.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>


            </tbody>
        </table>
    </div>





</div>
@endsection