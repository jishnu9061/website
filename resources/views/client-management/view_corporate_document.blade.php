

<style>
.btn-width {
    width: 10%;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div>


</div>
<br>
<div class="container">
    <!-- <h3 style="text-align:center">View Pickup Reception</h3><br><br> -->
    <div>
        <div>
            <!-- style="width:100%;background-color:#d6ba8a;color:#1D1D50;border:1px solid gold;font-size:25px;"><b><u>View
                    Pickup Reception</u></b></div><br><br>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
            {{-- heading --}}
 
    <br><br>
    </div>
    <div class="invoice-company text-inverse f-w-600">
                <span class="pull-right hidden-print">

                    <button><a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"
                        id="hidethat"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a></button>
                </span>
            </div>
    <div class="table-responsive">
        <table class="table table-hover" style="border: 1px solid">

         
            <tbody>
             
                <tr>
                
                    <img src="{{asset('/images/file/'.$view_document->file)}}" width="100%" height="100%"
                            alt="image">
                </tr>
               
            </tbody>
        </table>
    </div>
</div>



