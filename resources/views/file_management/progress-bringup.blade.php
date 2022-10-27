@extends('layouts.hmsmain')
@section('content')
<!DOCTYPE html>
<html lang="en">



<body>

    <div class="container-fluid">

        <div class="row sm">
            <div class="col-sm-4 "> <a href=""><img class="logo_size" src="assets\image\2.png" alt=""><button
                        type="button" style="width:70%;" class="btn btn-primary btn_align_btn">Add New File
                        Progress</button></a></div>
            <div class="col-sm-4 "> <a href="{{url('add-new-bringup')}}"><img class="logo_size" src="assets\image\2.png"
                        alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">Bringup</button></a></div>
            <div class="col-sm-4 "> <a href="{{url('file-action-hours')}}"><img class="logo_size"
                        src="assets\image\2.png" alt=""><button type="button" style="width:70%;"
                        class="btn btn-primary btn_align_btn">File Action Hours</button></a></div>

        </div>

</body>

</html>
@endsection