<style type="text/css">
    body{
     margin-top:30px;
     margin-left:30px;
     margin-right:30px;
     background:#eee;
 }
 th{
     padding: 4px 74px;
 }
 td{
    padding: 3px 72px;
 }

 .invoice {
     background: #fff;
     padding: 20px
 }

 .invoice-company {
     font-size: 20px
 }

 .invoice-header {
     margin: 0 -20px;
     background: #f0f3f4;
     padding: 20px
 }

 .invoice-date,
 .invoice-from,
 .invoice-to {
     display: table-cell;
     width: 1%
 }

 .invoice-from,
 .invoice-to {
     padding-right: 20px
 }

 .invoice-date .date,
 .invoice-from strong,
 .invoice-to strong {
     font-size: 16px;
     font-weight: 600
 }

 .invoice-date {
     text-align: right;
     padding-left: 20px
 }

 .invoice-price {
     background: #f0f3f4;
     display: table;
     width: 100%
 }

 .invoice-price .invoice-price-left,
 .invoice-price .invoice-price-right {
     display: table-cell;
     padding: 20px;
     font-size: 20px;
     font-weight: 600;
     width: 75%;
     position: relative;
     vertical-align: middle
 }

 .invoice-price .invoice-price-left .sub-price {
     display: table-cell;
     vertical-align: middle;
     padding: 0 20px
 }

 .invoice-price small {
     font-size: 12px;
     font-weight: 400;
     display: block
 }

 .invoice-price .invoice-price-row {
     display: table;
     float: left
 }

 .invoice-price .invoice-price-right {
     width: 25%;
     background: #2d353c;
     color: #fff;
     font-size: 28px;
     text-align: right;
     vertical-align: bottom;
     font-weight: 300
 }

 .invoice-price .invoice-price-right small {
     display: block;
     opacity: .6;
     position: absolute;
     top: 10px;
     left: 10px;
     font-size: 12px
 }

 .invoice-footer {
     border-top: 1px solid #ddd;
     padding-top: 10px;
     font-size: 10px
 }

 .invoice-note {
     color: #999;
     margin-top: 80px;
     font-size: 85%
 }

 .invoice>div:not(.invoice-footer) {
     margin-bottom: 20px
 }

 .btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
     color: #2d353c;
     background: #fff;
     border-color: #d9dfe3;
 }
 </style>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <div class="container">
    <div class="col-md-12">
       <div class="invoice">
          <!-- begin invoice-company -->
          <div class="invoice-company text-inverse f-w-600">
             <span class="pull-right hidden-print">

             <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5" id="hidethat"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
             </span>
          </div>
          <!-- end invoice-company -->
          <!-- begin invoice-header -->
          <div class="invoice-header">
             <div class="invoice-from">
                <small>From</small>
                <address class="m-t-5 m-b-5">
                   <h2 class="text-inverse">{{Auth::user()->Hospital}}<br>
                   {{$hospital_name}}</h2>
                   <h3>Store</h3>

                </address>
             </div>
             <div class="invoice-to">
                <small>To</small>
                <address class="m-t-5 m-b-5">
                     {{-- @php
                           echo "<pre>";
                            print_r($purchase_order);
                       @endphp --}}
                    @if ($purchase_order[0]->supplier_name)
                    <strong class="text-inverse">Name  :{{$purchase_order[0]->supplier_name}}</strong><br>
                    Email :{{$purchase_order[0]->supplier_email}}<br>

                    Address: {{$purchase_order[0]->supplier_address}}<br>

                    State: {{$purchase_order[0]->supplier_state}}<br>

                    Phone No: {{$purchase_order[0]->supplier_mobile}}<br>

                    @else
                    <strong class="text-inverse">Name  :{{$purchase_order[0]->manufactuers_name}}</strong><br>
                    Email :{{$purchase_order[0]->email}}<br>

                    Address: {{$purchase_order[0]->address}}<br>

                    State: {{$purchase_order[0]->state}}<br>

                    Phone No: {{$purchase_order[0]->mobile}}<br>

                    @endif


                </address>
             </div>
             <div class="invoice-date">
                <small>Purchase Order</small>
                 <div class="text-inverse">{{date('D d m Y H:i:s A',strtotime($purchase_order[0]->purchase_date))}}<br></div>
                <div class="invoice-detail">
                    <strong class="text-inverse"> #{{$purchase_order[0]->purchase_orderno}}</strong><br>

                </div>
             </div>
          </div>
          <!-- end invoice-header -->
          <!-- begin invoice-content -->
          <div class="invoice-content">
             <!-- begin table-responsive -->
             <div class="table-responsive">
                <table class="table table-striped">
                   <thead>
                       {{-- @php
                           echo "<pre>";
                            print_r($purchase_order);
                       @endphp --}}
                      <tr>
                         <th>Purchase Item</th>
                         <th>Batch Number</th>
                         <th>Quantity</th>
                         <th>Price</th>
                         <th>Total</th>
                      </tr>
                   </thead>
                   <tbody>
                       @php
                           $grand_total=0;
                       @endphp
                     @foreach($purchase_order as $row)
                      <tr>
                          <td>
                              {{$row->Item_name}}
                            </td>

                         <td>
                             {{$row->batch_no}}
                            </td>
                         <td>{{$row->quantity}}</td>
                         <td>{{$row->price}}</td>
                         <td>
                            @php
                                $grand_total += $row->total;
                            @endphp
                            {{ $row->total}}</td>
                      </tr>
                     @endforeach

                   </tbody>
                </table>
             </div>
          </div>
             <!-- end table-responsive -->
             <!-- begin invoice-price -->
           <div class="invoice-price">
                <div class="invoice-price-left">
                   <div class="invoice-price-row">
                      <div class="sub-price">
                         <small>SUBTOTAL</small>
                         <span class="text-inverse">{{$grand_total}}</span>
                      </div>
                      <div class="sub-price">
                         <small>Payment Type</small>
                         <span class="text-inverse">{{$purchase_order[0]->payment_name}}</span>
                      </div>
                   </div>
                </div>
                <div class="invoice-price-right">
                   <small>TOTAL</small> <span class="f-w-600">{{$grand_total}}</span>
                </div>
             </div>
             <!-- end invoice-price -->
          </div>
          <!-- end invoice-content -->
          <!-- begin invoice-note -->
          <div class="invoice-note">
             * Make all cheques payable to [Your Company Name]<br>
             * Payment is due within 30 days<br>
             * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
          </div>
          <!-- end invoice-note -->
          <!-- begin invoice-footer -->
          <div class="invoice-footer">
             <p class="text-center m-b-5 f-w-600">
                THANK YOU FOR YOUR BUSINESS
             </p>
             <p class="text-center">
                <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> matiasgallipoli.com</span>
                <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
                <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> rtiemps@gmail.com</span>
             </p>
          </div>
          <!-- end invoice-footer -->
       </div>
    </div>
 </div>
 <script src="cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
 <script type="text/javascript">

 </script>
