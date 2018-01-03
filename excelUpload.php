<?php

require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('db_config.php');

if(isset($_POST['Submit'])){

  $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
  if(in_array($_FILES["file"]["type"],$mimes)){

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);

    $Reader = new SpreadsheetReader($uploadFilePath);

    $totalSheet = count($Reader->sheets());

    echo "You have total ".$totalSheet." sheets".

    $html="<table border='1'>";
    $html.="<tr><th>hall ticket</th><th>Name</th>
    <th>Branch</th><th>year</th><th>section</th>
    <th>ROute No.</th><th>Class</th><th>branch</th><th>Phone no.</th><th>Bus No</th>
    </tr>";

    /* For Loop for all sheets */
    for($i=0;$i<$totalSheet;$i++){

      $Reader->ChangeSheet($i);
      foreach ($Reader as $Row)
      {
        $html.="<tr>";
        /* Check If sheet not emprt */
        $roll   = isset($Row[0]) ? $Row[0] : '';
        $name   = isset($Row[1]) ? $Row[1] : '';
        $branch = isset($Row[2]) ? $Row[2] : '';
        $yeart  = isset($Row[3]) ? $Row[3] : '';
        $section= isset($Row[4]) ? $Row[4] : '';
        $route  = isset($Row[5]) ? $Row[5] : '';
        $class  = isset($Row[6]) ? $Row[6] : '';
        $batch  = isset($Row[7]) ? $Row[7] : '';
        $phone  = isset($Row[8]) ? $Row[8] : '';
        $board  = isset($Row[9]) ? $Row[9] : '';

        $html.="<td>".$roll."</td>";
        $html.="<td>".$name."</td>";
        $html.="<td>".$branch."</td>";
        $html.="<td>".$yeart."</td>";
        $html.="<td>".$section."</td>";
        $html.="<td>".$route."</td>";
        $html.="<td>".$class."</td>";
        $html.="<td>".$batch."</td>";
        $html.="<td>".$phone."</td>";
        $html.="<td>".$board."</td>";

        $html.="</tr>";

        $query = "insert into stud_master(hall_ticket,name,branch,section,route_no,class,batch,Phone_No,Board_pts) values   ('".$roll."','".$name."','".$branch."','".$section."','".$route."','".$class."','".$batch."','".$phone."','".$board."')";

        $mysqli->query($query);
      }

    }

    $html.="</table>";
    echo $html;
    echo "<br />Data Inserted in dababase";

  }else { 
   die("<br/>Sorry, File type is not allowed. Only Excel file."); 
 }

}

?>