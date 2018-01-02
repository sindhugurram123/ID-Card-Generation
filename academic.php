

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


</head>
<body>
 <center>
         <div class="logo">
        <img src="logo.png" height="150px" width="450px">
    </div></center>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#"><a href="user.php">Home</a></a>
    <a href="#"><a href="academic.php">Academic year</a></a>
            <a href="#"><a href="buswise.php">Bus Wise</a></a>
            <a href="#"><a href="classwise.php">Class and Branch</a></a>
            <a href="#">Pending</a>
            <a href="#">Student Preferred</a>
    <a href="#"><a href="logout">Change Password</a></a>
</div>

<div class="menu">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
</div>
<center>
  

<table cellpadding="30px">
<center>
<div class="container" align="center-right">
<div class="btn-group" >
     <td><label class="control-label col-sm-2" ></label></td>
    	<td style="font-size:20px"><strong><i>From:</i></strong><input type="date"  style="color:black;"/></td> </div>
		
		 <div class="btn-group" >
	<td style="font-size:20px;"><strong><i>To:</i></strong><input type="date"   style="color:black;"/></</td> 
     <td><label class="control-label col-sm-2" ></label></td></div><br>

<td><button  class="btn btn-primary" value="Submit" name="Submit" type="Submit">Submit</button></td>

</table>
</div></center>
  <div class="container" id="logout">
              <a href="logout.php" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-log-out"></span> Log out
                </a>
            </div>

</body>
   
     </html>