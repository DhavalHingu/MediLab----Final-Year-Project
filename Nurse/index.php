

<!DOCTYPE HTML>
<html>
<head>
<title>Medilab</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- for table -->
<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}
		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}
		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}
		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}
		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}
		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}
		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">

	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span><img src="images/logo.png"></span> </a>
          </div>
          <br> <Br> 
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                

                <?php
                                            include '../connect.php';
                                            $ino=$_REQUEST['username'];
       $query=mysqli_query($a,"SELECT * from `register` where `email` LIKE '%$ino%'");
$row=mysqli_fetch_assoc($query);
                echo "<a href='index.php?username=".$row['email']."'>
                <i class='fa fa-dashboard'></i> <span>Dashboard</span>
                </a>";
              
?>
              


              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>View</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  
                  <?php
                                            include '../connect.php';
                                            $ino=$_REQUEST['username'];
       $query=mysqli_query($a,"SELECT * from `register` where `email` LIKE '%$ino%'");
$row=mysqli_fetch_assoc($query);
                  
                  echo "<li><a href='diagno.php?username=".$row['email']."'><i class='fa fa-angle-right'></i> Paient's Diagnosis</a></li>";
                  



                  echo "<li><a href='pd.php?username=".$row['email']."'><i class='fa fa-angle-right'></i> Patient's Details</a></li>";

                  ?>
                </ul>
              </li>
              <li class="treeview">
                <a href="charts.php">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <!--<span class="label label-primary pull-right">new</span>-->
                </a>
              </li>
              <li>
                <a href="Widgets.php">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <!--<small class="label pull-right label-info">08</small>-->
                </a>
              </li>
              
            
                 </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--toggle button start-->
			<!--	<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
						
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Nurse Name</p>
										<span>
										<?php
                                            include '../connect.php';
                                            $ino=$_REQUEST['username'];
       $query=mysqli_query($a,"SELECT * from `register` where `email` LIKE '%$ino%'");
$row=mysqli_fetch_assoc($query);
$type=$row['id_name'];
echo $type;

											?>



										</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Change Password</a> </li> 
								 
								<li> <a href="../login.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>

		<!-- //header-ends -->
		<div id="page-wrapper">

			<div class="main-page">
				<div class="forms">
				
					<div class="row">
						

 
							<div class="form-title">
								<h4>Patient Detail:</h4>
							</div>
							<div class="form-body">
								<form action="reg_process.php" method="POST">
									<div class="form-group">
										<input type="text" class="form-control" id="inputName" placeholder="Patient Name" required name="p_name" >
									</div>
									<div class="form-group has-feedback">
										<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required name="email">
										<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										
									</div>
									<div class="form-group" >
									<input type="tel" class="form-control" id="inputName" placeholder="Mobile Number" required name="mobile" >
									</div>
									
									<div class="form-group" >
										DOB <input type="date"  id="inputName" placeholder="BirthDate" required name="b_date" >
									</div>
									
									<div class="form-group" >
										<input type="text"  id="inputName" placeholder="Blood Group" required name="bg" >
									</div>
									
									<div class="form-group" >
										 
                                         <select name="ad" id="inputName">
                                         	<option>Meet a Doctor</option>
                                           <?php
               include('../connect.php');
             $sel=mysqli_query($a,"SELECT `id_name` FROM `register`  WHERE `type`='doctor' ") or die(mysqli_error());
                        
            while($row=mysqli_fetch_array($sel)){?>
            <option value="<?php echo $row['id_name'];?>"><?php echo $row['id_name'];?></option>
                    
        <?php } ?> 
                                        
                                         </select>

										
									</div>
								
									<div class="form-group">
										<div class="radio">
											<label>
											  <input type="radio" name="gender" value="male" required>
											  Male
											</label>
										</div>
										<div class="radio">
											<label>
											<input type="radio" name="gender" value="female" required>
											Female
											</label>
										</div>
									</div>
                                      <input type="submit" value="Make An Appointment" class="btn btn-success" id="btn-login">
                                     <!-- <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                     -->
</form>
                                    </div>
											<div class="help-block with-errors"></div>
										</div>
						

						</div>	
						</div>
						<!--main content-->
						
						
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		
<br> <br> 						
		<?php
include'footer.html';
		?>