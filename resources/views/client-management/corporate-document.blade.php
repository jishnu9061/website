@extends('layouts.hmsmain')
@section('content')
<div class="container">

    <div>
        {{-- heading --}}
        <h4 id="hdtpa"><b>Add Corporate Document</b></h4>
        <br><br>


    </div>
    <div class="row">
        <div class="col-md-12 order-md-1">
            <form method="post" action="{{url('add-corporate-document')}}" id="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="corporate_id" value="{{$corporate_docs->corporate_id}}">

                
             
                <br>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped  order-list" id="table_field">
                            <thead>
                                <tr>
                                    <th>Document Type</th>
                                    <th>File Upload</th>
                                    <th>Date</th>
                                    <th>ADD</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:45%;">

                                    <input type="text" name="testname[]" list="cityname"
                                                                style="width:100%;">
                                    <datalist id="cityname" style="width:100%;">
                                                                <option>
                                                                <option>
                                                                <option>
                                                            </datalist>

                                        <!-- <select class="form-control select_group product" data-row-id="row_3"
                                            id="product_detailes" name="testname[]" style="width:100%;">
                                            <option selected>Select</option>
                                            <option value="assets">Type 1</option>
                                        </select> -->
                                    </td>
                                    <td style="width:45%;"> <input type="file" class="form-control" name="file[]"
                                            id="username" value="" placeholder="File" required>
                                    </td>

                                    <!-- <td>
                                        <input type="hidden" class="form-control" name="client[]" id="username"
                                            value="{{$corporate_docs->Client_type}}" placeholder="File" required>
                                    </td> -->

                                    <td>
                                        <input type="date" class="form-control" name="date[]" id="username" required>
                                    </td>
                                    <td> <input type="button" class="btn btn-primary float:right;" id="add" value="ADD">
                                    </td>
                                    <input type="hidden" class="form-control" name="client" id="username"
                                        value="{{$corporate_docs->Client_type}}" placeholder="File" required>
                                        
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <br>


                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">
                        <br>
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Submit</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;" onclick="history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

</div>

</div>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

<!-- Table add row -->




@endsection