<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\client_list.css">
    
    <link rel="stylesheet" href="assets\css\clients.css">
    <title>Client List</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>$(document).ready(function () {
            $('#basic-data-table').DataTable({
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });</script>
</head>

<body>
    <div class="nav_container">
        <div class="pickup">
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
        </div>
        <div class="admin">
            <div class="image"><img src="download.png" alt="">
            <select name="" id=""></select></div>
        </div>
    </div>
    <div class="main_container">
        <div class="container_1">
            <div class="cli_pickup"><p>New Client Pickup</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="add_cli" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></div>
    
            <div class="search_box"><div class="ic_on"><svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi-search" viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg></div><input type="text" name="search" id="seach" placeholder=" search...."></div>
        </div>
    
        <div class="t_able">
            <table id="basic-data-table" class="table nowrap" style="width:100%">
                <div class="t_head">
                    <thead>
                        <tr>
                            <th>0</th>
                            <th>Date</th>
                            <th>client</th>
                            <th>File Ref</th>
                            <th>Visitor</th>
                            <th>Mobile</th>
                            <th>Time in</th>
                            <th>Time Picked</th>
                            <th>Time Taken</th>
                            <th>Person </br>Picking Client</th>
                            <th>Time Out</th>
                            <th>Person </br> Handling</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </div>
    
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr>
                    <var><tr>
                        <td>1</td>
                        <td>19-08-2022</td>
                        <td></td>
                        <td></td>
                        <td>Rachel</td>
                        <td></td>
                        <td>12.01</td>
                        <td>12.01</td>
                        <td>0</td>
                        <td>Sarah Gladys</td>
                        <td>12.25</td>
                        <td>Hillary</td>
                        <td></td>
                        
                        
                    </tr></var>
    
    
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>