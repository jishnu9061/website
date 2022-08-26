@extends('layouts.hmsmain')
@section('content')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
    <div class="">
        <h3 style="text-align:center"><b><u>View Prescription</u></b></h3><br>
        <div class="">
            <table id="example1" class="table table-bordered table-striped " style="width:100%" >
                <tr>
                    <th style="text-align:center">Added Date</th>
                    <td style="text-align:center">{{date('d-m-Y H:i:s',strtotime($view_presc[0]->presc_date))}}</td>
                </tr>
                <tr>
                    <th style="text-align:center">Added By</th>
                    <td style="text-align:center">{{$view_presc[0]->name}}</td>
                </tr>
                <tr>
                    <th style="text-align:center">Department</th>
                    <td style="text-align:center">{{$view_presc[0]->presc_department}}</td>
                </tr>
                {{-- <tr>
                    <th style="text-align:center">Pharmacy Sub Department</th>
                    <td style="text-align:center">{{$view_presc[0]->phar_sub_deptname}}</td>
                </tr>
                <tr>
                    <th style="text-align:center">Floor</th>
                    <td style="text-align:center">{{$view_presc[0]->floor_name}}</td>
                </tr> --}}
            </table>
        </div>
    </div>
    <br>
    <div class="container">
    <div class="py-5 text-center">
        <h2>Prescribed Medicines</h2>
        <hr class="mb-4">
    </div>
    <div class="row">
        <table id="example1" class="table table-bordered table-striped" style="width:100%" >
            <thead>
                <tr>
                    <th>Medicines Name</th>
                    <th>Dosage</th>
                    <th>Instruction</th>
                    <th>Pharmacy Sub Department</th>
                    <th>Floor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($view_presc as $presc)
                    @php
                        $qty= DB::table('medicines_details')
                        ->where('Item_name',$presc->presc_medicine)
                        ->sum('quantity');
                        // ->get();
                        //  dd($qty);
                    @endphp
                    <tr class="table table-hover">
                        <td style="text-align:center">{{$presc->Item_name}}--{{$presc->item_group}}--{{$presc->category_name}}</td>
                        <td style="text-align:center">{{$presc->presc_dosage}}</td>
                        <td style="text-align:center">{{$presc->presc_instruction}}</td>
                        <td style="text-align:center">{{$presc->phar_sub_deptname}}</td>
                        <td style="text-align:center">{{$presc->floor_name}}</td>
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
