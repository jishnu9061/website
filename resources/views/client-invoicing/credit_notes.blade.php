@extends('layouts.hmsmain')
@section('content')


    {{-- heading --}}
    <h4 id="hdtpa"><b>Credit Notes</b></h4>
    <br><br>




    <a href="{{url('new_credit_notes')}}"><button class="btn btn-primary add-btn"
            style="width: 20%; margin-bottom:5%;">New Credit Note</button></a>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th class="text-center">Date</th>
                            <th class="text-center">Doc No</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">File No</th>
                            <th class="text-center">File Name</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">User<br>Assigned</th>
                            <th class="text-center">Approved By</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>
                            <td scope="row" class="text-center"></td>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    @endsection