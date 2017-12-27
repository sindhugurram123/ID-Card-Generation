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

    div.anurag{
        font-style: normal;
        position: relative;
        top:10px;
        color: black;
        font-family: serif;
        font-size: 70px;
    }

    div.cvsr{
        position: relative;
        font-style: normal;
        font-family: serif;
        font-size: 20px;
        color: black;

    }
    table ,tr ,td{
        border-collapse: collapse;

        padding:9px;
    }

</style>
</head>
<body>
    <center>
        <div class="anurag">
        ANURAG GROUP OF INSTITUTIONS</div>
        <div class="cvsr">
            Formely known as "CVSR College Of Engineering" <br>Ghatkesar (M) Ranga Reddy (Dist.), Venkatapur, Telangana
        </div>
    </center> 
    <br>
    <br>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><a href="user.php">Home</a></a>
        <a href="#"><a href="uploadv2.php">Upload Info</a></a>
        <a href="#"><a href="update.php">Update Details</a></a>
        <a href="#"><a href="generate.html">Generate Report</a></a>
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
                            <option>Btech</option>
                            <option>Mtech</option>
                            <option>BPharmcy</option>
                            <option>MBA</option>
                        </select></td></tr>
                        <tr> <td> Name: </td> <td> <input type="text" class="form-control" name="name"></td>

                            <td> Branch: </td> <td> <input type="text" class="form-control" name="bach"></td></tr>
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
                        </body>

                        <?php 

                        $name =$_POST['name'];
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
                        $class =isset($_POST['cls']);
                        $batch=isset($_POST['batch']);
                        
                        $connet = @mysql_connect("localhost","root","sindhu") ;
                        mysql_select_db("idcard");

                        if($connet=== false){
                            die("ERROR: Could not connect. " . mysql_connect_error());
                        }


                        $sql = "INSERT INTO stud_master (hall_ticket,route_no,class,name,branch,batch,yeart,Phone_No,section) VALUES ('$roll',$board,$class,'$name','$brach','$batch',$year,$mobile,'$sec')";

                        $result = mysql_query($sql);

                        if(mysql_query( $connet,$result)){
                            echo "Records added successfully.";
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysql_error($connet);
                        }


                        ?>

                        </html>
