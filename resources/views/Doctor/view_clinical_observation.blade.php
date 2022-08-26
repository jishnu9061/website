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
        {{-- <h3 style="text-align:center"><b><u>View Lab</u></b></h3><br> --}}
        <div class="">
            <table id="example1" class="table table-bordered table-striped " style="width:100%" >
                <tr>
                    <th style="text-align:center">Added Date</th>
                    <th style="text-align:center">{{date('d-m-Y H:i:s',strtotime($view_desc[0]->date))}}</th>
                </tr>
                <tr>
                    <th style="text-align:center">Lab Name</th>
                    <th style="text-align:center">{{$view_desc[0]->lab_deptname}}</th>
                </tr>
                {{-- <tr>
                    <th style="text-align:center">Added By</th>
                    <td style="text-align:center">{{$view_desc[0]->added_by}}</td>
                </tr>
                <tr>
                    <th style="text-align:center">Department</th>
                    <td style="text-align:center">{{$view_desc[0]->department}}</td>
                </tr> --}}
            </table>
        </div>
    </div>
    <br>
    <div class="container">
    <div class="py-5 text-center">
        <h2><b>Prescribed Lab Test</b></h2>
        {{-- <hr class="mb-4"> --}}
    </div>
    {{-- <div class="row">
        <table id="example1" class="table table-bordered table-striped" style="width:100%" >
            <thead>
                <tr>
                    <th>Test</th>
                    <th>Profile</th>
                </tr>
            </thead>
            <tbody>
                @foreach($view_desc as $key)
                    <tr>
                        <td style="text-align:center">{{$key->name}}</td>
                        <td style="text-align:center">{{$key->profile}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    <section class="section">
        <table class="table table-striped table-bordered" id="mydatatable">
            <thead>
                <tr class="table table-hover">
                    <th scope="col">Sl</th>
                    <th scope="col">Test</th>
                    <th scope="col">Combo Test</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach($view_desc as $key)
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td>{{$key->name}}</td>
                        <td>{{$key->profile}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
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
