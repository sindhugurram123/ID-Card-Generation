<?
php ini_set( "display_errors", 0); ?>
<?php 
if(isset($_POST['Submit']))
{
    $db = new mysqli("localhost","root","sindhu","idcard") ;           
    $roll=mysqli_real_escape_string($db,trim($_POST['roll']));

    $sql="select  hall_ticket,name,branch,section,yeart,Phone_No,batch from stud_master where hall_ticket=$roll;";
    $result=mysqli_query($db,$sql);

}

if(isset($_POST['print']))

{


$db = new mysqli("localhost","root","sindhu","idcard") ;           



$roll=mysqli_real_escape_string($db,$_POST['roll']);
$name= mysqli_real_escape_string($db,$_POST['name']);
$branch=mysqli_real_escape_string($db,$_POST['branch']);
$section=mysqli_real_escape_string($db,$_POST['section']);
$year=mysqli_real_escape_string($db,$_POST['year']);
$class=mysqli_real_escape_string($db,$_POST['cls']);
$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
$batch=mysqli_real_escape_string($db,$_POST['batch']);

if($db == false){
        die("ERROR: Could not  connect. " . mysqli_connect_error());
    }

 $sql = "INSERT INTO stud_master (hall_ticket,class,name,branch,batch,yeart,Phone_No,section) VALUES ('$roll','$class','$name','$branch','$batch',$year,$mobile,'$section')";
$result = mysqli_query($db,$sql);
  if(mysqli_query( $db,$result)){
                    echo "Records added successfully.";
                        } else{
                            //echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                        }
                     
                        if( $result ) 
                            echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";
                        else
                            echo "<script type='text/javascript'>alert('Failed! Try Again !')</script>";


        
}



?>
<html>
<head>
    <title>Upload Page</title>

    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="first.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script>
        $(document).ready(function() {

            $('input.board').typeahead({
                name: 'board',
                remote: 'city.php?query=%QUERY'

            });

        })
    </script>

    <style>

    body{
        overflow: scroll;
    }
    table ,tr ,td{

        padding:7px;
        height: 30px;
        margin: -40px;
    }
    .upload{

        position: relative;
        top: -90px;

    }
    hr{
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #1768b2;
    }
}
</style>
</head>
<body>
    <center>
        <div class="logo">
            <img src="logo.png" height="150px" width="450px">
        </div>
    </center>
</div>
<br>
<br>
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
<div>
    <center>
        <form class="form-inline" name="f1" method="post">
            <div class="form-group">

                <table style="color: black; font-weight:bold;" id="table" cellspacing="50" align="center">
                    <tr><td class="Upload"><a href="index1.php"><input class="btn btn-primary" type="button" value="Upload"> </a></td></tr>
                    <hr  size="190px">

                    <tr> <td>
                        <select name="cars" >
                            <option value="Student">Student</option><option value="Faculty">Faculty</option>
                        </select>
                    </td>
                    <td> Class : <select name="cls">
                        <option value="Btech">Btech</option>
                        <option value="Mtech">Mtech</option>
                        <option value="BPharmcy">BPharmcy</option>
                        <option value="MBA">MBA</option>
                    </select></td></tr>
                    <tr>
                        <td>Roll No.</td><td><input type="text" name="roll"></td>
                    </tr>
                    <tr><td> Name:</td><td> <input type="text" name="name"></td>
                        <td>Branch:</td>
                        <td><select name="branch">
                            <option>CSE</option>
                            <option>IT</option>
                            <option>MECH</option>
                            <OPTION>CIVIL</OPTION>
                            <OPTION>CHEM</OPTION>
                            <OPTION>ECE</OPTION>
                            <OPTION>EEE</OPTION>
                        </select>                      </td>


                    </tr>
                    <tr>
                       <TD>Section</TD>

                       <td>
                           <select name="section">
                               <option>A</option><OPTION>B</OPTION><OPTION>C</OPTION><OPTION>D</OPTION>
                           </select>
                       </td>

                       <td>Year</td>
                       <td>
                           <select name="year">
                               <option>1</option><option>2</option><option>3</option><option>4</option>
                           </select>
                       </td>
                   </tr>

                   <tr>
                    <td>Batch No.</td> <td><input type="text" name="batch"></td>
              
                    <td>Mobile No.</td><td><input type="number" name="mobile"></td>
                   </tr>

                   <tr>
                       <td>
                           <button type="submit" value="print" name="print" onclick="f1.action='uploadv4.php';  return true;" class="btn btn-success">
                           Upload</button>
                       </td>
                   </tr>
               </div>
           </table>
       </form>
   </center>
</div>
<div class="container" id="logout">
    <a href="logout.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Log out
    </a>
</div>
</body>
</html>

