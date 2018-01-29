<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "sindhu", "idcard");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$email_id = mysqli_real_escape_string($link, $_REQUEST['email_id']);
$user_password = mysqli_real_escape_string($link, $_REQUEST['user_password']);
$user_role = mysqli_real_escape_string($link, $_REQUEST['user_role']);
 
// attempt insert query execution
$sql = "INSERT INTO login_db(username, password, role) VALUES ('$email_id', '$user_password', '$user_role')";
if(mysqli_query($link, $sql)){
	
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>