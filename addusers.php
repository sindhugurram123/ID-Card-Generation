<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
    <center><img src="logo.png" height="150px" width="450px"><br><br><br>
<form action="insert.php" method="post">
    <p>
        <label for="emailId">Email Id </label>
        <input type="text" name="email_id" id="emailId">
    </p>
    <p>
        <label for="userPassword">Password</label>
        <input type="password" name="user_password" id="userPassword">
    </p>
    <p>
        <label for="userRole">Role</label>
        <input type="text" name="user_role" id="userRole">
    </p>
    <input type="submit" value="Submit">
</form>
</center>
</body>
</html>