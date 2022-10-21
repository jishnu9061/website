@extends('layouts.hmsmain')
@section('content')



<div>
            <button class="btn btn-primary"
                style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px"><b><u>Company Details</u></b></span></button><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
     </div>
            <br>
      
 
  <a href="{{('add_company_details')}}"><button class="btn btn-primary add-btn" style="width:20%;">Add Company Details</button></a><br><br>
  <h1 style="color:rgb(13, 1, 56);font-size:large;font-weight:bold;text-align:center;"><b>Company</b></h1>

<table class="table table-bordered" id="new-item">
  <thead>
  <tr>
    <th>Sl No</th>
    <th>Company Name</th>
    <th>Company Address</th>
    <th>Town/City</th>
    <th>Logo</th>
    <th>Action</th>
  
  </tr>
  </thead>
        <tbody>
        @foreach($company_details as $company)

  <tr>
    <td>{{$company->id}}</td>
    <td>{{$company->company_name}}</td>
    <td>{{$company->address}}</td>
    <td>{{$company->town/city}}</td>
    {{-- <td>{{$company->Add_Logo}}</td> --}}
    <!-- <td>{{$company->id}}</td> -->
    <!-- <td></td>
    <td>
    </td>
    <td></td>
    <td></td> -->


    <!-- <td  scope="row"class="text-center"><a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i>
                           <input type="hidden" value="" id="medicine_id_hidden" class="applicate" name="supplier_id_hidden">
                          <a  onClick="return myFunction();" href="" style="  color:rgb(13, 1, 56);"><i class="fas fa-trash-alt"></i></a></td> -->
                          <!--<a href="{{url('view_company_details')}}"><i  style=" color:rgb(13, 1, 56);" class="fa fa-eye" aria-hidden="true"></i> -->
<td  scope="row"class="text-center"><a href="{{url('edit_company_details',$company->id)}}">
<i  style="  color:rgb(13, 1, 56);" class="fa fa-edit" aria-hidden="true"></i></td>
<!-- <td> <a href="{{url('edit_company_details',$company->id)}}"><button class="btn btn-primary " style="width:100%;">Edit</button></a><br><br></td> -->
@endforeach
</tr>
        </tbody>
</table>
<br><br>
</div>
 
</body>
</html>

@endsection