@extends('layouts.hmsmain')
@section('content')

{{-- heading --}}
<h4 id="hdtpa"><b>Payment Details</b></h4>
<br>








<div class="container">
   

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="text-centre"><b>View Paid Details</b></h2>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Paid Date</th>
                                <th scope="col">Amount</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $view_ledger_details as $list)
                            <tr>

                                <td><input class="form-control" type="text" value="{{$list->payment_date}}" aria-label="Disabled input example"
                                        disabled readonly></td>
                                <td><input class="form-control" type="text" value="{{$list->amount}}" aria-label="Disabled input example"
                                        disabled readonly></td>
                          
                            </tr>
                            @endforeach
                        </tbody>
                    </table>




                    <!-- Modal Footer -->

                    <div>
                        <button type="button" class="btn btn-primary" style="float:right;"
                            data-dismiss="modal">Close</button>
                    </div>


                </div>
            </div>
       
</div>


<script src="{{ url('assets/js') }}/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
< <!---------------------------------------------- MODAL-1
    ---------------------------------------------------------------------->







    @endsection