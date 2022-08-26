@extends('layouts.hmsmain')
@section('content')
<style>
    .btn-width{
        width:10%;
    }
</style>
<div>
    {{-- <a type="button" href="{{url('view_manufacturers')}}"class="btn btn-outline-primary btn-width ">Back</a> --}}
</div>
<br>
<div class="container">
    <h3 style="text-align:center"><b><u>Edit History Details</u></b></h3>
     <table class="table table-bordered" style="border: 1px solid">
         <form method="post" action="{{url('update_history')}}" enctype="multipart/form-data">
             @csrf
              <tbody>
                @foreach($edit_history as $data)
                <input type="hidden" name="item_id" value="{{$data->history_id}}" class="form-control">
                <tr>
                    <th style="width:30%" >Date</th>
                    <td> <input type="date" value="{{$data->history_date}}" name='history_date' class="form-control"></td>
                </tr>
                <tr>
                    <th>History Details</th>
                    <td><textarea class="form-control" name="history">{{$data->history_detailes}}</textarea></td>
                </tr>
                <tr>
                    <th>Documents</th>
                        <td><img src="{{ asset('/images/history/'.$data->history_doc) }}" style="width:100%;height:50%;"><br><br>
                            <input type="file" name="image" class="form-control">
                        </td>
                </tr>
                <tr>
                    <tr>
                        <th></th>
                        <br>
                        <td><button type="submit" class="btn btn-primary" style="background-color:#435ebe;width:55%;">Update</button></td>
                    </tr>
                </tr><br>
                @endforeach
            </tbody>

        </form>
        </table>


    </div>
    <script>
        $(document).ready(function(){
                 $('.searchingBook').select2();
        });
     </script>
@endsection

