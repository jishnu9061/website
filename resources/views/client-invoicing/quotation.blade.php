@extends('layouts.hmsmain')
@section('content')
<html>


{{-- heading --}}
<h4 id="hdtpa"><b>Quotations / Proforma Fee Notes</b></h4>
<br><br>

<a href="{{url('new-document')}}"><button class="btn btn-primary add-btn" style="width=100%;height=100%;">New
        Document</button></a>

<br>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="new-item">

        <thead>

            <tr>
             
                <th class="text-center">Issue Date</th>
                <th class="text-center">Doc Type</th>
                <th class="text-center">Doc No</th>
                <th class="text-center">Client</th>
                <th class="text-center">File No</th>
                <th class="text-center">File Name</th>
                <th class="text-center">Amount</th>
                <th class="text-center">User Assigned</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
               

            </tr>
        </thead>
        <tbody>

            <tr>
           
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center" style="color:rgb(13, 1, 56);"></td>
                <td class="text-center"><a href="{{url('edit-document')}}"><i style="color:black;" class="fa fa-edit"
                            aria-hidden="true"></i>
                        <a href=""><i style="color:black;" class="fa fa-trash" aria-hidden="true"></i>
                </td>
   
            </tr>
        </tbody>


    </table>
</div>

</html>

@endsection