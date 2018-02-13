<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="first.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
    
<style type="text/css">
      .logo{
padding: 30px;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
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

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<body>

    <center>
        <div class="logo">
            <img src="logo.png" height="150px" width="450px">
        </div>
       <p style="color:black;font-size:40px;font-weight:bold;">Welcome Admin !!</p>


       
      <div class="dropdown">
  <button class="dropbtn">Add</button>
  <div class="dropdown-content">
    <a href="#"><a href="addusers.php">Users</a></a>
    <a href="#"><a href="addbuses.php">Buses</a></a>
  
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Generate Report</button>
  <div class="dropdown-content">
    <a href="#"><a href="addusers.php">Studentwise</a></a>
    <a href="#"><a href="addbuses.php">Buswise</a></a>
  
  </div>
</div>

 <div class="dropdown">
  <button class="dropbtn">Delete</button>
  <div class="dropdown-content">
    <a href="#">Users</a>
    <a href="#">Buses</a>
    
  </div>
</div>



    </center>

    <div class="container" id="logout">
   <a href="logout.php" class="btn btn-info btn-lg">
    <span class="glyphicon glyphicon-log-out"></span> Log out
 </a>
  </div>
</body>
</head>
</html>