@extends('layouts.hmsmain')
@section('content')

    <div class="">
        <h3 style="text-align:center"><b><u>View Department sub</u></b></h3><br>
        <div class="">
            <table id="example1" class="table table-bordered table-striped " style="width:100%" >
                <tr>
                    <th style="text-align:center">Main Department</th>
                    <td style="text-align:center">{{$phar_dept[0]->maindepartment}}</td>
                    <th style="text-align:center">Sub Department Name</th>
                    <td style="text-align:center">{{$phar_dept[0]->phar_sub_deptname}}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="container">
    <div class="py-5 text-center">
        <h2>Departments And Floor</h2>
        <hr class="mb-4">
    </div>
    <div class="row">
        <table id="example1" class="table table-bordered table-striped " style="width:100%" >
            <thead>
                <tr>
                    <th>Department Name</th>
                    <th>Floor Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($phar_dept as $subdept)
                    <tr class="table table-hover">
                        <td style="text-align:center">{{$subdept->department}}</td>
                        <td style="text-align:center">{{$subdept->floor_name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection

{{-- <script>
    var tzoffset = (new Date()).getTimezoneOffset() * 60000; //offset in milliseconds
    var localISOTime = (new Date(Date.now() - tzoffset)).toISOString().slice(0, -1);

    console.log(localISOTime)
</script> --}}
<script type="text/javascript">
   const dateInput = document.querySelector('#date-input')

const localDt =_=>  // return local Date time
  {
  let now = new Date()
  now.setMinutes(now.getMinutes() - now.getTimezoneOffset())
  now.setSeconds(0)       // remove seconds
  now.setMilliseconds(0) // remove milliseconds
  return now
  }

// usage :
dateInput.valueAsDate = localDt()  // init date value
  </script>
