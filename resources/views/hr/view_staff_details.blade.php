

@extends('layouts.hmsmain')
@section('content')

<div class="container">


    <div>
        {{-- heading --}}
        <h4 id="hdtpa"><b>View Staff Details</b></h4>
        <br><br>

    </div>
    
        

        @csrf
        <input type="hidden" name="id" value="{{$view_list->id}}">



           
           
        </div>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td colspan="2">{{$view_list->name}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td colspan="2">{{$view_list->email}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Phone Number</th>
                    <td colspan="2">{{$view_list->phone}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Age</th>
                    <td colspan="2">{{$view_list->age}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Date Of Joining</th>
                    <td colspan="2">{{$view_list->date_of_joining}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Gender</th>
                    <td colspan="2">{{$view_list->sex}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Department</th>
                    <td colspan="2">{{$view_list->departments}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Role</th>
                    <td colspan="2">{{$view_list->role}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Status</th>
                    <td colspan="2">{{$view_list->status}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Status Date</th>
                    <td colspan="2">{{$view_list->status_date}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Postal Address</th>
                    <td colspan="2">{{$view_list->address}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Branch</th>
                    <td colspan="2">{{$view_list->bank_branch}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Postal Code</th>
                    <td colspan="2">{{$view_list->postal_code}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Town/City</th>
                    <td colspan="2">{{$view_list->town}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Basic Salary</th>
                    <td colspan="2">{{$view_list->salary}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Partners Drawing</th>
                    <td colspan="2"> {{$view_list->partner}}</td>

                  </tr>
                  <tr>
                    <th scope="row">N.S.S.F Number</th>
                    <td colspan="2"> {{$view_list->NSSF}}</td>

                  </tr>
                  <tr>
                    <th scope="row">N.H.I.F Number</th>
                    <td colspan="2">{{$view_list->NHIF}}</td>

                  </tr>
                  <tr>
                    <th scope="row">CRA PIN Number</th>
                    <td colspan="2">{{$view_list->cra_pin}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Should be Taxed?</th>
                    <td colspan="2">{{$view_list->tax}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Payroll Deductions</th>
                    <td colspan="2">{{$view_list->deduction}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Company N.S.S.F Contribution</th>
                    <td colspan="2">{{$view_list->id}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Leave Days Per Year</th>
                    <td colspan="2">{{$view_list->leave}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Pension Rate</th>
                    <td colspan="2">{{$view_list->pension_rate}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Bank Name</th>
                    <td colspan="2">{{$view_list->bank}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Account Number</th>
                    <td colspan="2">{{$view_list->account}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Branch</th>
                    <td colspan="2">{{$view_list->bank_branch}}</td>

                  </tr>
                  <tr>
                    <th scope="row">Branch Code</th>
                    <td colspan="2">{{$view_list->branch_code}}</td>

                  </tr>

            </tbody>
          </table>

    </form>



</div>






        @endsection

