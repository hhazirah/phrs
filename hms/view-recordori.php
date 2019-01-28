<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User| View Record</title>
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
									<h1 class="mainTitle">User | View Record</h1>
		                        </div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>View Record
										</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
                       <!-- start: BASIC EXAMPLE -->
                     
            <div class="container-fluid co  ntainer-fullw bg-white">
            

                  <div class="row">

                  <div class="col-md-12">
                  <h5 class="over-title margin-bottom-15">Patients <span class="text-bold">Health Records</span></h5>

               
                  <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
                  
                <?php echo htmlentities($_SESSION['msg']="");?></p> 
                <div style="overflow-y:scroll;">
                  <table class="table table-bordered" id="sample-table-1" fixed-header>
                                                       <thead>
                                                        <tr>
                                                            <th rowspan='2'>NO</th>
                                                            <th rowspan='2'>Date</th>
                                                            <th rowspan='2'>LK/LR</th>
                                                            <th colspan='3'>Ujian Makmal</th>
                                                            <th colspan='4'>Pemeriksaan</th>
                                                            <th colspan='2'>Kandungan</th>
                                                            <th colspan='3'>Janin</th>
                                                            <th rowspan='5'>Masalah dan pengendalian</th>
                                                            
                                                        </tr>
                                                        <tr>
<!--                                                             <th>NO</th>
                                                            <th>Date</th>
                                                            <th>LK/LR</th> -->
                                                            <th>Urin Alb</th>
                                                            <th>urin sugar</th>
                                                            <th>Hb</th>
                                                            <th>Berat Badan(kg)</th>
                                                            <th>Tekanan Darah</th>
                                                            <th>Nadi</th>
                                                            <th>Edema</th>
                                                            <th>Tempoh Hamil (minggu)</th>
                                                            <th>Tinggi Rahim(sm)</th>
                                                            <th>Kedudukan Presentasi</th>
                                                            <th>Jantung</th>
                                                            <th>Gerak</th>
                                                        </tr>                   
                                                      </thead>
                    <tbody>
<?php
$sql=mysqli_query($con,"select * from health where id='".$_SESSION['id']."' ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                      <tr>
                        <td><?php echo $cnt;?>.</td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['lk'];?></td>
                        <td><?php echo $row['urinalb'];?></td>
                        <td><?php echo $row['urinsugar'];?></td>
                        <td><?php echo $row['hb'];?></td>
                        <td><?php echo $row['beratbdn'];?></td>
                        <td><?php echo $row['tekdarah'];?></td>
                        <td><?php echo $row['nadi'];?></td>
                        <td><?php echo $row['edema'];?></td>
                        <td><?php echo $row['minggu'];?></td>
                        <td><?php echo $row['tinggirahim'];?></td>
                        <td><?php echo $row['presentasi'];?></td>
                        <td><?php echo $row['jantung'];?></td>
                        <td><?php echo $row['gerak'];?></td>
                        <td><?php echo $row['masalah'];?></td>
                      </tr>
                      
                      <?php 
$cnt=$cnt+1;
                       }?>
                      
                      
                    </tbody>
                     

                     <th scope="row" colspan="2">Download Result</th>           
                                                            <td><b><a href="download-view-record.php">Download </a> </b></td>
                                                      
                        
                  </table>
  
                 
              
                </div>
                </div>

              
              </div>
          </div>



<!-- test table 2 -->

                                                             
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
	</div>
  </div>
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
