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


            <tbody>
                </tr>
                <th>Client Document</th>
                <td><img src="{{asset('/images/file/'.$view_document_details->file)}}" width="80px" height="50px"
                        alt="image">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        style="margin-left:5px; float:right;margin-right:5px;">
                        Show
                    </button>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <img src="{{asset('/images/file/'.$view_document_details->file)}}" width="auto" height="auto" alt="image">
        </div>
    </div>
</div>



@endsection