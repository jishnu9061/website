<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<form action="{{('view_request_details')}}">
<div class="page-content container">
    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="text-center text-150">
                            <!-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i> -->
                            <span class="text-default-d3">Request Item Details</span>
                        </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div class="my-2"><span class="text-600 text-90">Bill No:</span> #111-222</div>
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">From:</span>
                            <span class="text-600 text-110 text-blue align-middle">Pharmacy Department</span>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="my-2"><span class="text-600 text-90">Date:<?php echo date('d M Y') ?></span> </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <!-- <div class="row text-600 text-white bgc-default-tp1 py-25"> -->
                        <div>
                        <div class="table-responsive">

<table class="table">

  <thead>
    <tr>
      <th>Sl No</th>
      <th>Items</th>
      <th>Category</th>
      <th>Quantity</th>
	</tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td>Lisinopril (Prinivil, Zestril)</td>
       <td>Cardiovascular Drugs</td>
      <td>100</td>

    </tr>
    <tr>
      <td scope="row">2</td>
      <td>Metoprolol succinate (Toprol XL)</td>
      <td>Beta Blockers</td>
      <td>200</td>
	</tr>
  </tbody>
</table>
                    </div>
                    </div>
                </div>
                    <div class="row border-b-2 brc-default-l2"></div>
                    <!-- <div class="row mt-3">
                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Tot Amt Incl Tax
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">$2,475</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div> -->
                    <div class="row mt-3"></div>
                    <div>
                        <div style="float: right;">
                        <p>Authorized signatory</p>
                    </div>
                    <!-- <div>
                        <p style="text-align: left;"><p>Rupees In Words :<span contenteditable>Eleven Thousand five hundred Twenty two rupees Only</span></p></p>
                    </div>  -->
                    </div>

                    <hr />

                    <div>
                    <div>
                        <p style="text-align: center;">Thank You!! </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<style type="text/css">
body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>
