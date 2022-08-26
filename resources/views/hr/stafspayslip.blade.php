<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/vendors/iconly/bold.css">
<link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/app.css">
<link rel="stylesheet" href="assets/css/customstyle.css">
<style>
    body{
        background-color:#f4f4f4;
    }
.main{
    margin:27px;
   padding:50px;
    background-color:#fff;
}
.grey{
   
    background-color:#fbfbfb;  
    padding:30px;
}
.cool
{
 padding:30px; 
}
.mainrow{
    padding:20px;
}
.border
{
  border:1px solid black;
  margin:20px;
}
.insideborder
{
  border-left:1px solid #e1e1e1;
  border-right:1px solid #e1e1e1;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5" id="hidethat"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
    <div class="main">
    <div class="row mainrow">
       <div class="col-md-6">
       <h3 style="">{{Auth::user()->Hospital}}</h3>
       </div>
       <div class="col-md-6">
<br>


       </div>
   </div>

   <div class="row grey" >
       <div class="col-md-3">
    <b>Employee Id:{{$stafidxx}}</b>
       </div>
       <div class="col-md-3">
      <b>Name:{{$stafnamexx}}</b>
       </div>
       <div class="col-md-3">
<b>Email:{{$stafemailxx}}</b>
       </div>
       <div class="col-md-3">
<b>Phone:</b>
       </div>
   </div>

   <div class="row border">
       <div class="col-md-4">
    
    <h6 class="p-3"> Salary</h6>
    <hr class="mb-2">
   <table class="table table-responsive">
 
    <tr>
      <td>Basic Pay:</td>
      <td>{{$staffsalary}}</td>
    </tr>
        <tr>
      <td>Gross Pay:</td>
      <td>{{$grosspay}}</td>
    </tr>
        <tr>
      <td>Net Pay:</td>
      <td>{{$atlast}}</td>
    </tr>

  </table>
     </div>
            <div class="col-md-4 insideborder" >


  <h6 class="p-3">Allowances</h6>
  <hr class="mb-2">
  <table class="table table-responsive">
   @foreach($staffallowance as $data)
       <tr>
      <td>{{$data->allowancename}}</td>
            @if(isset($data->price))
      <td>{{$data->price}}</td>
            @elseif(isset($data->percent))
            <?php
             $bb=$data->percent;
             $reduct=($bb/100)*$staffsalary;
            ?>
            <td>{{$reduct}}</td>

            @endif
    </tr>
    @endforeach
  </table>
     </div>
            <div class="col-md-4">

   <h6 class="p-3">Deductions</h6>
   <hr class="mb-2">
<table class="table table-responsive">
         @foreach($staffreduction as $data)
         <tr>
            <td>{{$data->allowancename}}</td>
            @if(isset($data->price))
            <td>{{$data->price}}</td>
            @elseif(isset($data->percent))
            <?php
             $bb=$data->percent;
             $reduct=($bb/100)*$staffsalary;
            ?>
            <td>{{$reduct}}</td>

            @endif
        </tr>
        @endforeach
        <tr>
          <td>
            Loans
          </td>
          <td>
            {{$loansum}}
          </td>
        </tr>
                <tr>
          <td>
            Leaves
          </td>
          <td>
            {{$final}}
          </td>
        </tr>
 </table>

     </div>


       

</div>
   <div class="row ">
       <div class="col-md-4">
        </div>
               <div class="col-md-4">
        </div>
               <div class="col-md-4">

        </div>
      </div>
   </div>
<!--          <div class="">
Allowances:<br>
Reduction:  <br>         
Salary:<br>

       </div>
       <div class="">
       {{$totalallowsum}}<br>
       {{$totalreductsum}}<br>
       {{$staffsalary}}<br> 
     </div> -->
    
</body>
</html>
