@extends('layouts.cra_superadmin_ly')
    @section('content')
        <nav style="font-size:12px;">
            <a href="{{url('superadminhome')}}" style="color: #15144d;">home</a> 

        </nav>
        <br>
        <br>


        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6" style=" width: auto;height: auto;margin: 0 auto;padding: 5px;position: relative;">
                    <div class="card" style="width: 120%;background-color:#f1d9b0;border: none;">
                        <div class="card-body px-3 py-4-5" >
                            <div class="row" >
                                <div class="col-md-4">
                                    <div class="stats-icon " style="background-color: #15144d;">
                                        <i class="fas fa-building" ></i></i>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-left:1px;">
                                    <h5 class=" font-semibold">Total Companies</h5>
                                    <h6 class="font-extrabold mb-0">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6" style=" width: auto;height: auto;margin: 0 auto;padding: 5px;position: relative;">
                    <div class="card" style="width: 120%;background-color:#f1d9b0;border: none;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue" style="background-color: #15144d;">
                                        <i class="fas fa-building" ></i></i>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-left:1px;">
                                    <h5 class="font-semibold" style="color: #15144d;">Active Companies</h5>
                                    <h6 class="font-extrabold mb-0">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6" style=" width: auto;height: auto;margin: 0 auto;padding: 5px;position: relative;">
                    <div class="card" style="width: 120%;background-color:#f1d9b0;border: none;">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green text-muted" style="background-color: #6c757d;">
                                        <i class="fas fa-building" ></i></i>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-left:1px;">
                                    <h5 class="text-muted font-semibold">Inactive Companies</h5>
                                    <h6 class="text-muted font-extrabold mb-0">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection