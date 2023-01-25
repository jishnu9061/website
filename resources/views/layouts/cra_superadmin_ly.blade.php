<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRA Super Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="{{asset('/') }}assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/app.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/customstyle.css">
    <link rel="shortcut icon" href="{{asset('/') }}assets/images/favicon.html" type="image/x-icon">
    <link rel="stylesheet"href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    {{-- vipin --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Be Vietnam Pro' rel='stylesheet'>
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/sub.css">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/sub1.scss">
    <link rel="stylesheet" href="{{asset('/') }}assets/css/c.css">
    <link href='https://fonts.googleapis.com/css?family=Alexandria' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Atkinson Hyperlegible' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="table.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(function() { $('[data-toggle="tooltip"]').tooltip()})
    </script>
    <!-- b -->
    {{-- vipin --}}

    <style>
        #icon:hover {
            color: #e5e5ee
        }
        #subm {
            color: #070344;
        }
        body {
            mix-blend-mode: multiply;
            background-color: #ffffff;
        /* font-size: 22px; */
        }
        html {
            scroll_behavior: smooth;
        }
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination {
            margin: 0;
        }
        .pagination li:hover {
            cursor: pointer;
        }
        .header_wrap {
            padding: 30px 0;
        }
        .num_rows {
            width: 20%;
            float: left;
        }
        .tb_search {
            width: 20%;
            float: right;
        }
        .pagination-container {
            width: 70%;
            float: left;
        }
        .rows_count {
            width: 20%;
            float: right;
            text-align: right;
            color: #999;
        }
        /* time */
        #stopwatch-container {
            border: 5px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin: 0px auto 0;
            width: fit-content;
            padding: 7px 10px;
            border-radius: 5px;
            border: 1px solid #b9b9b9;
        }
        #stopwatch {
            margin: 0 auto;
            text-align: center;
            font-size: 20px;
        }
        #buttons-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        #buttons-container button {
            outline: none;
            cursor: pointer;
            color: #fff;
            background-color: #a4a4a4;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            margin: 0 10px;
            padding: 3px 8px;
        }
        #buttons-container button:active {
            opacity: 0.7;
        }
        .progress {
            background: rgb(252, 245, 184);
            display: block;
            height: 5px;
            text-align: center;
            transition: width .3s;
            width: 0;
        }
        .progress.hide {
            opacity: 0;
            transition: opacity 1.3s;
        }
        .sidebar-menu{
            animation: fadeInAnimation ease 1s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }    
        .bodya{
            font-family: 'Be Vietnam Pro';
        }
        .bodyb{
        font-family: 'Carter One'; 
        }
        #range{
            display: none;
        }
        #ssdf{
            display: none;
        }
        #hgh{
            display: none;
        }
        .fa-low-vision:hover{
            color: #07463b;
        }
        #ni{
            display: none;
        }
    </style>

