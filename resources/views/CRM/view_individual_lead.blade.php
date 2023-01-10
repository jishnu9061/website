@extends('layouts.hmsmain')
@section('content')

<style>
th{ 
    width:30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b>Detail</b></h4>
    <br><br>

    <form>
        <div class="table-responsive">
            <table class="table table-hover" style="border: 1px solid">

                @csrf
                <tbody>
                    <tr>
                        <th>Name :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Postal Code :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Town :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Country :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Telephone No :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Email Address :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Mobile No :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Website :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Registration Date :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Address :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th> Physical Address :</th>
                        <td></td>
                    </tr>
                   
                   
                    


                </tbody>
            </table>
        </div>


    </form>






</div>
@endsection