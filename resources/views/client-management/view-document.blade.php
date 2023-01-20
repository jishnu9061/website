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
        <h4 id="hdtpa"><b>Client Document Details</b></h4>
        <br><br>
    </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">


            <tbody class="text-center">
                <tr>
                    <th>Client Document</th>
                    <td><img src="{{asset('/images/file/'.$view_document->file)}}" width="80px" height="50px"
                            alt="image"></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Show
                        </button>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <img src="{{asset('/images/file/'.$view_document->file)}}" width="auto" height="auto" alt="image">
        </div>
    </div>
</div>


@endsection