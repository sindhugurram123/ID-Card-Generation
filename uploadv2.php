<?
php ini_set( "display_errors", 0); ?>
<?php 
if(isset($_POST['Submit']))
{
$db = new mysqli("localhost","root","sindhu","idcard") ;           
$roll=mysqli_real_escape_string($db,trim($_POST['roll']));
$sql="select  hall_ticket,name,branch,section,yeart,Phone_No from stud_master where hall_ticket=$roll;";
$result=mysqli_query($db,$sql);
/*
while ($row=mysqli_fetch_assoc($result)) {
echo $row["hall_ticket"];
echo $row["name"];
echo $row["branch"];
}
*/
}
?>
<html>
<head><title>Upload Page</title>

<link rel="stylesheet" type="text/css" href="menu.css">
<link rel="stylesheet" type="text/css" href="first.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
</div>
<br>
<br>
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
<div>
<center>
<form class="form-inline" action="" method="post">
<div class="form-group">
<table style="color: black; font-weight:bold;" id="table" cellspacing="50" align="center">
<tr><td class="Upload"><a href="index1.php"><input class="btn btn-primary" type="button" value="Upload"> </a></td></tr>
<hr  size="190px">
<tr> <td>
<select name="cars" >
<option value="Student">Student</option><option value="Faculty">Faculty</option>
</select>
</td>
<td> Class : <select name="cls">
<option value="Btech">Btech</option>
<option value="Mtech">Mtech</option>
<option value="BPharmcy">BPharmcy</option>
<option value="MBA">MBA</option>
</select></td></tr>
<tr> <td> Roll No.: </td> <td> <input type="text" class="form-control" name="roll" ></td>
<td><input class="btn btn-primary" type="submit" name="Submit" value="Submit">
<td><input class="btn btn-primary" type="reset" value="Reset"></td>
</td>
</tr>
<tr>
<?php 
if(isset($_POST['Submit']))
{
while ($row=mysqli_fetch_assoc($result)) {
?>
<td> Name: </td> <td> <input type="text" readonly="readonly class="form-control" name="name" value="<?php echo $row["name"];  ?>" ></td>
<td> Branch: </td>  <td> <input type="text" readonly="readonly class="form-control" name="branch" value="<?php echo $row["branch"];  ?>" ></td> </tr>
<tr> 
<td> Section: </td> <td> <input type="text" readonly="readonly class="form-control"  name="sec" value="<?php echo $row["section"]; ?>"></td>
<td> Mobile NO.: </td> <td> <input type="number"  readonly="readonly class="form-control" name="mobile"  value="<?php echo $row["Phone_No"]; ?>"></td>
</tr>
<tr> <td> Year: </td> <td><input type="number"  readonly="readonly class="form-control" name="mobile"  value="<?php echo $row["yeart"]; ?>"></td>
<td> Boading Point : </td> <td>
<select  name="board" onchange="myfunction()"> 
<option>Miyapur</option>
<option>Dilsuknagar</option>
<option>ECIL</option>
<option>Miyapur</option>
<option>Ramanthapur</option>
<option>Tarnaka</option>
<option>kukatpally</option>
</select>
</td></tr>
<?php
function myfunction()
    {
        $query = "select bus_no from bus_master where Board_pts='$board';";
        $ans=mysqli_query($db,$sql);
        while ($row1=mysqli_fetch_assoc($ans))
        {echo $row1["bus_no"];} 
    }  
?>

<tr> <td> Bus No: </td> <td> 
<input type="number" value="" name="">
</td>
<td> Total Amt: </td> <td> <input type="number" class="form-control" name="tot"></td></tr>
<tr> <td> Amt Paid: </td> <td> <input type="number" class="form-control" name="paid"></td>
<td> Amt Due: </td> <td> <input type="number" class="form-control" name="due"></td></tr>
<tr> 
<td>Batch:</td><td><input type="text" name="batch" class="form-control"></td>
</tr>  <tr>
<br><br>
<td></td>  
<?php } } ?>
</div>
</table>
</form>
</center>
</div>
<div class="container" id="logout">
<a href="logout.php" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-log-out"></span> Log out
</a>
</div>
</body>
</html>