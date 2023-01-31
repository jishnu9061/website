@extends('layouts.hmsmain')
@section('content')
<nav style="font-size:15px;">
    <a href="{{url('home')}}" style="color: #1D1D50;">Home</a> /
    <a href="#" style="color: #1D1D50;">CRM</a> /
    <a href="#" style="color: #1D1D50;">Lead</a> /
    <a href="#" style="color: #1D1D50;">Individual Customer Leads</a>
</nav>
<br><br>
{{-- heading --}}
<div class="container">

<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('lead') }}"  style="font-size:15px;">Corporate</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('individual_lead') }}"  style="font-size:15px;">Individual</a>
        </li>

    </ul>

    <br>
</div>

    <h4 id="hdtpa"><b>Individual Customers Leads</b></h4>
    <br>

    <br>
    <div class="header_wrap">
        <div class="num_rows">
            <div class="form-group">
                <!--		Show Numbers Of Rows 		-->
                <select class="form-control" aria-label="Page navigation example" name="state" id="maxRows">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option>
                    <option value="5000">Show ALL Rows</option>
                </select>

            </div>
        </div>
        <div class="tb_search">
            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                class="form-control">
        </div>

     <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-class" id="table-id">

                        <thead>

                            <tr>

                                <!-- <th class="text-center">No</th> -->
                                <th class="text-center">Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Source</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>

                            </tr>

                        </thead>
                        <tbody>
                            @foreach($individual_leads as $row)
                           <tr class="text-center" id="data">

                                <td>{{$row->customer_name}}</td>
                                <td>{{$row->mobile_no}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->source}}</td>
                                <td>{{$row->status}}</td>
                                <td scope="row">
                                    <a href="{{url('view_individual_lead',$row->id)}}"><i style="color:black;" class="fa fa-eye"
                                            aria-hidden="true"></i></a>

                                    <span class="m-2"></span>

                                    <a href="{{url('individual_proposal_lead',$row->id)}}"><i style="color:black;" class="fas fa-arrow-right"
                                            aria-hidden="true"></i></a>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>

                <!--		Start Pagination -->
                <div class='pagination-container'>
                    <nav>
                        <ul class="pagination">
                            <!--	Here the JS Function Will Add the Rows -->
                        </ul>
                    </nav>
                </div>
                <div class="rows_count">Showing 11 to 20 of 100</div>
            </div>
            <!-- 		End of Container -->
            @endsection
