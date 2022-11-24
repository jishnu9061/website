@extends('layouts.hmsmain')
@section('content')
<style>
.btn-width {
    width: 10%;
}
</style>
<div>


</div>
<br>
<div class="container">
    <div>
        {{-- heading --}}
        <h4 id="hdtpa"><b>View Pickup Reception</b></h4>
        <br><br>
    </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">


            <tbody>
                <tr>
                    <th>Client Document</th>
                    <td><img src="{{asset('/images/file/'.$view_document->file)}}" width="80px" height="50px"
                            alt="image"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection