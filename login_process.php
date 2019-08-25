<?php
error_reporting(0);
include 'connect.php';

$aa=$_POST['username'];
$bb=$_POST['password'];
$query=mysqli_query($a,"SELECT * from `login` where user_id='$aa' AND password='$bb' ");
$row=mysqli_fetch_assoc($query);
$type=$row['type'];
//echo $type;
  $count=mysqli_num_rows($query);
    if($count == 1)
    {
    	
        
         if($type == '0')
         {
         	header("Location:Admin/index.php?username=" .$row['user_id'] ." ");
         	die;   
         }
         


         elseif($type == '1')
         {
         	header("Location:Doctor/index.php?username=" .$row['user_id'] ."");
         	die;   
         }
         elseif($type == '2')
         {
         	header("Location:Nurse/index.php?username=" .$row['user_id'] ."");
         	die;   
         }
         elseif($type=='3')
         {
         	 header("Location:/Patient/index.php");
	         die;
         	
         }
        
    }       

else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Wrong UserID Or Password!')
    window.location.href='login.php';
    </SCRIPT>");
         }


?>