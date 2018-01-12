
<?
php ini_set( "display_errors", 0); ?>
<?php 
if(isset($_POST['Submit']))
{
	$db = new mysqli("localhost","root","sindhu","idcard") ;   

	$name =mysqli_real_escape_string($db,$_POST['name']);
	$roll=mysqli_real_escape_string($db,trim($_POST['roll']));
	$class =mysqli_real_escape_string($db,$_POST['cls']);
	$brach=mysqli_real_escape_string($db,$_POST['bach']);
	$board=mysqli_real_escape_string($db,$_POST['board']);
	$bus = mysqli_real_escape_string($db,$_POST['bus']);
	$paid=mysqli_real_escape_string($db,$_POST['paid']);
	$due=mysqli_real_escape_string($db,$_POST['due']);

	echo $name;

}
?>


<html>
<head><title>Check Details</title>

	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="first.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
		}
		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>
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
			<a href="#"><a href="generate.html">Generate Report</a></a>
			<a href="#"><a href="card.php">Generate Card</a></a>
			<a href="#"><a href="logout">Change Password</a></a>
		</div>
		<div class="menu">
			<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
		</div>



		<div class="container" id="logout">
			<a href="logout.php" class="btn btn-info btn-lg">
				<span class="glyphicon glyphicon-log-out"></span> Log out
			</a>
		</div>
	</body> 
</htm>
