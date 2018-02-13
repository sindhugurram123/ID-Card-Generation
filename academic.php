<?
php ini_set( "display_errors", 0); ?>
    

      <?php 
if(isset($_POST['Submit']))
{
    $db = new mysqli("localhost","root","sindhu","idcard");

    $fromdate=mysqli_real_escape_string($db,$_POST['fromdate']);

    $todate=mysqli_real_escape_string($db,$_POST['todate']);



    $result = mysqli_query($db,"SELECT * FROM stud_master WHERE date BETWEEN CAST('$fromdate' AS DATE) AND CAST('$todate' AS DATE)");
}
 

      ?>




<html>
<head>
  <title>Generate Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="first.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
<style type="text/css">
  
     .tab 
{
    border-style:solid;
    border-color:black;
    color: black;
    font-weight: italic;
} 




</style>

</head>
<body>
 <center>
   <div class="logo">
    <img src="logo.png" height="150px" width="450px">
  </div></center>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#"><a href="user.php">Home</a></a>
    <a href="#"><a href="academic.php">Academic year</a></a>
    <a href="#"><a href="buswise.php">Bus Wise</a></a>
    <a href="#"><a href="classwise.php">Class and Branch</a></a>
    <a href="#">Pending</a>
    <a href="#">Student Preferred</a>
    <a href="#"><a href="logout">Change Password</a></a>
  </div>

  <div class="menu">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
  </div>
  <center>

    <form action=""  method="post"  name="f1">
      <table cellpadding="30px">
        <center>
          <div class="container" align="center-right">
            <div class="btn-group" >
             <td><label class="control-label col-sm-2" ></label></td>
             <td style="font-size:20px"><strong><i>From:</i></strong><input type="date" name="fromdate" style="color:black;"/></td> 

           </div>

           <div class="btn-group" >
             <td style="font-size:20px;"><strong><i>To:</i></strong><input type="date"  name="todate" style="color:black;"/></</td> 
             <td><label class="control-label col-sm-2" ></label></td></div><br>

             <td><input class="btn btn-primary" type="submit" name="Submit" value="Submit"></td>
           </form>
         </table>
       </div></center>
       <div class="container" id="logout">
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </div>

      <center>
       <?php
if(isset($_POST['Submit']))
{
        echo $fromdate;  echo " to " ;  echo $todate;
}
?>
      </center>

      <div class="container">
    <div  class="tab">
      <table class="table table-bordered" id="tabl">
        <thead>
          <tr style="background-color:#5DADE2  ;">
            <th>Name</th>       
            <th>Class</th>
            <th>Hall Ticket No.</th>
            <th>Branch</th>
            <th>Batch</th>
            <th>Contact</th>
            
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
            <td ><?php echo $row['name'] ?></td>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['hall_ticket'] ?></td>
            <td><?php echo $row['branch']?></td>
            <td> <?php echo $row['batch'] ?></td>
            <td><?php echo $row['Phone_No'] ?></td>
            </tr>
         <?php }?>
     </tbody>
   </div>
   <?php }?>
 </table>
</div>
</div>


   </body>

      </html>
