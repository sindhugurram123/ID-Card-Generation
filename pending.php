<?
php ini_set( "display_errors", 0); ?>
    

      <?php 

    $db = new mysqli("localhost","root","sindhu","idcard");

    
 
$result = mysqli_query($db,"SELECT * FROM fee_master WHERE due != 0");

 

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
    <a href="#"><a href="classwise.php">Class</a></a>
   <a href="#"><a href="branch.php">Branch</a></a>
    <a href="#"><a href="pending.php">Pending</a></a>
    <a href="#"><a href="logout">Change Password</a></a>
  </div>
    
<div class="container">
<center>
 

</center>   </form>
</P>
</div>

  
<div class="container">
    <div  class="tab">
      <table class="table table-bordered" id="tabl">
        <thead>
          <tr style="background-color:#5DADE2;font-size:20px;">
            <th>Route No.</th>       
            <th>Boarding Point</th>
            <th>Toatl fees</th>
            <th>Fees Paid</th>
            <th>Due</th>
            <th>Hall ticket</th>
            
        </tr>
    </thead>

    
   
    <div name="tables">
    <tbody>
        <?php while($row = mysqli_fetch_array($result))
        { ?>
          <tr>
             <td ><?php echo $row['route_no'] ?></td>
            <td><?php echo $row['boadin_point'] ?></td>
            <td><?php echo $row['total_fees'] ?></td>
            <td><?php echo $row['fees_paid']?></td>
            <td> <?php echo $row['due'] ?></td>
            <td><?php echo $row['hall_ticket'] ?></td>
            </tr>
         <?php }?>
     </tbody>
   </div>
   
   <?php
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}

    ?>
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