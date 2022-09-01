@extends('layouts.cra_main')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\add_New.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <title>Add New Client</title>
</head>

<body>
    
    <div class="nav_head">
        <div class="nav_h_1">
            <div class="b_rad">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="arrow"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </div>
            <p style="margin-left: 10px; "> <b>Add New Client</b> </p>
        </div>
    </div>

    <div class="container-1">
        <div class="form">

            <div class="form_1">
                <label for="client_number">Client Number :</label>
                <input type="text" class="client_number" id="client_number"></br></br>

                <label for="client_type">Client Type :</label>
                <Select class="client_type" id="client_type">
                    <option>Corporate</option>                    
                </seLect></br></br>

                <label for="citizen_status">Citizen Status :</label>
                <Select class="citizen_status" id="citizen_status">
                    <option>Resident</option>   
                </seLect></br></br>

                <label for="b_nbr">Cert of Incorporation/Business Number :</label>
                <input type="text" class="b_nbr" id="b_nbr"></br></br>

                <label for="country">Country :</label>
                <Select class="country" id="country">
                </seLect></br></br>

                <label for="ph_nbr">Telephone No :</label>
                <input type="number" class="ph_nbr" id="ph_nbr"></br></br>

                <label for="fax_nbr">Fax No :</label>
                <input type="number" class="fax_nbr" id="fax_nbr"></br></br>


                <label for="email">Email Address :</label>
                <input type="email" class="email" id="email"></br></br>


                <label for="website">Website :</label>
                <input type="text" class="website" id="website"></br></br>


                <label for="bought">Bought In By :</label>
                <Select class="bought" id="bought">
                    <option>----select----</option>   
                </seLect></br></br>

                <label for="reporting">Status Reporting Day :</label>
                <Select class="reporting" id="reporting">
                    <option>None</option>
                </seLect></br></br>

                <label for="client_source">Client Source :</label>
                <Select class="client_source">
                    <option>None</option>   
                </seLect></br></br>

                <label for="source_narration">Client Source Narration :</label>
                <input type="text" class="source_narration" id="source_narration"></br></br>

            </div>
            <div class="form_2">

                <label for="cli_nam">Client Name :</label>
                <input type="text" class="cli_nam" id="cli_nam"></br></br>

                <label for="cli_industry">Client Industry :</label>
                <Select class="cli_industry" id="cli_industry">
                    <option>----select----</option>   
                </seLect></br></br>

                <label for="pin_no">PIN No :</label>
                <input type="text" class="pin_no" id="pin_no"></br></br>

                <label for="po_addres">Postal Address :</label>
                <input type="text" class="po_addres" id="po_addres" placeholder="P.O.box"></br></br>

                <label for="po_code">Postal Code :</label>
                <input type="text" class="po_code" id="po_code"></br></br>

                <label for="town">Town :</label>
                <input type="text" class="town" id="town"></br></br>

                <label for="phy_address">Physical Address :</label>
                <input type="text" class="phy_address" id="phy_address"></br></br>

                <label for="notes">Notes :</label>
                <input type="text" class="notes" id="notes"></br></br>
            </div>



        </div>

        <div class="contact">
            <div class="c_persons">
                <p>  Contact Person(s) :</p>
            </div>
            <div class="p_list">
                <li>Names :</li>
                <li>Destingnation :</li>
                <li>Mobile No :</li>
                <li>Email :</li>
            </div>
            
        </div>

        <div class="p_list_2">
            <li class="li_b"></li>
            <li class="li_b"></li>
            <li class="li_b"></li>
            <li class="li_b"></li>
        </div>
        <button class="ad_btn">Add Contact</button>
    </div>
</body>

</html>
