@extends('layouts.hmsmain')
@section('content')
<html>

<head>

    <style>
    body {
        background-color: white;
    }

    th,
    td,
    tr {
        border: 1px solid gray;
        border-collapse: collapse;
    }
    </style>
</head>

<body>

    {{-- heading --}}
    <h4 id="hdtpa"><b>Fee Notes / DRN / Interim Fee Notes</b></h4>
    <br><br>

    <a href="{{('new_drn_fee_notes')}}"><button class="btn btn-primary add-btn" style="width=10%;height=100%;">New Fee
            Note</button></a> <br>
    <br>


    <div class="text-center">
        <h5><b>Client Fee Notes</b></h5>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered" id="new-item">

            <thead>

                <tr>

                    <th class="text-center">Issue Date</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Doc Type</th>
                    <th class="text-center">Doc No</th>
                    <th class="text-center">Client</th>
                    <th class="text-center">File No</th>
                    <th class="text-center">File Name </th>
                    <th class="text-center">Balance Amount</th>
                    <th class="text-center">User Assigned</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>

                </tr>
            </thead>
            <tbody>

                <tr>

                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                    <td class="text-center" style="color:rgb(13, 1, 56);"></td>


                </tr>
            </tbody>

        </table><br>
    </div>
</body>

</html>

@endsection