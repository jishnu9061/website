@extends('layouts.hmsmain')
@section('content')
<style>
    .btn-width{
        width:10%;
    }
</style>
<div class="container">
    <a href=""  target="_blank"><input type="button" id="print_order" style="float:right;" class="btn btn-primary" value="Print" ></a>
    <h4 style="text-align:center"><b>{{Auth::user()->Hospital}}</b></h4>
        <h6 style="text-align:center"><b>{{$appointment[0]->location}}</b></h6><hr>
        <h6  style="text-align:center">Token No</h6>
            <h3 style="text-align:center">{{$appointment[0]->token}}</h3>
        <h5 style="text-align:center">REG/CONSULTATION BILL(CARD {{date('d-M-Y',strtotime($appointment[0]->appointmentdate))}})</h5><br>
        <table class="table">
            <tbody>
              <tr>
                <td>MR No:&nbsp;{{$appointment[0]->patientid}}</td>
                <td></td>
                <td>Bill No:&nbsp;{{$appointment[0]->id}}</td>
              </tr>
              <tr>
                <td>Dr.:&nbsp;{{$appointment[0]->name}}</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Patient Name:&nbsp;{{$appointment[0]->firstname}} Age/sex:&nbsp;{{$appointment[0]->age}}y/{{$appointment[0]->gender}}</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Address:&nbsp;{{$appointment[0]->address}}</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <table class="table">
            <thead>
              <tr>
                <th>Particulars</th>
                <th></th>
                <th scope="col">Amount</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>Registration Fee</td>
                <td></td>
                <td>
                    @if ($appointment[0]->reg_fee)
                        {{$appointment[0]->reg_fee}}
                            @else
                                0
                    @endif
                </td>
              </tr>
              <tr>
                <td>Consultation Fee</td>
                <td></td>
                <td>
                    @if ($appointment[0]->cons_fee)
                        {{$appointment[0]->cons_fee}}
                        @else
                        0
                    @endif
                </td>
              </tr>
              <thead>
                <tr>
                  <th>Total</th>
                  <th></th>
                  <th scope="col">{{$appointment[0]->cons_fee+$appointment[0]->reg_fee}}</th>
              </tr>
              </thead>
            </tbody>
           </table>
           <p>Billed By:</p>
  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5" id="hidethat"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
</div>
@endsection
