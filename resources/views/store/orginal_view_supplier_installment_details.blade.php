@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>
    <div class="container">
         <h3 style="text-align:center"><b><u>{{$installment_details[0]->supplier_name}}&nbsp;Installment&nbsp;Details&nbsp;</u></b></h3><br>


      </div>

    <br>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        
            <table class="table table-hover" id="allsupplier">
                <thead>
                    <tr>
                        <th class="text-center">Paid Date</th>
                        <th class="text-center">Amount</th>
                    </tr>
                </thead>
                <tbody>

                     @foreach( $installment_details as $details)
                        <tr id="data">
                             <input type="hidden" name="id" id="" value="{{$details->purchase_id}}">
                            <td  class="text-center" style="width:15%"><input type="text" value="{{$details->supplier_paid_date}}"  name="expiry_date[]" class="form-control text-center" readonly ></td>
                            <td  class="text-center" style="width:18%"><input type="text" value="{{$details->amount}}"  name="expiry_date[]" class="form-control text-center" readonly></td>
                      @endforeach
                          
                        </tr>
                  
                </tbody>
            </table>
            {{-- Supplier Modal Edit  Start--> --}}



<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>
<!-- End delete confirmation message -->
{{-- Search booking script --}}
<script>
    $(document).ready(function(){
             $('.searchingBook').select2();
    });
 </script>

  
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
  </script>
{{-- Supplier Edit start --}}
@endsection



