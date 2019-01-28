<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
	$photo=$_FILES["photo"]["name"];
	
	$fname=$_POST['fname'];
	/*$image=$_FILES['image']['name'];*/
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
    /*$target = "img/".basename($image);*/
move_uploaded_file($_FILES["photo"]["tmp_name"],"photo/".$_FILES["photo"]["name"]);
$sql=mysqli_query($con,"Update users set photo='$photo',fullName='$fname',ic='$ic',race='$race',address='$address',hpnumber='$hpnumber',hnumber='$hnumber',pregnancy='$pregnancy',children='$children',job='$job',jobadd='$jobadd',jobtel='$jobtel' where id='".$_SESSION['id']."'");



if($sql)
{
$msg="Your Profile updated Successfully";


}

}

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
									<h1 class="mainTitle">User | Edit Profile</h1>
																	</div>
								<ol class="breadcrumb">
									<li> 
										<span>User </span>
									</li>
									<li class="active">
										<span>Edit Profile</span>
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
													<h5 class="panel-title">Edit Profile</h5>
												</div>
												<div class="panel-body">
									<?php 
$sql=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>


													
													<form role="form" name="edit" method="post">
													
													<!--<div class="form-group">

													<div class="image-upload">
    <label for="img">
          <?php	echo "<img src='uploads/$n_img' class=\"avatar border-gray\" alt=\"...\">" ?>
    </label>

	 <a href="uploadpic.php" >Change Profile Picture</a>


</div>
</div>-->

<div class="form-group">
    <label for="photo">Student Photo  </label>
   <?php if($row['photo']==""){ ?>
   <img src="photo/noimage.png" width="200" height="200"><?php } else {?>
   <img src="photo/<?php echo htmlentities($row['photo']);?>" width="200" height="200">
   <?php } ?>
  </div>
<div class="form-group">
    <label for="photo">Upload New Photo  </label>
    <input type="file" class="form-control" id="photo" name="photo"  value="<?php echo htmlentities($row['photo']);?>" />
  </div>


  <?php } ?>

<div class="form-group">
															<label for="fname">
																 User Name
															</label>
	<input type="text" name="fname" class="form-control" value="<?php echo htmlentities($data['fullName']);?>" >
														</div>

<!--<div class="form-group">   
                    Image <span style="color:red">* <input type="file" name="image" required>  
                     <br />  

                  <?php  
                $query = "SELECT * FROM users where id='$image'";  
              
                ?>   


</div>-->

<div class="form-group">
															<label for="ic">
																 IC Number
															</label>
	<input type="text" name="ic" class="form-control" value="<?php echo htmlentities($data['ic']);?>" >
														</div>


<div class="form-group">
															<label for="race">
																 Race
															</label>
	<input type="text" name="race" class="form-control" value="<?php echo htmlentities($data['race']);?>" >
														</div>	



<div class="form-group">
															<label for="address">
																 Address
															</label>
					<textarea name="address" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
														</div>


<div class="form-group">
															<label for="hpnumber">
																 HP Number
															</label>
	<input type="text" name="hpnumber" class="form-control" value="<?php echo htmlentities($data['hpnumber']);?>" >
														</div>								

<div class="form-group">
															<label for="hnumber">
																 Home Number
															</label>
	<input type="text" name="hnumber" class="form-control" value="<?php echo htmlentities($data['hnumber']);?>" >
														</div>	



<div class="form-group">
															<label for="pregnancy">
																 No.of Previous Pregnancy
															</label>
		<input type="text" name="pregnancy" class="form-control" required="required"  value="<?php echo htmlentities($data['pregnancy']);?>" >
														</div>
	

<div class="form-group">
															<label for="children">
																 No.of children
															</label>
		<input type="text" name="children" class="form-control" required="required"  value="<?php echo htmlentities($data['children']);?>" >
														</div>

<div class="form-group">
															<label for="job">
																 Job
															</label>
		<input type="text" name="job" class="form-control" required="required"  value="<?php echo htmlentities($data['job']);?>" >
														</div>

<div class="form-group">
															<label for="jobadd">
																 Job Address
															</label>
		<input type="text" name="jobadd" class="form-control" required="required"  value="<?php echo htmlentities($data['jobadd']);?>" >
														</div>	

<div class="form-group">
															<label for="jobtel">
																 Job (P)
															</label>
		<input type="text" name="jobtel" class="form-control" required="required"  value="<?php echo htmlentities($data['jobtel']);?>" >
														</div>

<div class="form-group">
									<label for="fess">
																 User Email
															</label>
					<input type="email" name="uemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['email']);?>">
					<a href="change-emaild.php">Update your email id</a>
														</div>



														
														
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>

														<a href="view-profile.php" class="btn btn-info" role="button">View Profile</a>

														<!--<a href="view-record.php" class="btn btn-info" role="button">View Record</a>-->
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
	     <script type="text/javascript" src="scripts/jquery.min.js"></script>
         <script type="text/javascript" src="scripts/jquery.form.js"></script>
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

		<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>

<script>

    var childWindow = "";
    var newTabUrl="edit-profile.php";

    function openNewTab(){
        childWindow = window.open(newTabUrl);
    }

    function refreshExistingTab(){
        childWindow.location.href=newTabUrl;
    }

	function goBack() {
    window.history.back()
}
</script>

<div style="width:600px">

<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
Upload your Profile Picture <input type="file" name="photoimg" id="photoimg"/>
</form>
<div id='preview'>
</div>

<button type="button" 
        onclick="window.open('', '_self', ''); window.close(); openNewTab()">Save</button>
		<button type="button" 
        onclick="goBack()">Cancel</button>
		



</div>


		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
