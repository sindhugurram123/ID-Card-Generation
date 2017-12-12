<html>

    <?php

$username = $_POST['name'];
$password = $_POST['pwd'];



$connet = @mysql_connect("localhost","root","sindhu");
mysql_select_db("idcard");


$result = mysql_query("select * from login_db where username = '$username' and password ='$password' ")
    or die("Failed to connect llllll ".mysql_error());

$result1 = mysql_query("select role from login_db where username = '$username' and password ='$password' ");

$row1 = mysql_fetch_assoc($result1);



switch($row1['role']) 
{
    case 'admin':
    header("location: admin.php");
    break;
    
    
    case 'user':
    echo "HEllo User there";
    header("location: user.php"); break;

    // you could do a special check here for $user['id'] == 1, and redirect to the member section, if you want
}

$row = mysql_fetch_array($result);
echo "\t".$row['username'].$row['password'];

if($row['username'] == $username && $row['password']== $password)
{
    echo "login success";
}
else
{
    echo "failed";
}


    
    ?>

</html>