</head>
<body>
    <div class="progress"></div>
    <script>
        var data = [];
        for (var i = 0; i < 100000; i++) {
            var tmp = [];
            for (var i = 0; i < 100000; i++) {
                tmp[i] = 'hue';
            }
            data[i] = tmp;
        };
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        console.log(percentComplete);
                        $('.progress').css({
                            width: percentComplete * 100 + '%'
                        });
                        if (percentComplete === 1) {
                            $('.progress').addClass('hide');
                        }
                    }
                }, false);
                xhr.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        console.log(percentComplete);
                        $('.progress').css({
                            width: percentComplete * 100 + '%'
                        });
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: "/echo/html",
            data: data,
            success: function(data) {}
        });
    </script>
    <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo"class="logo" style="background-color:#dfc79d; border-radius:100% 100% 100% 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height:125px;width:125px; margin-left:25px; background:  #d0d3cd50 -webkit-linear-gradient(left,  #ffffff15, rgb(255, 255, 255)) repeat 0 0 / 200px;
                            animation: sweep 5.5s ease-in-out infinite;animation-direction:reverse;">
                                <a href="{{url('superadminhome')}}">
                                <img id="cr_logo" src="{{asset('/') }}assets//images/Logo cra.png" alt="CRA" style="margin-top:16px;">
                            </a>
                            </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                    </div>
                
                <div id="demo" class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title" style="color: #1D1D50; text-align:center; font-size:16px; ">DASHBOARD<br><span style="font-size:14px;">Super Admin </span>
                        </li>
                            @if(Auth::user()->role == '1')
                            {{-- Management company start --}}
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i id="icon" class="fa-regular fa-user"  style="font-weight: 300;"></i>
                                        <span>Management company</span>
                                </a>
                                @php
                                    $admin = array("company_list", "Add_company",);
                                @endphp
                                @if (in_array(request()->path(), $admin))
                                    <ul class="submenu" style="display: block;">
                                    @else
                                        <ul class="submenu" style="display: none;">
                                @endif
                                    <li class="submenu-item ">
                                        <a href="{{url('company_list')}}" class='sidebar-link'>
                                            <span>Company List</span>
                                        </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="{{url('Add_company')}}" class='sidebar-link'>
                                            <span>Add Company</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Management company end --}}
                            {{-- super admin setup start --}}
                            <li class="sidebar-item  ">
                                <a href="{{url('superadminhome')}}" class='sidebar-link'>
                                    <i id="icon" class="fa-regular fa-user"  style="font-weight: 300;"></i>
                                        <span>SuperAdmin setup</span>
                                </a>
                                @php
                                    $admin = array("usermanagement", "adddepartments","add_labdept","add_surgery_types","adddepartmentadmin","addroomstypes","addroomtypes","beds","Add_Ambulance_details");
                                @endphp
                                @if (in_array(request()->path(), $admin))
                                    <ul class="submenu" style="display: block;">
                                    @else
                                        <ul class="submenu" style="display: none;">
                                @endif
                                </ul>
                            </li>
                            {{-- super admin setup end --}}
                            @endif

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    <div id="main">
     {{-- mian start --}}  
        <style>
            .display-date {
                text-align: center;
                margin-bottom: 10px;
                font-size: .6rem;
                font-weight: 600;
            }
            .display-time {
                text-align: center;
                display: flex;
                font-size: 1rem;
                font-weight: bold;
                border: 1px solid #1b1b1a;
                padding: 1px 2px;
                border-radius: 5px;
                transition: ease-in-out 0.1s;
                transition-property:  box-shadow, color;
                -webkit-box-reflect: below 2px
                linear-gradient(transparent, rgba(255, 255, 255, 0.05));
            }
            .display-time:hover {
                background: #ffffff;
                color: #272727;
                cursor: pointer;
            }
            #list{
                font-size: 1.5em;
                margin-left: 90px;
            }
            .animals{
                display: list-item;	
            }
        </style>  
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white" > --}}
             {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                <script>
                    function myss() {
                    var x = document.getElementById("range");
                    var t = document.getElementById("t");
                    var adv = document.getElementById("ssdf");
                    var dvv = document.getElementById("hgh");
                    if (x.style.display === "block") {
                        x.style.display = "none";
                        ad.style.display = "none";
                        dvv.style.display = "none";
                    } else {
                        x.style.display = "block";
                        ad.style.display = "block";
                        dvv.style.display = "block";
                    }}
                </script>

                <script>
                    function hide() {
                        var element = document.getElementById("sidebar-active");
                        var rtyu = document.getElementById("mi");
                        var rtyupio = document.getElementById("ni");
                        if (element.classList.contains("active")) {
                            element.classList.remove("active");
                            rtyu.style.display = "none";
                            rtyupio.style.display = "block";
                        } else {
                            element.classList.add("active");
                        }
                    }
                    function hidea() {
                        var element = document.getElementById("sidebar");
                        var rtyu = document.getElementById("mi");
                        var rtyupio = document.getElementById("ni");
                        if (element.classList.contains("active")) {
                            element.classList.remove("active");
                        } else {
                            element.classList.add("active");
                            rtyupio.style.display = "none";
                            rtyu.style.display = "block";
                        }
                    }
                </script>
                {{-- <a id="ni" type="button" onclick="hidea()" class="nav-link" ><i class="fa fa-eye"></i></a> --}}
                {{-- <a id="mi" type="button" onclick="hide()" class="nav-link" ><i class="fa fa-eye-slash"></i></a> --}}
                
                {{-- <div class="nav-item">
                    <a id="t" type="button" onclick="myss()" class="nav-link"> <i class="fa fa-text-width"></i></a>
                </div>
                <div class="p-1" id="hgh" style="border: solid #a38931 1px; border-radius:5px; background-color:rgb(243, 238, 226); ">
                    <input  type="range" id="range" min="1.0" max="3.0" step="0.1" value="2.0" style="color: #070344"/> 
                    <a > <i id="ssdf" type="button" class="fa fa-font"></i> </a>
                    <a > <i id="ssdd" type="button" class="fa fa-font"></i> </a>
                </div>          --}}
                <script>
                    const btn = document.getElementById("ssdf");
                    const para = document.querySelector("body");
                    btn.addEventListener("click", function () {
                        para.className = "bodya";
                        });
                </script>
                <script>
                    const btne = document.getElementById("ssdd");
                    const parae = document.querySelector("body");
                    btne.addEventListener("click", function () {
                        parae.className = "bodyb";
                        });
                </script>
                {{-- <div style="text-align: center;padding-right:0.5rem; ">
                    <div class="display-date" style="margin-bottom: 5px;">
                        <span id="day">day</span>,
                        <span id="daynum">00</span>
                        <span id="month">month</span>
                        <span id="year">0000</span>
                    </div>
                <div class="display-time" style="height: 24.481482px;width:70.481482px;margin: auto;">
                </div>
                </div> --}}
                <script>
                    const displayTime = document.querySelector(".display-time");
                    // Time
                    function showTime() {
                        let time = new Date();
                        displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
                        setTimeout(showTime, 1000);
                    }
                    showTime();
                    // Date
                    function updateDate() {
                    let today = new Date();

                    // return number
                    let dayName = today.getDay(),
                        dayNum = today.getDate(),
                        month = today.getMonth(),
                        year = today.getFullYear();

                    const months = [
                        "January",
                        "February",
                        "March",
                        "April",
                        "May",
                        "June",
                        "July",
                        "August",
                        "September",
                        "October",
                        "November",
                        "December",
                    ];
                    const dayWeek = [
                        "Sunday",
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday",
                    ];
                    // value -> ID of the html element
                    const IDCollection = ["day", "daynum", "month", "year"];
                    // return value array with number as a index
                    const val = [dayWeek[dayName], dayNum, months[month], year];
                    for (let i = 0; i < IDCollection.length; i++) {
                        document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
                    }
                    }

                    updateDate();
                </script>
                <script language=“javascript”>
                    function toggle() {
                        var ele = document.getElementById(“”);
                        if(ele.style.display == “block”) {
                            ele.style.display = “none”;
                        }
                        else {
                            ele.style.display = “block”;
                            window.scrollTo(100,300)
                        }
                    }
                </script>
                {{-- <form class="form-inline my-2 my-lg-0">
                    <input onkeydown="myFunction(event)" name="search" class="form-control mr-sm-2" id="searchbar" onkeyup="search_animal()" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"> </i> </button>
                </form><!-- show keys --> --}}
                <script>
                    function myFunction(event) {
                        var x = event.key;
                        document.getElementById("demob").innerHTML = " " + x;
                    }
                </script>
                <style>
                    window.addEventListener('keydown', function(e)
                    {
                        if( e.keyCode == '8' )
                        {
                            e.preventDefault();  // prevent backspace from going to browser
                                            // history
                            // add reload code
                            location.reload();
                        }
                    }, false);
                </style> 
                <script>
                    // search
                    function search_animal() {
                        let input = document.getElementById('searchbar').value
                        input=input.toLowerCase();
                        let btn = document.getElementsByClassName('btn btn-primary');
                        let logo = document.getElementsByClassName('logo_size');
                        let col = document.getElementsByClassName('col-sm-4');
                        let row = document.getElementsByClassName('row sm');
                        // let bbd = document.getElementsByTagName('div');
                        const mydivs = document.querySelectorAll("#hdtpa, #hdbtb");
                        for (i = 0; i < x.length; i++) {
                            if (!x[i].innerHTML.toLowerCase().includes(input)) {  
                                x[i].style.display="none";
                                x[i].style.padding = "100px 110px 110px 110px";
                                y[i].style.width="20px";
                                col[i].style.display="none";
                                // bbd[i].style.display="none";
                                mydivs.forEach((element) => {
                                element.style.display="none";
                            });
                            }else {
                                x[i].style.display="list-item";	
                                x[i].style.padding = "0px 0px 0px 0px";
                                y[i].style.width="20px";
                                mydivs.forEach((element) => {
                                element.style.display="none";
                            });		
                            }
                        }
                    }
                </script>
            {{-- </div>
        </nav> --}}
        {{-- nav 2 --}}
        <nav class=" newstyle1 navbar navbar-expand-lg  sticky-top navbar-light bg-white">
            <!-- Nav Back Button -->
            <a id="backbtn" href="javascript:history.back()" style=" color: #15144d;font-size: 35px;">
                <i id="bkbtnicon" class="far fa-arrow-alt-circle-left p-1"></i>
            </a>
            <div style="text-align: center;padding-right:0.5rem; ">
                <div class="display-date" style="margin-bottom: 5px;">
                    <span id="day">day</span>,
                    <span id="daynum">00</span>
                    <span id="month">month</span>
                    <span id="year">0000</span>
                </div>
            <div class="display-time" style="height: 24.481482px;width:70.481482px;margin: auto;">
            </div>
            </div>
            <a id="ni" type="button" onclick="hidea()" class="nav-link" ><i class="fa fa-eye" style=" color: #15144d;font-size: 30px;"></i></a>
            <a id="mi" type="button" onclick="hide()" class="nav-link" ><i class="fa fa-eye-slash" style=" color: #15144d;font-size: 30px;"></i></a>
            <div class="nav-item">
                <a id="t" type="button" onclick="myss()" class="nav-link"> <i class="fa fa-text-width" style=" color: #15144d;font-size: 20px;"></i></a>
            </div>
            <div class="p-1" id="hgh" style="border: solid #a38931 1px; border-radius:5px; background-color:rgb(243, 238, 226);display:none;">
                <input  type="range" id="range" min="1.0" max="3.0" step="0.1" value="2.0" style="color: #15144d"/> 
                <a > <i id="ssdf" type="button" class="fa fa-font"></i> </a>
                <a > <i id="ssdd" type="button" class="fa fa-font"></i> </a>
            </div>   
                <!-- Nav ToolTip -->
                    <div class="nav-item dropdown" style="position: relative;">
                        <button class=" dropdown-toggle-x btn  px-2 py-1 m-1" href="#" id="navbarDropdown"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('#')}}">Management company</a>
                            <a class="dropdown-item" href="{{url('#')}}">System Setup</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown m-1" style="position: relative; " >
                        <button class=" dropdown-toggle-x btn p-1" style="font-size:12px;" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                            <b>Create New</b>
                            <i class="fa fa-plus-square"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('user_management')}}">Add company</a>

                        </div>
                    </div>
                    <!--Nav Hamburger -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        style="position: relative; margin-left:6px; " data-target="#navbarTogglerDemo01"
                        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""><i class="fa fa-ellipsis-v"></i></span>
                    </button>
                    <div class="collapse navbar-collapse ml-2" id="navbarTogglerDemo01">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <div style=" width: 350px">
                        <li class="nav-item p-1 "  style=" text-decoration: none; list-style:none;" >
                            <form class="form-inline my-2 my-lg-0"style="" >
                                <input onkeydown="myFunction(event)" name="search" class="form-control mr-sm-2" id="searchbar" onkeyup="search_animal()" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"> </i> </button>
                            </form>
                        </li>
                        </div>
                        <li class="nav-item p-1 "  style=" text-decoration: none; list-style:none;">
                            <img src="{{asset('/') }}assets//images/faces/lawemb.png" height="30px"
                                class="d-inline-block " alt="">
                        </li>
                        <li class="nav-item" style=" text-decoration: none; list-style:none;">
                            <a class="font-bold text-uppercase nav-link" href="#" style=" padding: 0.1rem .1rem;color:#15144d;">{{ Auth::user()->username }}<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <!-- LogOut Button  -->
                        <div id="navr" class="m-1">
                            <div class="" style=" text-decoration: none; list-style:none;">
                                <a type="button" class="btn btn-outline-primary" style="text-align: center; font-size:13px; padding: 0.2rem 0.2rem; "
                                    class="text-muted  " href="{{url('logt')}}">
                                    <i class="fas fa-sign-out-alt"></i>LogOut
                                </a>
                            </div>
                        </div>
                    </div>
        </nav>
        <br>
        <section class="newstyle container-fluid bg-white p-4 mt-2">
            <section class="row">
                <div class="col-12 col-lg-12" style="min-height: 50vh" id="fontscl">
                    @yield('content')
                    <script>
                        var range = document.querySelector("#range");
                        var form = document.querySelector("#fontscl");
                        range.addEventListener("input", function() {
                            form.style["font-size"] = this.value + "em";
                        });
                    </script>
                </div>  
            </section>
        </section>
        <!-- footer start -->
        <footer id="ftr" class="newstyle2 container-fluid bg-white p-4 mt-2 border-top">
            <div class="footer clearfix  text-muted ">
                <div class="container text-center">
                    <p class="" style="margin-bottom: 0rem;">2023 &copy; Globaleyet</p>
                </div>
            </div>
        </footer>
        <!-- footer end         -->
    </div>
