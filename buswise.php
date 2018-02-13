<?
php ini_set( "display_errors", 0); ?>
    

      <?php 
if(isset($_POST['Submit']))
{
    $db = new mysqli("localhost","root","sindhu","idcard");

    $classes=mysqli_real_escape_string($db,$_POST['classes']);
 
$result = mysqli_query($db,"SELECT * FROM bus_master WHERE bus_no='$classes'");
}
 

      ?>


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
    
<div class="container">
<center>
 <form action="" method="post">
  <P style="color:black;font-weight:bold;font-size:19px;">Select Bus:<select name="classes">
    <option>1</option>
    <option>2</option>
    <option>3</option>
  </select>

<div class="btn-group" >  <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
                        </div>   

</center>   </form>
</P>
</div>

  
<div class="container">
    <div  class="tab">
      <table class="table table-bordered" id="tabl">
        <thead>
          <tr style="background-color:#5DADE2;">
            <th>Route No</th>       
            <th>Bus No.</th>
            <th>Driver Name</th>
            <th>Seats</th>
            <th>Boarding Points</th>
            <th>Mobile</th>
            <th>Bus Name</th>
            
        </tr>
    </thead>

    <?php if(isset($_POST['Submit']))
    {
    ?>
    <div name="tables">
    <tbody>
        <?php while($row = mysqli_fetch_array($result))
        { ?>
          <tr>
             <td ><?php echo $row['route_no'] ?></td>
            <td><?php echo $row['bus_no'] ?></td>
            <td><?php echo $row['driver_name'] ?></td>
            <td><?php echo $row['seats']?></td>
            <td> <?php echo $row['Board_pts'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><?php echo $row['bus_name'] ?></td>
            </tr>
         <?php }?>
     </tbody>
   </div>
   <?php }?>
 </table>
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