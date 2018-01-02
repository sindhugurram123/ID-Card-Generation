<html>
<head><title>Upload Page</title>

    <link rel="stylesheet" type="text/css" href="menu.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    <style>

    body  {
        background-image:url(clg.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        
        background-color: #8c8c8c; 
    }

    
 #logout{
                position:fixed;
                left:90%;
                top:20%;
            }
    
    table ,tr ,td{
        border-collapse: collapse;

        padding:9px;
    }
.logo{
padding: 30px;
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
        <a href="#"><a href="uploadv2.php">Upload Info</a></a>
        <a href="#"><a href="update.php">Update Details</a></a>
        <a href="#"><a href="generate.html">Generate Report</a></a>
        <a href="#"><a href="card.php">Generate Card</a></a>
        <a href="#"><a href="logout">Change Password</a></a>
    </div>

    <div class="menu">
        <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
    </div>
    <div>

        <center>
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <table style="color: black; font-weight:bold;" id="table" cellspacing="50" align="center">
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
                        <tr> <td> Name: </td> <td> <input type="text" class="form-control" name="name"></td>

                            <td> Branch: </td> <td> 
                                <section>
                                    <option> CSE</option>
                                    <option>IT</option>
                                    <option>ECE</option>
                                    <option>EEE</option>
                                    <option>CIVIL</option>
                                    <option>CHEM</option>
                                    <option>MECH</option>
                                    
                                </section>


                            </td></tr>
                            <tr> <td> Roll No.: </td> <td> <input type="text" class="form-control" name="roll"></td>
                                <td> Section: </td> <td> <input type="text" class="form-control" name="sec"></td></tr>
                                <tr> <td> Year: </td> <td> <input type="number" class="form-control" name="year"></td>
                                    <td> Boading Point : </td> <td> <input type="text" class="form-control" name="board"></td></tr>                  <tr> <td> Bus No: </td> <td> <input type="text" class="form-control"></td>
                                        <td> Total Amt: </td> <td> <input type="number" class="form-control" name="tot"></td></tr>
                                        <tr> <td> Amt Paid: </td> <td> <input type="number" class="form-control" name="paid"></td>
                                            <td> Amt Due: </td> <td> <input type="number" class="form-control" name="due"></td></tr>
                                            <tr> <td> Mobile NO.: </td> <td> <input type="number" class="form-control" name="mobile"></td>
                                                <td>Batch:</td><td><input type="text" name="batch" class="form-control"></td>
                                            </tr>  <tr>
                                                <td><input class="btn btn-primary" type="submit" value="Submit"></td><br><br>
                                                <td><input class="btn btn-primary" type="reset" value="Reset"></td>  
                                                <td><input class="btn btn-primary" type="button" value="Upload"> </td>
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

                        <?php 


                    /*    $name =$_POST['name'];
                        $brach=$_POST['bach'];
                        $roll=$_POST['roll'];
                        $sec=$_POST['sec'];
                        $year=$_POST['year'];
                        $tot=$_POST['tot'];
                        $paid=$_POST['paid'];
                        $due=$_POST['due'];
                        $mobile=$_POST['mobile'];
                        $board=$_POST['board'];
                        $opt=$_POST['cars'];
                        $class =$_POST['cls'];
                        $batch=$_POST['batch'];
                        $cat=$_POST['cars'];  */
                        
             
                        $name =isset($_POST['name']);
                        $brach=isset($_POST['bach']);
                        $roll=isset($_POST['roll']);
                        $sec=isset($_POST['sec']);
                        $year=isset($_POST['year']);
                        $tot=isset($_POST['tot']);
                        $paid=isset($_POST['paid']);
                        $due=isset($_POST['due']);
                        $mobile=isset($_POST['mobile']);
                        $board=isset($_POST['board']);
                        $opt=isset($_POST['cars']);
                        $class =isset($_POST['cls']);
                        $batch=isset($_POST['batch']);
                        $cat=isset($_POST['cars']);
                        

$connet = @mysql_connect("localhost","root","sindhu") ;
                        mysql_select_db("idcard");

                        if($connet=== false){
                            die("ERROR: Could not ggg connect. " . mysql_connect_error());
                        }
                        
                        $sql = "INSERT INTO stud_master (hall_ticket,route_no,class,name,branch,batch,yeart,Phone_No,section) VALUES ('$roll',$board,$class,'$name','$brach','$batch',$year,$mobile,'$sec')";

                        $result = mysql_query($sql);

                       /*if(mysql_query( $connet,$result)){
                    echo "Records added successfully.";
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysql_error($connet);
                        }
                        */

                        if( $result ) 
                            echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";
                        else
                            echo "<script type='text/javascript'>alert('Failed! Try Again !')</script>";
                        ?>
                        
                        </html>
