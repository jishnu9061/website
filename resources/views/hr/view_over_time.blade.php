@extends('layouts.hmsmain')
@section('content')
<html>

<head>

</head>

<body>

    <div class="container">
        <br>
        <div>
            <h4 id="hdtpa"><b>Over Time</b></h4>
            <br>
        </div>
        <div class="row">



            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Employee ID</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="" id="">
                        <div class="invalid-feedback" style="width: 100%;">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="" id="">
                        <div class="invalid-feedback" style="width: 100%;">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-1">
                    <label for="username">Account No</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="" id="">
                        <div class="invalid-feedback" style="width: 100%;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username"> Date(From)</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="date" class="form-control" name="" id="username" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Number is required.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username"> Date(to)</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="date" class="form-control" name="" id="username" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Number is required.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Total Hours/Month</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="" id="">
                        <div class="invalid-feedback" style="width: 100%;">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Over Time Hours</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="" id="">
                        <div class="invalid-feedback" style="width: 100%;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Amount/Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <select name="client" id="">
                            <option>Cost Per Assignment</option>
                            <option>Cost Per Hour</option>
                            <option>More..</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-1">
                    <label for="username">Over Time Amount</label>
                    <div class="input-group">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" name="" id="">
                        <div class="invalid-feedback" style="width: 100%;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <h2 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;">Task</h2>
        <br>


        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add
                Assignment</button>
        </div>
        <br>


        <div class="table-responsive">
            <table class="table table-bordered" id="table-id">

                <thead>

                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Assignment</th>
                      
                        <th class="text-center" Style="width:10%;">Edit</th>

                       
    </ul>
  </div>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $view_list)
                    <tr>

                        <td scope="row" class="text-center">{{$view_list->id}}</td>
                        <td scope="row" class="text-center">{{$view_list->assignment}}</td>
                       
                         <td scope="row" class="text-center"><a href="{{url('edit-assigment',$view_list->id)}}"><button class="btn"><i
                                        class="fa fa-edit"></i></button></a>
                                        <a href="{{url('drop-assigment',$view_list->id)}}"><button class="btn"><i
                                        class="fas fa-trash-alt"></i></button></a>
                                    </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
        </div>



        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <br>
                <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                <button type="button" class="btn btn-primary float:left" Style="width:45%;">Cancel</button>
            </div>
        </div>

    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="text-center"><b>Add Assignment</b></h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="{{ url('add_assingment') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mb-1">
                                        <label for="username">Assignment</label>
                                       
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <textarea id="w3review" rows="4" cols="50" class="form-control"
                                                name="assignment" id="username" required></textarea>

                                            <br>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <br>
                                    <button type="submit" class="btn btn-primary float:right;"
                                        Style="width:45%;">Save</button>
                                    <button type="button" class="btn btn-primary float:right;"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="modal" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <input type="text" name="type" class="form-control" placeholder="Client Type">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal" id="my">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <input type="text" name="type" class="form-control" placeholder="Country">
                                <button class="btn btn-primary sub_btnn" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
     


    <br>

    </div>



    <script>




    </script>


    @endsection