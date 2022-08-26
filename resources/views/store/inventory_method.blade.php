@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets/js') }}/jquery.min.js"></script>


  {{-- <div class="spacer" style="height:40px;margin-top: 30px;"> --}}


</head>

<body>

        <h4 class="text-center"><b><u>Inventory Management Method</u></b></h4>


<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="" role="" aria-labelledby="">
        {{-- <table class="table table-borderless">
            {{-- <form method="post" action="{{url('update_profit_percentage')}}" enctype="multipart/form-data">
                @csrf
                <table class="table">
                    <thead>
                      <tr>
                        <td style="color:white"><b>Profit Margin</b>&nbsp;<span>%</span></td>
                        <td><input type="text" class="form-control w-30" value="" name="profit_percentage"  placeholder="Enter Profit Percentage" aria-label="" required></td>
                        <td><button type="submit" class="btn btn-primary" style="width:100%;background-color:#46597c">
                            {{ ($profit==0)? "Submit":"Update"}}
                          </button></td>
                      </tr>
                    </thead>
                </table>
                </form> --}}


        {{-- </tr>

              </tr>

            </tbody>
          </table>
        <br> --}}
        <table class="table table-hover">

            <thead>
              <tr>
                <th>Method</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach($methods as $met)
              <tr id="data">
                <td>{{$met->stock_method}}</td>
                <input type="hidden" value="{{$met->id}}" id="hideinvtid">
                <a type="button" href="{{url('accounting_method'.$met->id)}}" class="edits" data-toggle="modal"
                      data-bs-toggle="modal"
                    data-bs-target="#edit"></a>


                        <td> @if ($met->id==$method[0]->accounting_method)

                        <button type="button" class="btn btn-success" enabled style="width:50%">Activated</button>
                    </td>

                    @else
                        <button type="button" class="btn btn-danger"  data-toggle="modal"

                         data-target='{{($method[0]->accounting_method>0) ? "":" #myModal"}}'

                     id="edit_methodz" style="width:50%">Activate</button>

                    @endif
            </tr>
        @endforeach
        </tbody>
        </table>
        <br>

        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
          <h4 class="modal-title"><b>Inventory Method</b></h4>
        </div>
        <div class="modal-body">
          <p>First submit your profit margin and after select the Inventory method.Once select an Inventory method you cant rechanged.</p>
        </div>
        <form method="post" action="{{url('accounting_method')}}" enctype="multipart/form-data">
            @csrf
        <div class="modal-footer">
            <input type="hidden" id="edit_method_modalzz" name="edit_method_modalzz">
            <button type="button" class="btn btn-primary text-white" style="width:30%;background-color:#435ebe" data-dismiss="modal">Close</button>
            <button type="submit" href="" style="width:30%;background-color:#435ebe" class="btn btn-primary text-white">Accept</button>

        </div>
        <input type="hidden" class="form-control" id="edit_method" name="hiddenid">
    </form>
      </div>
    </div>
</div>

</div>
</div>



<script>
    $(document).on('click','#edit_methodz',function(){

        var method_id = $(this).closest('#data').find('#hideinvtid').val();

        $("#edit_method_modalzz").val(method_id);
});
</script>
@endsection



