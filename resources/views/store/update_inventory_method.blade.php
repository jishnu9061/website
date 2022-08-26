@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>

        <h4 class="text-center"><b>Inventory Management Method</b></h4>


<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <table class="table table-hover">

            <thead>
              <tr id="data">
                <th>Method</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>

                @foreach($methods as $method)
              <tr>
                <td>{{$method->stock_method}}</td>
                <input type="hidden" value="{{$method->status}}" id="hideinvtid">
                @if($method->status == '1')
                {
                    <td><button type="button" class="btn btn-success"  style="width:100%">Active</button></td>
                }

            @else
            {
                <td><button type="button" class="btn btn-danger" style="width:100%">Inactive</button></td>
            }
            @endif
            </tr>
              @endforeach
            </tbody>
        </table>
</div>
        <!-- Modal -->
</div>
<!-- Delete  confirmation Message -->
<script>
	function myFunction(){
		if(!confirm("Are you sure to delete this"))
		event.preventDefault();
	}
</script>
{{-- Search booking script --}}


<!-- Supplier Pagenation -->
<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(function(){
      $("#allsupplier").dataTable();
    })
  </script>
{{-- Supplier Edit start --}}

<script>
    $(document).on('click','#edit_generic',function(){

        var method_id = $(this).closest('#data').find('#hideinvtid').val();
        $("#edit_id123").valmethod_id);
});
</script>

@endsection