</div>

        <!-- time -->
        <script>
        //globle variables
        var stopwatch = document.getElementById('stopwatch');
        var mainButton = document.getElementById('main-btn');
        var startTime = 0;
        var elapsedTime = 0;
        var timeoutId = null;

        //method to operate start and stop function
        function main() {
            if (mainButton.innerHTML === 'Start') {
                startTime = Date.now();
                startStopwatch();
                mainButton.innerHTML = 'Stop';
            } else {
                elapsedTime += Date.now() - startTime;
                clearTimeout(timeoutId);
                mainButton.innerHTML = 'Start';
            }
        }

        //method to reset the stopwatch
        function reset() {
            elapsedTime = 0;
            startTime = Date.now();
            clearTimeout(timeoutId);
            mainButton.innerHTML = 'Start';
            displayTime(0, 0, 0, 0);
        }

        //method to start the stopwatch
        function startStopwatch() {

            //run setTimeout() and save id
            timeoutId = setTimeout(function() {
                //calculate elapsed time
                const time = Date.now() - startTime + elapsedTime;

                //calculate different time measurements based on elapsed time
                const milliseconds = parseInt((time % 1000) / 10)
                const seconds = parseInt((time / 1000) % 60)
                const minutes = parseInt((time / (1000 * 60)) % 60)
                const hour = parseInt((time / (1000 * 60 * 60)) % 24);

                //display time
                displayTime(hour, minutes, seconds, milliseconds);

                //calling same method again recursively 
                startStopwatch();
            }, 100);
        }

        //method to display time in '00:00:00:00' format
        function displayTime(hour, minutes, seconds, milliseconds) {
            hour = hour < 10 ? '0' + hour : hour;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            milliseconds = milliseconds < 10 ? '0' + milliseconds : milliseconds;
            stopwatch.innerHTML = hour + ':' + minutes + ':' + seconds + ':' + milliseconds;
        }
        </script>
        <!-- time -->
       
       
       <script>
        getPagination('#table-id');
        $('#maxRows').trigger('change');

        function getPagination(table) {
            var lastPage = 1;

        $('#maxRows')
            .on('change', function(evt) {
            //$('.paginationprev').html('');						// reset pagination

            lastPage = 1;
            $('.pagination')
                .find('li')
                .slice(1, -1)
                .remove();
            var trnum = 0; // reset tr counter
            var maxRows = parseInt($(this).val()); // get Max Rows from select option

            if (maxRows == 5000) {
                $('.pagination').hide();
            } else {
                $('.pagination').show();
            }

            var totalRows = $(table + ' tbody tr').length; // numbers of rows
            $(table + ' tr:gt(0)').each(function() {
                // each TR in  table and not the header
                trnum++; // Start Counter
                if (trnum > maxRows) {
                // if tr number gt maxRows

                $(this).hide(); // fade it out
                }
                if (trnum <= maxRows) {
                $(this).show();
                } // else fade in Important in case if it ..
            }); //  was fade out to fade it in
            if (totalRows > maxRows) {
                // if tr total rows gt max rows option
                var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                //	numbers of pages
                for (var i = 1; i <= pagenum; ) {
                // for each page append pagination li
                $('.pagination #prev')
                    .before(
                    '<li data-page="' +
                        i +
                        '">\
                                        <span>' +
                        i++ +
                        '<span class="sr-only">(current)</span></span>\
                                        </li>'
                    )
                    .show();
                } // end for i
            } // end if row count > max rows
            $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
            $('.pagination li').on('click', function(evt) {
                // on click each page
                evt.stopImmediatePropagation();
                evt.preventDefault();
                var pageNum = $(this).attr('data-page'); // get it's number

                var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                if (pageNum == 'prev') {
                if (lastPage == 1) {
                    return;
                }
                pageNum = --lastPage;
                }
                if (pageNum == 'next') {
                if (lastPage == $('.pagination li').length - 2) {
                    return;
                }
                pageNum = ++lastPage;g
                }

                lastPage = pageNum;
                var trIndex = 0; // reset tr counter
                $('.pagination li').removeClass('active'); // remove active class from all li
                $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                // $(this).addClass('active');					// add active class to the clicked
                limitPagging();
                //SHOWING ROWS NUMBER OUT OF TOTAL
                showig_rows_count(maxRows, pageNum, totalRows);
                //SHOWING ROWS NUMBER OUT OF TOTAL
                $(table + ' tr:gt(0)').each(function() {
                // each tr in table not the header
                trIndex++; // tr index counter
                // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                if (
                    trIndex > maxRows * pageNum ||
                    trIndex <= maxRows * pageNum - maxRows
                ) {
                    $(this).hide();
                } else {
                    $(this).show();
                } //else fade in
                }); // end of for each tr in table
            }); // end of on click pagination list
            limitPagging();
            
            })
            .val(5)
            .change();

        // end of on select change

        // END OF PAGINATION
        }

        function limitPagging() {
        // alert($('.pagination li').length)

        if ($('.pagination li').length > 10) {
            if ($('.pagination li.active').attr('data-page') <= 9) {
            $('.pagination li:gt(9)').hide();
            $('.pagination li:lt(9)').show();
            $('.pagination [data-page="next"]').show();
            }
            if ($('.pagination li.active').attr('data-page') > 9) {
            $('.pagination li:gt(0)').hide();
            $('.pagination li:lt(0)').show();
            $('.pagination [data-page="next"]').show();
            for (
                let i = parseInt($('.pagination li.active').attr('data-page')) - 4;
                i <= parseInt($('.pagination li.active').attr('data-page')) + 4;
                i++
            ) {
                $('.pagination [data-page="' + i + '"]').show();
            }
            }
        }
        }

        // $(function() {
        // // Just to append id number for each row
        // $('table tr:eq(0)').prepend('<th> ID </th>');

        // var id = 0;

        // $('table tr:gt(0)').each(function() {
        //     id++;
        //     $(this).prepend('<td>' + id + '</td>');
        // });
        // });       

        // //ROWS SHOWING FUNCTION
        // function showig_rows_count(maxRows, pageNum, totalRows) {
        //     //Default rows showing
        //     var end_index = maxRows * pageNum;
        //     var start_index = ((maxRows * pageNum) - maxRows) + parseFloat(1);
        //     var string = 'Showing ' + start_index + ' to ' + end_index + ' of ' + totalRows + ' entries';
        //     $('.rows_count').html(string);
        // }

        // CREATING INDEX
        // function default_index() {
        //   $('table tr:eq(0)').prepend('<th> ID </th>')

        // 					var id = 0;

        // 					$('table tr:gt(0)').each(function(){	
        // 						id++
        // 						$(this).prepend('<td>'+id+'</td>');
        // 					});
        // }

        // All Table search script
        function FilterkeyWord_all_table() {

            // Count td if you want to search on all table instead of specific column

            var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("search_input_all");
            var input_value = document.getElementById("search_input_all").value;
            filter = input.value.toLowerCase();
            if (input_value != '') {
                table = document.getElementById("table-id");
                tr = table.getElementsByTagName("tr");

                // Loop through all table rows, and hide those who don't match the search query
                for (i = 1; i < tr.length; i++) {

                    var flag = 0;

                    for (j = 0; j < count; j++) {
                        td = tr[i].getElementsByTagName("td")[j];
                        if (td) {

                            var td_text = td.innerHTML;
                            if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                //var td_text = td.innerHTML;  
                                //td.innerHTML = 'shaban';
                                flag = 1;
                            } else {
                                //DO NOTHING
                            }
                        }
                    }
                    if (flag == 1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            } else {
                //RESET TABLE
                $('#maxRows').trigger('change');
            }
        }
        </script>




{{-- <script>
    // on input, get value and save it as 'storedValue'
    function changeColor() { 
    var userColor = document.getElementById('colorID').value;
    localStorage.setItem('storedValue', document.body.style.backgroundColor = userColor);
    
    }
    
    // if there is a value stored, update color picker and background color
    if(localStorage.storedValue) {
    document.getElementById('colorID').value = localStorage.storedValue;
    document.body.style.backgroundColor      = localStorage.storedValue;
    }
</script>  --}}


        {{-- <script>
$("a.sidebar-link").click(function() {
$("a.sidebar-link").css("background-color", "");
$(this).css("background-color", "#F2e9D4");



});

</script> --}}






        {{-- <script>
         Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict
        var dropdown = document.getElementsByClassName("sidebar-link");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
        </script> --}}

        {{-- const myElement = document.getElementById("subm");
myElement.style.color = "red"  --}}

        {{-- <script>
    $("a.link").click(function(){
      $("a.link").css("background-color", "black");
    $(this).css("background-color", "red");
});
</script> --}}



    </body>


    <!-- Mirrored from zuramai.github.io/mazer/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 11:16:21 GMT -->

    </html>






     {{-- mian finish --}}
        </div>
    {{-- content body finish --}}
    </div>
    <script src="{{asset('/')}}assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('/')}}assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="{{asset('/')}}assets/js/pages/dashboard.js"></script>

    <script src="{{asset('/')}}assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        var mquery = window.matchMedia("(max-width:767.98px)");
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script>
             $(document).ready(function () {
                 var SITEURL = "{{ url('/') }}";
                 $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });
                 var calendar = $('#full_calendar_events').fullCalendar({
                     editable: true,
                     editable: true,
                     events: SITEURL + "/calendar-event",
                     displayEventTime: true,
                     eventRender: function (event, element, view) {
                         if (event.allDay === 'true') {
                             event.allDay = true;
                         } else {
                             event.allDay = false;
                         }
                     },
                     selectable: true,
                     selectHelper: true,
                     select: function (event_start, event_end, allDay) {
                         var event_name = prompt('Event Name:');
                         if (event_name) {
                             var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                             var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                             $.ajax({
                                 url: SITEURL + "/calendar-crud-ajax",
                                 data: {
                                     event_name: event_name,
                                     event_start: event_start,
                                     event_end: event_end,
                                     type: 'create'
                                 },
                                 type: "POST",
                                 success: function (data) {
                                     displayMessage("Event created.");
                                     calendar.fullCalendar('renderEvent', {
                                         id: data.id,
                                         title: event_name,
                                         start: event_start,
                                         end: event_end,
                                         allDay: allDay
                                     }, true);
                                     calendar.fullCalendar('unselect');
                                 }
                             });
                         }
                     },
                     eventDrop: function (event, delta) {
                         var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                         var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                         $.ajax({
                             url: SITEURL + '/calendar-crud-ajax',
                             data: {
                                 title: event.event_name,
                                 start: event_start,
                                 end: event_end,
                                 id: event.id,
                                 type: 'edit'
                             },
                             type: "POST",
                             success: function (response) {
                                 displayMessage("Event updated");
                             }
                         });
                     },
                     eventClick: function (event) {
                         var eventDelete = confirm("Are you sure?");
                         if (eventDelete) {
                             $.ajax({
                                 type: "POST",
                                 url: SITEURL + '/calendar-crud-ajax',
                                 data: {
                                     id: event.id,
                                     type: 'delete'
                                 },
                                 success: function (response) {
                                     calendar.fullCalendar('removeEvents', event.id);
                                     displayMessage("Event removed");
                                 }
                             });
                         }
                     }
                 });
             });
             function displayMessage(message) {
                 toastr.success(message, 'Event');
             }
         </script>
</body>


</html>