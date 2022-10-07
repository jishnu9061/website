@extends('layouts.hmsmain')
@section('content')
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style>
    table {

        border: hidden;
        font-size: medium;
        color: black;

    }

    th,
    td,
    tr {
        border: hidden;
        color: black;

    }
    </style>
</head>

<body>
    <!-- <h2 >Add Court</h2><br> -->
    <h2 style="text-align:center; text-shadow: 2px 1px;">Edit User Role</h2>
    <hr class="mb-4">.
    <form>
        <table class="table">
            <tbody>

                <tr>
                    <td style="width:30%"> Role Name:</td>
                    <td>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" placeholder="Name">
                        </div>
                    </td>


                <tr>


        </table>
        <br>
        <div class="class" style="text-align:center;">
            <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
            <button type="button" class="btn btn-primary float:left" Style="width:45%;">Close</button>

        </div>
    </form>


</body>

</html>
@endsection