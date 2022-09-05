
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets\css\client_list.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <title>Client List</title>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-chevron-left arrow"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
    </svg>
    <h3 class="h">Client List</h3>
    <div class="active-cyan-4 mb-4 btn-lg float-right btn_btm">
        <form class="form-inline mr-auto search btn_btm">
            <input class="form-control mr-sm-2" type="text" id="ip_field"
                placeholder="Search By client No File No Or Filename" aria-label="Search">
            <button class=" btn-rounded btn-sm my-0 radius search" id="ip_field" type="submit">Search</button>
        </form>
    </div>
    <div class="padding_frm ">
        <form class="form-inline mr-auto search ">
            <div>
                <b>Registration Date(Form)</b><input class="form-control mr-sm-2" id="ip_field" type="text"
                    aria-label="Search">
            </div>
            <br><br>
            <div>
                <b>To </b><input class="form-control mr-sm-2 search_align" type="text" id="ip_field"
                    aria-label="Search">
            </div>
            <br><br>
            <div><span><button class=" btn-rounded btn-sm my-0" id="ip_field" type="submit">Search</button></span></div>
        </form>
    </div>
    <div class="btn_align">
        <button class=" btn-rounded btn-sm my-0 radius search" id="ip_field" type="submit">Add Client</button>
    </div>
    <div class="container_t container mt-3 padding_container">
        <div class="div_li">
            <h5>Total Count:3</h5>
            <div class="active-cyan-4 mb-4 btn-lg float-right">
                <form class="form-inline mr-auto search">
                    <input class="form-control mr-sm-2" type="text" id="ip_field" placeholder="Search"
                        aria-label="Search">
                    <button class=" btn-rounded btn-sm my-0 radius search" id="ip_field" type="submit">Search</button>
                </form>
            </div>
        </div>
        <table class="table container_t container">
            <thead class="thead">
                <tr>
                    <th>No</th>
                    <th>Client No</th>
                    <th>Client</th>
                    <th>Email Address</th>
                    <th>Status</th>
                    <th>Services Offered</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        </svg></th>

                </tr>
            </thead>
            <tbody class="tbody">
                <tr>
                    <td>1</td>
                    <td>37</td>
                    <td>ADEPT SYSTEMS<br>
                        P.O Box 6416-100,Nairobi,Kenya
                    </td>
                    <td>E:info@advantasms.com<br>
                        W:info@advantasms.com
                    </td>
                    <td>C/type:coporate files:7</td>
                    <td>Registration of Companies,partnership Comarical iligation</td>
                    <td>active</td>
                    <td>
                        <a class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="edit"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                    </td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        </svg></td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>46</td>
                    <td>AMAND MAX p.o Box 1656
                        100,Kampala,Kenya
                    </td>
                    <td>E:info@maxmandi.com<br>
                        W:N/A
                    </td>
                    <td>C/type:individual files:2</td>
                    <td>Trademarks&Patients</td>
                    <td>Deactive</td>
                    <td>
                        <a class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="edit"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                    </td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        </svg></td>

                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>