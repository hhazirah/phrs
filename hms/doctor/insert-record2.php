

<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
	$date=$_POST['date'];
	$id=$_POST['id'];
	$urin=$_POST['urin'];
    $urin1=$_POST['urin1'];
    $weight=$_POST['weight'];
    $bp=$_POST['bp'];
    $nadi=$_POST['nadi'];
    $edema=$_POST['edema'];
    $week=$_POST['week'];
    $rahim=$_POST['rahim'];
    $present=$_POST['present'];
    $jantung=$_POST['jantung'];
    $move=$_POST['move'];
   

$sql=mysqli_query($con,"insert into record(date,urin,urin1,weight,nadi,edema,week,rahim,present,jantung,move)values( '$date','$urin','$urin1','$weight','$nadi','$edema','$week','$rahim','$present','$jantung','$move')");
if($sql)
{
echo "<script>alert('Record user added Successfully');</script>";
echo "<script type='text/javascript'> document.location = 'location:insert-record.php'; </script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Insert Record</title>
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
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>

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
									<h1 class="mainTitle">Doctor | Insert Record</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Doctor</span>
									</li>
									<li class="active">
										<span>Insert Record
										</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title"></h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="insertrecord" method="post" onSubmit="return valid();">
														
                                                       <div class="form-group">
                                                          <label for="date">Tarikh:</label>
                                                          <input type="date" id="date" name="date" class="form" value="<?php echo htmlentities($data['date']);?>" >

                                                        
                                                       </div>

 <div class="form-group">
                                                          <label for="id">ID Patient:</label>

                                                          <input type="id" id="id" name="id" class="form" value="<?php echo htmlentities($data['id']);?>" >

                                                        
                                                       </div>

															<!--<label for="weight">
																 Weight :
															</label>
	<input type="number" name="weight" maxlength="3" size="3" class="form-inline" value="<?php echo htmlentities($data['weight']);?>" > kg
														
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



															<label for="ic">
																 IC Number :
															</label>
	<input type="text" name="ic" maxlength="12" size="12"class="form-inline" value="<?php echo htmlentities($data['ic']);?>" >-->


                                                       <div class="form-group">

	                                                   <h4> UJIAN MAKMAL</h4>
                                                            <label for="urin">
																Urin/Alb :
															</label>
	                                                        <input type="text" name="urin" maxlength="35" size="35" class="form-inline" value="<?php echo htmlentities($data['urin']);?>" >

                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                            <label for="urin1">
																Urin Sugar :
															</label>
	                                                        <input type="text" name="urin1" maxlength="35" size="35" class="form-inline" value="<?php echo htmlentities($data['urin1']);?>" >

                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															<label for="hb">
																 Hb :
															</label>
	                                                        <input type="text" name="hb" maxlength="10" size="10" class="form-inline" value="<?php echo htmlentities($data['hb']);?>" >
														</div>			



                                                        <div class="form-group">

	                                                    <h4> PEMERIKSAAN </h4>
															<label for="weight">
																Berat Badan :
															</label>
	                                                        <input type="number" name="weight"  maxlength="3" size="3" class="form-inline" value="<?php echo htmlentities($data['weight']);?>" > Kg

	                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															
                                                            <label for="bp">
																Tekanan Darah:
															</label>
	                                                        <input type="text" name="bp" maxlength="10" size="10" class="form-inline"value ="<?php echo htmlentities($data ['bp']);?>" >
														
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


															<label for="nadi">
																 Nadi :
															</label>
	                                                        <input type="text" name="nadi" maxlength="10" size="10" class="form-inline" value="<?php echo htmlentities($data['nadi']);?>" >
																
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
															<label for="edema">
																Edema :
															</label>
	                                                        <input type="text" name="edema" maxlength="10" size="10" class="form-inline" required="required" value="<?php echo htmlentities($data['edema']);?>" >
														</div>	


                                                        <div class="form-group">
	                                                    <h4> KANDUNGAN </h4>
															<label for="week">
																 Tempoh Hamil : 
															</label>
		                                                    <input type="number" name="week" maxlength="20" size="20" class="form-inline" required="required"  value="<?php echo htmlentities($data['week']);?>" > (minggu)

                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  														
															<label for="rahim">
																 Tinggi Rahim
															</label>
		                                                    <input type="text" name="rahim" maxlength="20" size="20" class="form-inline" required="required"  value="<?php echo htmlentities($data['rahim']);?>" > (sm)
														</div>

                                                        <div class="form-group">
	                                                    <h4>JANIN </h4>
	
															<label for="present">
																Kedudukan/ Presentasi :
															</label>
		                                                    <input type="text" name="present" maxlength="50" size="50" class="form-horizontal" required="required"  value="<?php echo htmlentities($data['present']);?>" >
	                                                    </div>

                                                        <div class="form-group">
								                            <label  for="heartbeat">
																 Jantung :              
															</label>
															 
		                                                    <input type="text" name="jantung"maxlength="50" size="50" class="form-horizontal" required="required"  value="<?php echo htmlentities($data['jantung']);?>" >
														
													    </div>

                                                        <div class="form-group">
															<label for="move">
																 Gerak :
		
														    </label>

		                                                    <input type="text" name="move" class="form-horizontal" maxlength="50" size="50" required="required"  value="<?php echo htmlentities($data['move']);?>" >
														</div>

                                                       
					
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Insert
														</button>

														<a href="view-record.php" class="btn btn-info" role="button">View Record</a>
													</form>
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
			<>
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
