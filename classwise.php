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

.dropdown-submenu {
    position: relative;
	
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
	
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
  <p align="left">
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
    
<div class="container" align="center-right">
                                
  <div class="dropdown" >
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Class
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
	<li class="dropdown-submenu">
      <a class="test" tabindex="-1" href="#">B.Tech<span class="caret"></span></a>
	  <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">1st year</a></li>
          <li><a tabindex="-1" href="#">2nd year</a></li>
		  <li><a tabindex="-1" href="#">3rd year</a></li>
		  <li><a tabindex="-1" href="#">4th year</a></li>
          
        </ul>
	  
	  </li>
	  
	  
	  
	  <li class="dropdown-submenu">
	  <a class="test" tabindex="-1" href="#">M.Tech<span class="caret"></span></a>
	   <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">1st year</a></li>
          <li><a tabindex="-1" href="#">2nd year</a></li>
	</ul>
	 </li>
	 
	 
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Pharmacy <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">1st year</a></li>
          <li><a tabindex="-1" href="#">2nd year</a></li>
		  <li><a tabindex="-1" href="#">3rd year</a></li>
		  <li><a tabindex="-1" href="#">4th year</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
</div>

  
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
</script>

</body>
</html>