<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
/* if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$ic=$_POST['ic'];
    $race=$_POST['race'];
    $address=$_POST['address'];
    $hpnumber=$_POST['hpnumber'];
    $hnumber=$_POST['hnumber'];
    $pregnancy=$_POST['pregnancy'];
    $children=$_POST['children'];
    $job=$_POST['job'];
    $jobadd=$_POST['jobadd'];
    $jobtel=$_POST['jobtel'];
    

//$sql=mysqli_query($con,"Update users set fullName='$fname',ic='$ic',race='$race',address='$address',hpnumber='$hpnumber',hnumber='$hnumber',pregnancy='$pregnancy',children='$children',job='$job',jobadd='$jobadd',jobtel='$jobtel' where id='".$_SESSION['id']."'");
//if($sql)
{
$msg="Your Profile updated Successfully";


}

}*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Edit Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | MY Profile</h1>
																	</div>
								<ol class="breadcrumb">
									<li> 
										<span>User </span>
									</li>
									<li class="active">
										<span>MY Profile</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->

						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
<h5 style="color: green; font-size:18px; ">
<?php if($msg) { echo htmlentities($msg);}?> </h5>
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">MY Profile</h5>
												</div>
												<div class="panel-body">
									<?php 
$sql=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>
													<form role="form" name="edit" method="post">
													



<div class="form-group">

	

                    
<label for="fname">
																 User Name : <?php echo htmlentities($data['fullName']);?>
															</label> </div>


<div class="form-group">
															<label for="ic">
																 IC Number : <?php echo htmlentities($data['ic']);?>
															</label>
														</div>


<div class="form-group">
															<label for="race">
																 Race : <?php echo htmlentities($data['race']);?>
															</label>
														</div>	



<div class="form-group">
															<label for="address">
																 Address : <?php echo htmlentities($data['address']);?>
															</label>
														</div>


<div class="form-group">
															<label for="hpnumber">
																 HP Number : <?php echo htmlentities($data['hpnumber']);?>
															</label>
														</div>								

<div class="form-group">
															<label for="hnumber">
																 Home Number : <?php echo htmlentities($data['hnumber']);?>"
															</label>
														</div>	



<div class="form-group">
															<label for="pregnancy">
																 No.of Previous Pregnancy : <?php echo htmlentities($data['pregnancy']);?>
															</label>
														</div>
	

<div class="form-group">
															<label for="children">
																 No.of children : <?php echo htmlentities($data['children']);?>
															</label>
														</div>

<div class="form-group">
															<label for="job">
																 Job : <?php echo htmlentities($data['job']);?>
															</label>
														</div>

<div class="form-group">
															<label for="jobadd">
																 Job Address : <?php echo htmlentities($data['jobadd']);?>
															</label>
														</div>	

<div class="form-group">
															<label for="jobtel">
																 Job (P) : <?php echo htmlentities($data['jobtel']);?>
															</label>
														</div>

<div class="form-group">
									<label for="fess">
																 User Email : <?php echo htmlentities($data['email']);?>
															</label>
														</div>



														<a href="edit-profile.php" class="btn btn-info" role="button">Edit Profile</a>

														
													</form>
													<?php } ?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
