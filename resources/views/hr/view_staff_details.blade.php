@extends('layouts.hmsmain')
@section('content')

<div class="container">


    <div>
        {{-- heading --}}
        <h4 id="hdtpa"><b>View Staff Details</b></h4>
        <br><br>

    </div>

    <form method="post" action="{{url('view_staff_details')}}" id="form">
        <input type="hidden" name="id" value="{{}}">

        @csrf

        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">



            </table>
            @csrf
        </div>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Phone Number</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Age</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Date Of Joining</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Gender</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Department</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Role</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Status</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Status Date</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Postal Address</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Branch</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Postal Code</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Town/City</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Basic Salary</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Partners Drawing</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">N.S.S.F Number</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">N.H.I.F Number</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">CRA PIN Number</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Should be Taxed?</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Payroll Deductions</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Company N.S.S.F Contribution</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Leave Days Per Year</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Pension Rate</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Bank Name</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Account Number</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Branch</th>
                    <td colspan="2"></td>

                  </tr>
                  <tr>
                    <th scope="row">Branch Code</th>
                    <td colspan="2"></td>

                  </tr>

            </tbody>
          </table>

    </form>



</div>






        @endsection
