<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="first.css">
<link rel="stylesheet" type="text/css" href="menu.css">
<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
                     
            <style>

                        body{
                            overflow: scroll;
                        }
                        table ,tr ,td{

                            padding:7px;
                            height: 30px;
                            margin: -40px;
                        }
                        .upload{

                            position: relative;
                            top: -90px;

                        }
                        hr{
                            margin-top: 20px;
                            margin-bottom: 20px;
                            border: 0;
                            border-top: 1px solid #1768b2;
                        }


                    }



                </style>
            </head>
            <body>
                <center>
                    <div class="logo">
                        <img src="logo.png" height="150px" width="450px">
                    </div>
                </center>
            <br>
            <br>

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#"><a href="user.php">Home</a></a>
    <a href="#"><a href="academic.php">Academic year</a></a>
            <a href="#"><a href="buswise.php">Bus Wise</a></a>
            <a href="#"><a href="classwise.php">Class and Branch</a></a>
            <a href="#">Pending</a>

            </div>

            <div class="menu">
                <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
            </div>
			   <div class="container" id="logout">
                                <a href="logout.php" class="btn btn-info btn-lg">
                                    <span class="glyphicon glyphicon-log-out"></span> Log out
                                </a>
                            </div>