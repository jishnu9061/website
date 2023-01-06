@extends('layouts.hmsmain')
@section('content')

<style>
th{ 
    width:30%;
}
</style>

<div class="container">
    <h4 id="hdtpa"><b>Details</b></h4>
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
                        <th>GST Office :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>GST Number :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Social Security Number :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Customer Authority :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Phone :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>FAX :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Email :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Web :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Country :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>State :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>City :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Town :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Post Code :</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Address :</th>
                        <td></td>
                    </tr>
                    


                </tbody>
            </table>
        </div>


    </form>






</div>
@endsection