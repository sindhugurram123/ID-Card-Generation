
/*
<?
php ini_set( "display_errors", 0); ?>


<?php 
//if(isset($_POST['Submit']))
//{

$db = new mysqli("localhost","root","sindhu","idcard") ;           

$roll=mysqli_real_escape_string($db,$_POST['roll']);

    //$name =mysqli_real_escape_string($db,$_POST['name']);
   // $brach=mysqli_real_escape_string($db,$_POST['bach']);

  /*  $sec=mysqli_real_escape_string($db,$_POST['sec']);
    $year=mysqli_real_escape_string($db,$_POST['year']);
    $tot=mysqli_real_escape_string($db,$_POST['tot']);
    $paid=mysqli_real_escape_string($db,$_POST['paid']);
    $due=mysqli_real_escape_string($db,$_POST['due']);
    $mobile=mysqli_real_escape_string($db,$_POST['mobile']);
    $board=mysqli_real_escape_string($db,$_POST['board']);
    $opt=mysqli_real_escape_string($db,$_POST['cars']);
    $class =mysqli_real_escape_string($db,$_POST['cls']);
    $batch=mysqli_real_escape_string($db,$_POST['batch']);
    $cat=mysqli_real_escape_string($db,$_POST['cars']);

*/
   /* if($db == false){
        die("ERROR: Could not ggg connect. " . mysqli_connect_error());
    }


    $ans=mysqli_fetch_field($query);
    if($result1 = mysqli_query($db, $query))
    {
      if(mysqli_num_rows($result1) > 0)
      {

        echo $ans['hall_ticket'];
        echo $ans['name'];

    }
    else {
        echo "no Records";
    }
}
else{
    echo "false";}



   // $sql = "INSERT INTO stud_master (hall_ticket,Board_pts,class,name,branch,batch,yeart,Phone_No,section,route_no) VALUES ('$roll','$board','$class','$name','$brach','$batch',$year,$mobile,'$sec',1)";

   // $result = mysqli_query($db,$sql);

    /*  if(mysqli_query( $db,$result)){
                    echo "Records added successfully.";
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                        }
                     
                        if( $result ) 
                            echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";
                        else
                            echo "<script type='text/javascript'>alert('Failed! Try Again !')</script>";
                    
*/                 

                            //$sql="select  hall_ticket,name,branch,section,yeart,Phone_No from stud_master where hall_ticket=$roll;";
                            //$result=mysqli_query($db,$sql);
                           // while ($row=mysqli_fetch_assoc($result)) 
                            //{
                           // echo $row["hall_ticket"];
                           // echo $row["name"];
                           // echo $row["branch"];
                           // }
//
  //}                     
                            ?>


                            <html>
                            <head><title>Upload Page</title>

                                <link rel="stylesheet" type="text/css" href="menu.css">
                                <link rel="stylesheet" type="text/css" href="first.css">
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

                                       <?php 
                                        //while ($row=mysqli_fetch_assoc($result)) {   ?>
                                        
                                        <td> Roll No.: </td> <td> <input type="text"  class="form-control" name="roll" value="<?php echo $row["hall_ticket"]; ?>"></td>
                                        <td><input class="btn btn-primary" type="submit" name="Submit" value="Submit"></td>
                                        <td style="width:2em"><input class="btn btn-primary" type="reset" value="Reset"></td>  


                                    </tr>

                                    <tr>

                                        <td> Name: </td>

                                        <td> 
                                            <input type="text"  class="form-control" name="name"   >

                                        </td>

                                        <td> Branch: </td> <td>

                                          <input type="text" name="" value="<?php echo $row["branch"]; ?>">

                                      </td></tr>
                                      <tr> 
                                        <td> Section: </td> <td> <input type="text" class="form-control" name="sec" value="<?php echo $row["section"]; ?>"></td></tr>
                                        <tr> <td> Year: </td> <td>
                                            <input type="number" name="" value="<?php echo $row["yeart"]; ?>"></td>
                                            <?php// } 

                                            ?>

                                            <td> Boading Point : </td> <td>
                                                <select name="board"> 
                                                    <option>Uppal</option>
                                                    <option>Dilsuknagar</option>
                                                    <option>ECIL</option>
                                                    <option>Miyapur</option>
                                                    <option>Ramanthapur</option>
                                                    <option>Tarnaka</option>

                                                </select>



                                             </td></tr> <tr> <td> Bus No: </td> <td> 
                                                <input type="number" value=" value="" name="">
                                               

                                            </td>
                                            <td> Total Amt: </td> <td> <input type="number" class="form-control" name="tot"></td></tr>
                                            <tr> <td> Amt Paid: </td> <td> <input type="number" class="form-control" name="paid"></td>
                                                <td> Amt Due: </td> <td> <input type="number" class="form-control" name="due"></td></tr>
                                                <tr> <td> Mobile NO.: </td> <td> <input type="number" class="form-control" name="mobile" ></td>
                                                    <td>Batch:</td><td><input type="text" name="batch" class="form-control"></td>
                                                </tr>  <tr>
                                                    <br><br>

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