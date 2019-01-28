<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

/*if(isset($_POST['submit']))
{
	$idrecord=$_POST['idrecord'];
	$date=$_POST['date'];
	$lk=$_POST['lk'];
    $urinalb=$_POST['urinalb'];
    $urinsugar=$_POST['urinsugar'];
    $hb=$_POST['hb'];
    $nadi=$_POST['nadi'];
    $beratbdn=$_POST['beratbdn'];
    $tekdarah=$_POST['tekdarah'];
    $nadi=$_POST['nadi'];
    $edema=$_POST['edema'];
    $minggu=$_POST['minggu'];
    $tinggirahim=$_POST['tinggirahim'];
    $presentasi=$_POST['presentasi'];
    $jantung=$_POST['jantung'];
    $gerak=$_POST['gerak'];
    $masalah=$_POST['masalah'];
    $temujanji=$_POST['temujanji'];

$sql=mysqli_query($con,"insert into record(idrecord,date,lk,urinalb,urinsugar,hb,nadi,beratbdn,tekdarah,nadi,edema,minggu,tinggirahim,presentasi,jantung,gerak,masalah,temujanji)values ($idrecord,$date,$lk,$urinalb,$urinsugar,$hb,$nadi,$beratbdn,$tekdarah,$nadi,$edema,$minggu,$tinggirahim,$presentasi,$jantung,$gerak,$masalah,$temujanji)");
if($sql)
{
echo "<script>alert('Record user added Successfully');</script>";
echo "<script type='text/javascript'> document.location = 'location:insert-record.php'; </script>";

}
}*/
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

														<?php

												

                                                        if(isset($_REQUEST["submit"]))
                                                        {
	                                                        $idrecord=$_REQUEST["idrecord"];
	                                                        $date=$_REQUEST["date"];
	                                                        $lk=$_REQUEST[  "lk"];
                                                            $urinalb=$_REQUEST["urinalb"];
                                                            $urinsugar=$_REQUEST["urinsugar"];
                                                            $hb=$_REQUEST["hb"];
                                                            $beratbdn=$_REQUEST["beratbdn"];
                                                            $tekdarah=$_REQUEST["tekdarah"];
                                                            $nadi=$_REQUEST["nadi"];
                                                            $edema=$_REQUEST["edema"];
                                                            $minggu=$_REQUEST["minggu"];
                                                            $tinggirahim=$_REQUEST["tinggirahim"];
                                                            $presentasi=$_REQUEST["presentasi"];
                                                            $jantung=$_REQUEST["jantung"];
                                                            $gerak=$_REQUEST["gerak"];
                                                            $masalah=$_REQUEST["masalah"];
                                                            $temujanji=$_REQUEST["temujanji"];

                                                            $add=mysqli_query($con,"INSERT into health  (idrecord,date,lk,urinalb,urinsugar,hb,nadi,beratbdn,tekdarah,nadi,edema,minggu,tinggirahim,presentasi,jantung,gerak,masalah,temujanji) VALUES ('$idrecord','$date','$lk','$urinalb','$urinsugar','$hb','$nadi','$beratbdn','$tekdarah','$nadi','$edema','$minggu','$tinggirahim','$presentasi','$jantung','$gerak','$masalah','$temujanji')");
                                                           if($add){
    	                                                    ?>
    	                                                    <script type="text/javascript">
                                                            alert('Add data Successfull');
                                                            document.location.href="view-record";
    	                                                    </script>
    	                                                    <?php
                                                            } else {
    	                                                    echo "Error";
                                                            }
                                                            }

												
				                                            ?>
														
                                                       <div class="form-group">
                                                          <label for="idrecord">idrecord:</label>
                                                          <input type="number" id="idrecord" name="idrecord" class="form" >

                                                        
                                                       </div>

                                                       <div class="form-group">
                                                          <label for="date">Tarikh:</label>
                                                          <input type="date" id="date" name="date" class="form" >

                                                        
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

                                                            <label for="lk">
																LK/LR :
															</label>
	                                                        <input type="number" name="lk" maxlength="35" size="35" class="form-inline" >

                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                                                            <label for="urinalb">
																urinalb:
															</label>
	                                                        <input type="text" name="urinalb" maxlength="35" size="35" class="form-inline" >

                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															<label for="urinsugar">
																 urinsugar :
															</label>
	                                                        <input type="text" name="urinsugar" maxlength="10" size="10" class="form-inline" " >
														</div>			



                                                        <div class="form-group">

	                                                    <h4> PEMERIKSAAN </h4>
															<label for="hb">
																hb :
															</label>
	                                                        <input type="number" name="hb"  maxlength="3" size="3" class="form-inline"  >

	                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															
                                                            <label for="beratbdn">
																beratbdn
															</label>
	                                                        <input type="text" name="beratbdn" maxlength="10" size="10" class="form-inline">
														
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


															<label for="tekdarah">
																 tekdarah :
															</label>
	                                                        <input type="text" name="tekdarah" maxlength="10" size="10" class="form-inline">
																
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
															<label for="nadi">
																nadi :
															</label>
	                                                        <input type="text" name="nadi" maxlength="10" size="10" class="form-inline" required="required"  >
														</div>	


                                                        <div class="form-group">
	                                                    
															<label for="edema">
																Edema :
															</label>
	                                                        <input type="text" name="edema" maxlength="10" size="10" class="form-inline" required="required">

                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  														
															<label for="minggu">
																 minggu
															</label>
		                                                    <input type="text" name="minggu" maxlength="20" size="20" class="form-inline" required="required">
														</div>

                                                        <div class="form-group">
	                                                   
	
															<label for="tinggirahim">
																tinggirahim :
															</label>
		                                                    <input type="text" name="tinggirahim" maxlength="50" size="50" class="form-horizontal" required="required" >
	                                                    </div>

                                                        <div class="form-group">
								                            <label  for="presentasi">
																 Presentasi :              
															</label>
															 
		                                                    <input type="text" name="presentasi"maxlength="50" size="50" class="form-horizontal" required="required" >
														
													    </div>

                                                        <div class="form-group">
															<label for="jantung">
																 jantung :
		
														    </label>

		                                                    <input type="text" name="jantung" class="form-horizontal" maxlength="50" size="50" required="required" >
														</div>

														 <div class="form-group">
															<label for="gerak">
																 gerak :
		
														    </label>

		                                                    <input type="text" name="gerak" class="form-horizontal" maxlength="50" size="50" required="required" >
														</div>

														<div class="form-group">
															<label for="masalah">
																 masalah:
		
														    </label>

		                                                    <input type="text" name="masalah" class="form-horizontal" maxlength="50" size="50" required="required" >
														</div>

                                                        <!--<div class="form-group">
															<label for ="masalah">
		                                                         MASALAH DAN PENGENDALIAN : 
														    </label>

		<!--<input type="textarea" name="problem" class="form-horizontal" maxlength="100" size="100" required="required"  value="<?php echo htmlentities($data['problem']);?>" >

		                                                    <textarea rows="4" cols="50" name="masalah" class="form-control" form="usrform"value="<?php echo htmlentities($data['masalah']);?>" >
                                                                Enter text here...</textarea>
														</div>-->

														<div class="form-group">
															<label for="temujanji">
																 temujanji :
		
														    </label>

		                                                    <input type="text" name="temujanji" class="form-horizontal" maxlength="50" size="50" required="required" >
														</div>
					
														
														
														<input type="submit" name="submit">
															
													

														<a href="view-record1.php" class="btn btn-info" role="button">View Record</a>
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
