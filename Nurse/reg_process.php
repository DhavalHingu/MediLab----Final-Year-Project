<?php
include '../connect.php';
$ab=$_POST['p_name'];
$bb=$_POST['email'];
 $b=$_POST['mobile'];
  $c=$_POST['b_date'];
  $d=$_POST['bg'];
  $e=$_POST['ad'];
  $f=$_POST['gender'];

     $sql=mysqli_query($a,"INSERT INTO appointment(`p_name`,`email`,`mobile`,`b_date`,`bg`,`doc`,`gender`) values('$ab','$bb','$b','$c','$d','$e','$f')");

    
  if($sql)
 	{

      
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Appointment Taken Successfully!')
    window.location.href='index.php';
    </SCRIPT>");
      // mysql_error();
 	
 
 		 }
 



?>