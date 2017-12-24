<html>
    <head>
        <head>
            <title>Home Page</title>
            <link rel="stylesheet" type="text/css" href="first.css">
            <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
        </head>

        <style>

            body {
                font-family: "Lato", sans-serif;
            }

            .bus{
                font-size:50px;
                font-family:Georgia Header;
                font-weight:bold;
            }
            .sidenav {

                width: 0;
                position: fixed;
                z-index: 1;
                top: 190px;
                left: 0;
                overflow-x: hidden;
                background:black;
                transition: 0.5s;
                padding-top: 10px;

            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }
            .menu{
                position: relative;
                top:5%;
            }



            .dropbtn {
                background-color: #021638;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: fixed;
                display: inline-block;
                top :200px;
                left:0px;;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #cedbe5;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #bc9249}

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: #a5551f;
            }
            #logout{
                position:fixed;
                left:90%;
                top:20%;
            }


        </style>





        <body>

            <center>

                <div class="anurag">
                    ANURAG GROUP OF INSTITUTIONS</div>

                <div class="cvsr">
                    Formely known as "CVSR College Of Engineering" <br>Ghatkesar (M) Ranga Reddy (Dist.), Venkatapur, Telangana
                </div>
            </center>       
            <br>
            <br>

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#"><a href="user.php">Home</a></a>
                <a href="#"><a href="upload.php">Upload Info</a></a>
                <a href="#"><a href="update.php">Update Details</a></a>
                <a href="#"><a href="generate.html">Generate Report</a></a>
            </div>

            <div class="menu">
                <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
            </div>

            <div class="bus">
                <center> Bus Pass Generation</center>

            </div>
            <marquee> Bus pass generation . Major project</marquee>

            <div class="container" id="logout">
                <a href="logout.php" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                </a>
            </div>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>



        </body>
        </html>