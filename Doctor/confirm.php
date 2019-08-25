<?php
include '../connect.php';
$ino=$_REQUEST['email'];
$ino1=$_REQUEST['doc'];
						$sql_up_med="UPDATE `appointment` SET `status`='confirm', `checks`= 1 where 
						`email` LIKE '%$ino%' ";
						$res_up_med =  mysqli_query($a,$sql_up_med);
						
                        


						$sql1=mysqli_query($a,"SELECT * from `login` where user_id LIKE '%$ino1%'");
                       $row=mysqli_fetch_assoc($sql1);
                       $type=$row['user_id'];

						if($res_up_med)//in
						{
							 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Patient Informed Successfully!')
    window.location.href='index.php?username=" .$row['user_id'] ."';
    </SCRIPT>");
						}

						?>