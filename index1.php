<!DOCTYPE html>
<html>
    <head>
        <title>Excel Uploading PHP</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <link rel="stylesheet" type="text/css" href="first.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="first.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        
    </head>
 <body>
        <center>
            <div class="logo">
                <img src="logo.png" height="150px" width="450px">
            </div>
        </center>

 <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><a href="user.php">Home</a></a>
        <a href="#"><a href="uploadv4.php">Upload Info</a></a>
        <a href="#"><a href="update.php">Update Details</a></a>
        <a href="#"><a href="generate.php">Generate Report</a></a>
        <a href="#"><a href="card.php">Generate Card</a></a>
        <a href="#"><a href="logout.php">Change Password</a></a>
    </div>

    <div class="menu">
        <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
    </div>
       
<center>
        <div class="container">
            <h1>Excel Upload</h1>

            <form method="POST" action="excelUpload.php" enctype="multipart/form-data">



                <div class="form-inline ">
                    <label>Upload Excel File</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <br>
                <div class="form-inline">
                    <button type="submit" name="Submit" class="btn btn-success">Upload</button>
                </div>


            </form>
        </div>
        </center>

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