<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="first.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <style>
  .dropdown-menu-center {
  left: 50% !important;
  right: auto !important;
  text-align: center !important;
  transform: translate(-50%, 0) !important;
}
  </style>
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
  <p align="center">
<button onclick="goBack()">Go Back</button></p>
  <div class="menu">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
  </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#"><a href="user.php">Home</a></a>
    <a href="#"><a href="academic.php">Academic year</a></a>
    <a href="#"><a href="buswise.php">Bus Wise</a></a>
    <a href="#"><a href="classwise.php">Class and Branch</a></a>
    <a href="#">Pending</a>
    
    <a href="#"><a href="logout">Change Password</a></a>
  </div>



<p align="center">
<div class="container">
  
  <div class="dropdown text-center">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Bus No.
    <span class="caret"></span></button></p>
    <ul class="dropdown-menu dropdown-menu-center">
      <li class="divider"></li>
	  <li><a href="#">1</a></li>
	  <li class="divider"></li>
      <li><a href="#">2</a></li>
	  <li class="divider"></li>
      <li><a href="#">3</a></li>
      <li class="divider"></li>
      <li><a href="#">4</a></li>
	  <li class="divider"></li>
      <li><a href="#">5</a></li>
	  <li class="divider"></li>
      <li><a href="#">6</a></li>
	  <li class="divider"></li>
      <li><a href="#">7</a></li>
	  <li class="divider"></li>
      <li><a href="#">8</a></li>
    </ul>
  </div>
</div>

<br>
<br>
  
<div class="container" id="logout">
  <a href="logout.php" class="btn btn-info btn-lg">
    <span class="glyphicon glyphicon-log-out"></span> Log out
  </a>
</div>

<script>
  $(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });
  
  function goBack() {
    window.history.back()
}
</script>

</body>
</html>