<html>
    <head>
        <title>Upload Page</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="menu.css">
        
        <style>
            body
            {
                background-image:url(clg.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                overflow:hidden;
            }

            div.anurag{
                font-style: normal;
                position: relative;
                top:10px;
                color: black;
                font-family: serif;
                font-size: 70px;
            }

            div.cvsr{
                position: relative;
                font-style: normal;
                font-family: serif;
                font-size: 20px;
                color: black;

            }
            div.upload{
                position: relative;
                font-style: normal;
                font-family: serif;
                font-size: 15px;
                color: black;
            }

             body {
                font-family: "Lato", sans-serif;
            }

            .sidenav {

                width:0 ;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
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
             .menu{
                position: relative;
                top:5%;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }


            }

        </style>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }

        </script>
    </head>


    <body>

        <div class="anurag">
            <center>
                ANURAG GROUP OF INSTITUTIONS
            </center>
        </div>



        <div class="cvsr">
            <center>
                Formerly known as CVSR College of Engineering <br>Ghatkesar (M) Ranga Reddy (Dist.), Venkatapur, Telangana
            </center>
        </div>
        <br>
        <br>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#"><a href="user.php">Home</a></a>
            <a href="#"><a href="upload.php">Upload Info</a></a>
            <a href="#"><a href="update.php">Update Details</a></a>
            <a href="#"><a href="generate.html">Generate Card</a></a>
        </div>

        <div class="menu">
            <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
        </div>
        <center>
            <div class="upload">
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label for="file"><h3>Choose file to upload</h3></label>
                        <center><input type="file" id="file" name="file" multiple></center>
                    </div>
                    <br>
                    <br>
                    <div>
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </center>


        <body>      
<script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>


            </html>