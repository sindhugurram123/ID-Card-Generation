
<?
php ini_set( "display_errors", 0); ?>


<?php 


$db = new mysqli("localhost","root","sindhu","idcard") ;           



$roll=mysqli_real_escape_string($db,$_POST['roll']);
$name= mysqli_real_escape_string($db,$_POST['name']);
$branch=mysqli_real_escape_string($db,$_POST['branch']);
$section=mysqli_real_escape_string($db,$_POST['section']);
$year=mysqli_real_escape_string($db,$_POST['year']);
$class=mysqli_real_escape_string($db,$_POST['cls']);
$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
$batch=mysqli_real_escape_string($db,$_POST['batch']);

echo $roll;
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


         ?>