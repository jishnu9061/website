<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Currency converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/css/currency.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>

<body>

    <div class="nav_h_1">
        <div class="b_rad">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="arrow"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg>
        </div>
        <p style="margin-left: 10px; "> Currency</p>
    </div>


    <div class="container">
        <div class="container_1">
            <div class="left">
                <label for="sel_1" class="lab">Currency Name</label>
                <select name="currency_name" id="currency_name" class="currency_name">
                    <option value="USD">USD</option>
                    <option value="AED">AED</option>
                    <option value="ARS">ARS</option>
                    <option value="AUD">AUD</option>
                    <option value="BGN">BGN</option>
                    <option value="BRL">BRL</option>
                    <option value="BSD">BSD</option>
                    <option value="CAD">CAD</option>
                    <option value="CHF">CHF</option>
                    <option value="CLP">CLP</option>
                    <option value="CNY">CNY</option>
                    <option value="COP">COP</option>
                    <option value="CZK">CZK</option>
                    <option value="DKK">DKK</option>
                    <option value="DOP">DOP</option>
                    <option value="EGP">EGP</option>
                    <option value="EUR">EUR</option>
                    <option value="FJD">FJD</option>
                    <option value="GBP">GBP</option>
                    <option value="GTQ">GTQ</option>
                    <option value="HKD">HKD</option>
                    <option value="HRK">HRK</option>
                    <option value="HUF">HUF</option>
                    <option value="IDR">IDR</option>
                    <option value="ILS">ILS</option>
                    <option value="INR">INR</option>
                    <option value="ISK">ISK</option>
                    <option value="JPY">JPY</option>
                    <option value="KRW">KRW</option>
                    <option value="KZT">KZT</option>
                    <option value="MVR">MVR</option>
                    <option value="MXN">MXN</option>
                    <option value="MYR">MYR</option>
                    <option value="NOK">NOK</option>
                    <option value="NZD">NZD</option>
                    <option value="PAB">PAB</option>
                    <option value="PEN">PEN</option>
                    <option value="PHP">PHP</option>
                    <option value="PKR">PKR</option>
                    <option value="PLN">PLN</option>
                    <option value="PYG">PYG</option>
                    <option value="RON">RON</option>
                    <option value="RUB">RUB</option>
                    <option value="SAR">SAR</option>
                    <option value="SEK">SEK</option>
                    <option value="SGD">SGD</option>
                    <option value="THB">THB</option>
                    <option value="TRY">TRY</option>
                    <option value="TWD">TWD</option>
                    <option value="UAH">UAH</option>
                    <option value="UYU">UYU</option>
                    <option value="ZAR">ZAR</option>
                </select>

                <label for="sel_1" class="lab">Exchange Rate</label>
                <select name="currency_name" id="currency_name" class="currency_name">
                    <option value="volvo"></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>

            </div>
            <div class="right">
                <label for="symbol" class="lab">
                    Symbol
                </label>
                <input type="text" class="symbol" id="symbol" name="symbol">
                <label for="symbol" class="lab">
                    Default Account
                </label>
                <input type="text" class="symbol" id="default_account" name="default_account">
            </div>

        </div>
        <div class="btn">
            <button class="btn_1">Save</button>
            <button class="btn_2">Cancel</button>
        </div>
    </div>

    <div class="container_t">

        <div class="t_bor">
            <div class="t_heading">
                <li>
                    Currency Name</li>
                <li>Exchange Rate</li>

                <li>Symbol</li>
                <li>Default Account</li>

            </div>
        </div>

        <div class="d_bor">
            <div class="t_data">
                <li>
                    Dollar</li>
                <li>267</li>
                <li>$</li>
                <li id="s">Saving</li>


            </div>
        </div>

    </div>

    <div class="container_t">

        <div class="t_bor">
            <div class="t_heading">
                <li>
                    Currency Name</li>
                <li>Exchange Rate</li>

                <li>Symbol</li>
                <li>Default Account</li>

            </div>
        </div>

        <div class="d_bor">
            <div class="t_data">
                <li>Dollar</li>
                <li>267</li>
                <li>$</li>
                <li id="s">Saving</li>


            </div>
        </div>

    </div>
</body>

</html>