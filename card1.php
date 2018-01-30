
<?
php ini_set( "display_errors", 0); ?>


<?php 
if(isset($_POST['print']))
{
    $db = new mysqli("localhost","root","sindhu","idcard") ;   

    $name =mysqli_real_escape_string($db,$_POST['name']);
    $roll=mysqli_real_escape_string($db,trim($_POST['roll']));
    $class =mysqli_real_escape_string($db,$_POST['cls']);
    $brach=mysqli_real_escape_string($db,$_POST['batch']);
    $board=mysqli_real_escape_string($db,$_POST['board']);
    $bus = mysqli_real_escape_string($db,$_POST['bus']);
    $paid=mysqli_real_escape_string($db,$_POST['paid']);
    $due=mysqli_real_escape_string($db,$_POST['due']);

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Generate Card</title>
    <link rel="stylesheet" type="text/css" href="first.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="menu.css">
    

    <style>

    
    .id-card-holder {
        width: 325px;
        padding: 4px;
        margin: 0 auto;
        height:140px;
        border-radius: 5px;
        position: relative;
    }

    .name{
        font-size:15px;
        color:#1c6593;

        border:1.5px solid #1c6593;
        float:top;

    }
    .student{
        color:red; 
        font-size:20px;
    }
    .id-card {

        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 1.5px 0px #b9b9b9;
    }
    .id-card img {
        margin: 0 auto;
    }
    .header img{
        width: 40px;
        float:left;
        border:1.5px solid #1c6593;
        padding:0px;
        margin:4px;
    }
    .photo img {
        width: 0px;
        margin-top: 15px;
        float: right;
        position: relative;
        bottom: 130px;
        right: 40px;

    }
    h2 {
        font-size: 15px;
        margin: 5px 0;
    }
    h3 {
        font-size: 12px;
        margin: 2.5px 0;
        font-weight: 300;
    }
    .qr-code img {
        width: 50px;
        float: right;
        position: relative;
        bottom: 100px;
        right: 10px;

    }
    p {
        font-size: 5px;
        margin: 2px;
    }
    .click{
        position: relative;
        bottom:  -150px;
        left: 1000px;
    }
    .print{
        position: relative;
        bottom: -180px;
        left: 1000px;
    }

    .ok{
        position: relative;
        bottom: 80px;
        left: 1000px;
        width: 20em;
    }

    #search{
        width: 20em;height: 2em;
    }
    
</style>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function myFunction() {
        window.print();
    }
</script>
</head>
<body>

    <center>
        <div class="logo">
            <img src="logo.png" height="150px" width="450px">
        </div>
    </center> 

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><a href="user.php">Home</a></a>
        <a href="#"><a href="uploadv4.php">Upload Info</a></a>
        <a href="#"><a href="update.php">Update Details</a></a>
        <a href="#"><a href="generate1.html">Generate Report</a></a>
        <a href="#"><a href="card.php">Generate Card</a></a>
        <a href="#"><a href="logout">Change Password</a></a>
    </div>
    <div class="menu">
        <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
    </div>

    <div class="id-card-holder">
        <div class="id-card">
            <div class="header">
                <img src="anurag.jpg">
                <div class="name"><center>Anurag GRoup Of Instittuions<br>(Formerly CVSR College of Engineering)<br>(An Autonomous Institutions)</center>
                </div>
            </div>
            
            <div class="student">
                STUDENT BUS PASS
            </div>
            
            <table>

                <tr>

                    <td>Name:</td><td><?php echo $name ?></td></tr>
                    <tr><td>H.No.:</td><td><?php echo $roll ?></td></tr>
                    <tr><td>Course:</td><td><?php echo $class ?></td></tr>
                    <tr><td>Branch:</td><td> <?php echo $brach ?> </td></tr>
                    <tr><td>Boading Pt.</td><td><?php echo $board ?> </td></tr>
                    <tr><td>Bus No.:</td><td> <?php echo $bus ?>  </td>


                        <tr><td>Paid Amt:</td><td><?php echo $paid ?> </td><td>Due:</td><td><?php echo $due ?> </td></tr>


                    </table>

                    <div class="photo">
                        <img src="logo.pnp">
                    </div>

                    <div class="qr-code">
                        <img src="https://www.shopify.com/growth-tools-assets/qr-code/shopify-faae7065b7b351d28495b345ed76096c03de28bac346deb1e85db632862fd0e4.png">
                    </div>
                    <h3>www.anurag.edu.in</h3>
                    <hr>
                    <p>
                        <center>Anurag Group of Institutions
                            Venkatapur, Ghatkesar,
                            Medchal (Dist.), Hyderabad, 
                            Telangana, INDIA - 500 088 
                        </center></p>

                    </div>
                </div>

                <div class="click">
                    <a href="geeetha/Buspass/index.php" class="btn btn-primary btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Image Capture
                    </a>
                </div>


                <div class="print">
                    <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                </div>

                <div class="ok">
                    <form action="card1.php">
                    <input type="file" name="image"/>

                    <input type="submit" name="submit" id="search" value="UPLOAD"/>

                </form>
                </div>

                <div class="container" id="logout">
                    <a href="logout.php" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </div>
            </body>
            </html>