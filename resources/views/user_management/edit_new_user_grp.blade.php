@extends('layouts.hmsmain')
@section('content')

        <div>
            <!-- <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>
                        Edit Group</u></b></span></button><br><br><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous"> -->
                {{-- heading --}}
    <h4 id="hdtpa"><b>Edit Group</b></h4>
    <br><br>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{url('update_group')}}" id="form">
                @csrf

                <input type="hidden" name="id" value="{{$edit_user->id}}">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Group Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="group_code" id="username" value="{{$edit_user->group_code}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Group Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend"></div>
                                <input type="text" class="form-control" name="group_name" id="username" value="{{$edit_user->group_name}}">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Name is required.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Default Menu</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="default_menu" id="cars">
                                    <option value="">{{$edit_user->default_menu}}</option>
                                    <option>--select--</option>
                                    <option>Dashboard</option>
                                    <option>Client Management</option>
                                    <option>File Management</option>
                                    <option>Client Invoicing</option>
                                    <option>Office Administration</option>
                                    <option>Accounting and Finance</option>
                                    <option>HR & Payroll</option>
                                    <option>Tools & Addons</option>
                                    <option>System Setup</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-1">
                            <label for="username">Group Roles</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <select name="group_role" id="cars">
                                    <option value="">{{$edit_user->group_role}}</option>
                                    <option>--selects--</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
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
                        <button type="submit" class="btn btn-primary float:right;" Style="width:45%;">Update</button>
                        <button type="button" class="btn btn-primary float:left" Style="width:45%;"onclick="history.back()">Cancel</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ url('assets/js') }}/jquery.min.js"></script>

@endsection