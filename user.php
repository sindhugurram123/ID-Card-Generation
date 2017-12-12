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

            <center>
                <div class="dropdown">

                    <button class="dropbtn">Select option</button>

                    <div class="dropdown-content">
                        <a href="generate.php">Generate Card</a>
                        <a href="update.php">Update Info</a>
                        <a href="upload.php">Upload Details</a>
                        <a hidden="report.php">Generate Report</a>
                        <a href="logout.php">Logout</a>
                        </center>
                </div>
                </div>


        </body>
        </html>