<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "sindhu", "idcard");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$bus_no = mysqli_real_escape_string($link, $_REQUEST['bus_no']);
$bus_seats = mysqli_real_escape_string($link, $_REQUEST['bus_seats']);
$bus_name = mysqli_real_escape_string($link, $_REQUEST['bus_name']);
$route_no = mysqli_real_escape_string($link,$_REQUEST['route_no']);
$driver_name = mysqli_real_escape_string($link,$_REQUEST['driver_name']);
$boarding_points = mysqli_real_escape_string($link,$_REQUEST['boarding_points']);
$mobile_no = mysqli_real_escape_string($link,$_REQUEST['mobile_no']); 
// attempt insert query execution
$sql = "INSERT INTO route_master(route_no, bus_no, driver_name, seats, Board_pts, mobile, bus_name) VALUES ('$route_no', '$bus_no', '$driver_name', '$bus_seats','$boarding_points', '$mobile_no', '$bus_name')";
if(mysqli_query($link, $sql)){
	
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>