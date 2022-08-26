@extends('layouts.hmsmain')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    </head>
    <style>
        .btn-width {
            width: 10%;
        }
    </style>
    <div>
        <div class="container">
            <h3 style="text-align:center"><u><b>Departments</b></u></h3><br>
            <div style="width:50%; margin:0 auto;">
                <div class="card w-20">
                    <div class="card-body">
                        <table>
                            <tbody>
                                <form method="post" action="{{ url('update_substore') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-sm-12">
                                        @foreach($departments as $data)
                                        <a type="button" href="{{url('show_store_details'.$data->id)}}" class="btn btn-outline-primary btn-block">{{$data->depname}}</a>
                                        @endforeach
                                        {{-- <select class="" name="department_name" id="department_name">
                                            <option value="option_select">Select</option>
                                                 @foreach($substore_details as $data)
                                                    <option value="{{ $data->id }}" {{$company->shopping_id == $shopping->id  ? 'selected' : ''}}>{{ $shopping->fantasyname}}</option>
                                                 @endforeach
                                            </select> --}}
                                            {{-- <select class="form-select contrl searchingBook"   name="department_name" aria-label="Default select example" required>
                                                <option>Select</option>
                                                    @foreach($substore_details as $data)
                                                        <option value="{{$data->department_name}}"  {{ (strcmp($data->department_name,$substore_details->department_name)==0) ? "selected":""}} >  {{$substore_details->department_name}}   </option>
                                                    @endforeach
                                            </select> --}}
                                    </div>
                                    <br>
                            </tbody>
                        </table>

                    </form>
                        <br>



                    </div>


                </div>
                <br>
            </div>
        </div>
        <div>




        </div>
    </div>
    </div>
    </div>

  <!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="sub_store_name[' + i +
            ']" placeholder="Enter Substore Name" class="form-control" /></td><td><button type="button" style="width:100%" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection
