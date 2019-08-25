<?php
  include('../connect.php');
  
 $aa=$_POST['id_name'];
  $b=$_POST['email'];
  //$c=$_POST['lname'];
  $d=$_POST['pass'];
  $e=$_POST['confirm'];
  $f=$_POST['gender'];
  
 $sql=mysqli_query($a,"INSERT INTO register(`id_name`,`email`,`pass`,`confirm`,`type`) values('$aa','$b','$d','$e','$f')");

    
  if($sql)
 	{

      
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registered Successfully!')
    window.location.href='index.php';
    </SCRIPT>");
      // mysql_error();
 	
 
 		 }

 if($f=='doctor'){
         $sql1=mysqli_query($a,"INSERT INTO login(`user_id`,`password`,`type`) values('$b','$d',1)");
       }       
    

    else{
         $sql2=mysqli_query($a,"INSERT INTO login(`user_id`,`password`,`type`) values('$b','$d',2)");
       }    


?>