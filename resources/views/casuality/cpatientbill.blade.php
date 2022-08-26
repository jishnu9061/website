{{-- @extends('layouts.hmsmain') --}}
{{-- @section('content')
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <div class="spacer" style="height:40px;margin-top: 30px;">
    
  </div> --}}
  <html>
<head>
    <style>
    body {
        font-family: sans-serif;
        font-size: 10pt;
    }

    p {
        margin: 0pt;
    }

    table.items {
        border: 0.1mm solid #e7e7e7;
    }

    td {
        vertical-align: top;
    }

    .items td {
        border-left: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    table thead td {
        text-align: center;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.blanktotal {
        background-color: #EEEEEE;
        border: 0.1mm solid #e7e7e7;
        background-color: #FFFFFF;
        border: 0mm none #e7e7e7;
        border-top: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    .items td.totals {
        text-align: right;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.cost {
        text-align: "."center;
    }
    .outre{
        padding: 0px;
        margin-left:40px;
        margin-right:40px;
        margin-top:10px;
    }
    
    
    </style>
</head>
<body>
    <div class="container outre">
        {{-- <div style="height:150px;"> --}}
    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        <tr>
            <td width="100%" style="padding: 0px; text-align: center;">
              {{-- <a href="#" target="_blank"><img src="https://shezannj.com/wp-content/uploads/2019/01/dummy-logo-png-7.png" width="264" height="110" alt="Logo" align="center" border="0"></a> --}}
              <h2 style="color:#c30147;">{{Auth::user()->Hospital}}</h2>
            </td>
        </tr>
        <tr>
            <td width="100%" style="text-align: center; font-size: 20px; font-weight: bold; padding: 0px;">
              INVOICE
            </td>
        </tr>
        <tr>
          <td height="10" style="font-size: 0px; line-height: 10px; height: 10px; padding: 0px;">&nbsp;</td>
        </tr>
    </table>
        {{-- </div> --}}
     <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        @foreach ($ctyp_bill as $bill)
        @endforeach
            <tr>
                <td>
                    <table width="40%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                        <tr>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Booking Reference</strong></td>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{ $bill->id }}</td>
                        </tr>
                        <tr>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Lead Passenger</strong></td>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">Pessenger Name</td>
                        </tr>
                        <tr>
                            <?php
                    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
                  ?>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Invoice Date</strong></td>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{ date(('d-M-Y H:i:s'))}}</td>
                        </tr>
                        <tr>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Balance Due Date</strong></td>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XX/XX/XXXX</td>
                        </tr>
                        <tr>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Departure Date</strong></td>
                            <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XX/XX/XXXX</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table> 
        
    
    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        {{-- @foreach ($ctyp_bill as $bill)
        @endforeach --}}
        <tr>
            <td width="50%" style="border: 0.1mm solid #eee;"><b>Patient Name:</b>&nbsp;{{  $bill->firstname }}<br><br><b>Patient Address:</b>&nbsp;{{  $bill->address }}<br><br><b>Age:</b>&nbsp;{{  $bill->age }}<br><br><b>Contact No:</b>&nbsp;{{  $bill->phoneno }}</td>
            {{-- <td width="20%">&nbsp;</td> --}}
            <td width="50%" style="border: 0.1mm solid #eee; text-align: right;"><strong>Company Name Ltd:<h4 style="color:#0f0f0f;">{{Auth::user()->Hospital}}</h4></strong><br>00-00 ABC Aare<br>Country Name<br>123 456<br><br><strong>Telephone:</strong> +00 000 000 0000<br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br></td>
        </tr> 
    </table>
    <br>
    {{-- <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <tr>
            <td>
                <table width="40%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Booking Reference</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{ $bill->id }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Lead Passenger</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">Pessenger Name</td>
                    </tr>
                    <tr>
                        <?php
                date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
              ?>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Invoice Date</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">{{ date(('d-M-Y H:i:s'))}}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Balance Due Date</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XX/XX/XXXX</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Departure Date</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XX/XX/XXXX</td>
                    </tr>
                </table>
                <table width="60%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td width="50%" style="border: 0.1mm solid #eee; text-align: right;"><strong>Company Name Ltd:<h4 style="color:#0f0f0f;">{{Auth::user()->Hospital}}</h4></strong><br>00-00 ABC Aare<br>Country Name<br>123 456<br><br><strong>Telephone:</strong> +00 000 000 0000<br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br></td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table> --}}
    {{-- <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        @foreach ($ctyp_bill as $bill)
        @endforeach
        <tr>
            <td width="49%" style="border: 0.1mm solid #eee;">Patient Name:{{  $bill->firstname }}<br>Patient Address:{{  $bill->address }}<br>Age:{{  $bill->age }}<br>Contact No:{{  $bill->phoneno }}</td>
            <td width="2%">&nbsp;</td>
            <td width="49%" style="border: 0.1mm solid #eee; text-align: right;"><strong>Company Name Ltd:<h4 style="color:#0f0f0f;">{{Auth::user()->Hospital}}</h4></strong><br>00-00 ABC Aare<br>Country Name<br>123 456<br><br><strong>Telephone:</strong> +00 000 000 0000<br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br></td>
        </tr>
    </table> --}}
    <br>
    <table class="items" width="100%" style="font-size: 14px; border-collapse: collapse;" cellpadding="8">
        <thead>
            <tr>
                <td width="15%" style="text-align: left;"><strong>PAX</strong></td>
                <td width="45%" style="text-align: left;"><strong>Description</strong></td>
                <td width="20%" style="text-align: left;"><strong>Amount</strong></td>
                <td width="20%" style="text-align: left;"><strong>Total Trip Cost</strong></td>
            </tr>
        </thead>
        <tbody>
            <!-- ITEMS HERE -->
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;"></td>
                <td style="padding: 0px 7px; line-height: 20px;">Split to Dubrovnik Luxury Cruise on Mama Marija</td>
                <td style="padding: 0px 7px; line-height: 20px;"></td>
                <td></td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">2</td>
                <td style="padding: 0px 7px; line-height: 20px;">VIP cabin with Private Balcony</td>
                <td style="padding: 0px 7px; line-height: 20px;">£1,295.00</td>
                <td style="padding: 0px 7px; line-height: 20px;">£2,590.00</td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">2</td>
                <td style="padding: 0px 7px; line-height: 20px;">Lower deck cabin</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">2</td>
                <td style="padding: 0px 7px; line-height: 20px;">EasyJet extra legroom seats</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <tr>
            <td>
                <table width="60%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">&nbsp;</td>
                    </tr>
                </table>
                <table width="40%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Total Amount</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">£000.00</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Deposit</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">£000.00</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Commission</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">£000.00</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Remaining Balance</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">Remaining Balance</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    {{-- <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <br>
        <tr>
            <td>
                <table width="25%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">
                            <img src="img/protected.png" alt="protected" style="display: block; margin: auto;">
                        </td>
                    </tr>
                </table>
                <table width="50%" align="left" style="font-family: sans-serif; font-size: 13px; text-align: center;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">
                            <strong>Company Name</strong>
                            <br>
                            ABC AREA
                            <br>
                            Tel: +00 000 000 0000 | Email: info@companyname.com
                            <br>
                            Company Registered in Country Name. Company Reg. 12121212.
                            <br>
                            VAT Registration No. 021021021 | ATOL No. 1234
                        </td>
                    </tr>
                </table>
                <table width="25%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">
                            <img src="img/abtot.png" alt="abtot" style="display: block; margin: auto;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <br>
    </table> --}}
    <div class="row">
        <div class="span8 well invoice-thank">
            <h3 style="text-align:center;">Thank You!</h3>
        </div>
    </div>
    <div style="float:right;"class="text-center">
        <p>Authorized person</p>
        <img data-savepage-src="../../../app-assets/images/pages/signature-scan.png" src="data:image/png;base64,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" alt="signature" class="height-100">
        <h6>Amanda Orton</h6>
        <p class="text-muted">Managing Director</p>
      </div>
</div>
</body>
</html>
  {{-- @endsection --}}