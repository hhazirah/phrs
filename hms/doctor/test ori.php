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

       <style>
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            th, td {
            padding: 5px;
            text-align: left;
            }
        </style>

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
                                                       
                                                       <div class="container">

                                                        <div class="row">
                                                            <div class="panel panel-warning">
                                                                <div class="panel-heading"><center><h3>HEALTH RECORD</h3></center>

                                                                                                                     
                                                            <div class="panel-body">
                                                                <div style="width: 500px; margin: 70 px auto;">
                                                                <center>

                                                                    <form class="form-horizontal" name="insertrecord" method="post">

                                                                    <!--<label class="control-label col-sm-3">id record: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" class="form-control" name="idrecord"><br/></div>-->

                                                                    <label class="control-label col-sm-3">Tarikh: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" class="form-control" name="date"><br/></div>

                                                                    <label class="control-label col-sm-3">LK: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="lk"><br/></div>

                                                                    <label class="control-label col-sm-3">Urinalb: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="urinalb"><br/></div>

                                                                    <label class="control-label col-sm-3">Urinsugar: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="urinsugar"><br/></div>

                                                                    <label class="control-label col-sm-3">hb: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="hb"><br/></div>

                                                                    <label class="control-label col-sm-3">beratbdn: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="beratbdn"><br/></div>

                                                                    <label class="control-label col-sm-3">Tekdarah: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="tekdarah"><br/></div>

                                                            

                                                                    <label class="control-label col-sm-3">Nadi: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="nadi"><br/></div>

                                                                    <label class="control-label col-sm-3">Edema: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="edema"><br/></div>

                                                                     <label class="control-label col-sm-3">Minggu: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="minggu"><br/></div>

                                                                    <label class="control-label col-sm-3">Tinggi rahim: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="tinggirahim"><br/></div>

                                                                    <label class="control-label col-sm-3">Presentasi: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="presentasi"><br/></div>

                                                                    <label class="control-label col-sm-3">Jantung: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="jantung"><br/></div>

                                                                    <label class="control-label col-sm-3">Gerak: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="gerak"><br/></div>

                                                                    <label class="control-label col-sm-3">Masalah: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" name="masalah"><br/></div>
          

                                                                    <input type="submit" name="submit2" value="submit">
                                                                </form>
                                                                 </center></div>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <?php


                                                        $email= $_SESSION["email"];
                                                        $query1=mysqli_query($con,"SELECT * FROM users WHERE email ='$email'");
                                                        $row1=mysqli_fetch_array($query1);
                                                        $id= $row1["id"];
                                                       // $id = 1;

                                                       
                                                      
//include_once("/include/config.php");
                                                

                                                        if(isset($_POST['submit2']))
                                                        {
                                                            //$idrecord=$_POST["idrecord"];
                                                            $date=$_POST["date"];
                                                            $lk=$_POST["lk"];
                                                            $urinalb=$_POST["urinalb"];
                                                            $urinsugar=$_POST["urinsugar"];
                                                            $hb=$_POST["hb"];
                                                            $beratbdn=$_POST["beratbdn"];
                                                            $tekdarah=$_POST["tekdarah"];
                                                            $nadi=$_POST["nadi"];
                                                            $edema=$_POST["edema"];
                                                            $minggu=$_POST["minggu"];
                                                            $tinggirahim=$_POST["tinggirahim"];
                                                            $presentasi=$_POST["presentasi"];
                                                            $jantung=$_POST["jantung"];
                                                            $gerak=$_POST["gerak"];
                                                            $masalah=$_POST["masalah"];
                                                           

                                                            $result = "INSERT INTO health  (date,lk,urinalb,urinsugar,hb,beratbdn,tekdarah,nadi,edema,minggu,tinggirahim,presentasi,jantung,gerak,masalah, id) VALUES ('$date','$lk','$urinalb','$urinsugar','$hb','$beratbdn','$tekdarah','$nadi','$edema','$minggu','$tinggirahim','$presentasi','$jantung','$gerak','$masalah', '$id')";

                                                            $add = mysqli_query($con, $result) ;


                                                           if($add){
                                                            ?>
                                                            <script type="text/javascript">
                                                            alert('Add data Successfull');
                                                            document.location.href="test.php";
                                                            </script>
                                                            <?php
                                                            } else {
                                                                ?>
                                                           <script type="text/javascript">
                                                            alert('Add data Unsuccessfull');
                                                            document.location.href="test.php";
                                                            </script>
                                                            <?php
                                                            }
                                                            }

                                                
                                                            ?>

<!--                                                      <?php


                                                        $email= $_SESSION["email"];
                                                        $query1=mysqli_query($con,"SELECT * FROM users WHERE email ='$email'");
                                                        $row1=mysqli_fetch_array($query1);
                                                        $id= $row1["id"];

                                                       
                                                      

                                                

                                                        if(isset($_REQUEST["submit"]))
                                                        {
                                                            $idrecord=$_REQUEST["idrecord"];
                                                            $lk=$_REQUEST["lk"];
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
                                                           

                                                            $add=mysqli_query($con,"INSERT INTO health  (idrecord, lk,urinalb,urinsugar,hb,nadi,beratbdn,tekdarah,nadi,edema,minggu,tinggirahim,presentasi,jantung,gerak,masalah, id) VALUES ('$idrecord','$lk','$urinalb','$urinsugar','$hb','$nadi','$beratbdn','$tekdarah','$nadi','$edema','$minggu','$tinggirahim','$presentasi','$jantung','$gerak','$masalah', '$id')");
                                                           if($add){
                                                            ?>
                                                            <script type="text/javascript">
                                                            alert('Add data Successfull');
                                                            document.location.href="test.php";
                                                            </script>
                                                            <?php
                                                            } else {
                                                                ?>
                                                           <script type="text/javascript">
                                                            alert('Add data Unsuccessfull');
                                                            document.location.href="test.php";
                                                            </script>
                                                            <?php
                                                            }
                                                            }

                                                
                                                            ?> -->


                                                        <!--<h2>Health Record:</h2>

                                                        <table style="width:100%">
                                                        <tr>
                                                        <th>idrecord:</th>
                                                        <td>date: </td>
                                                        </tr>
                                                        <tr> 
                                                        <th>lk:</th>
                                                        <td>555 77 854</td>
                                                        </tr>
                                                        <tr>
                                                        <th>urinalb:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>urinsugar:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>hb:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>beratbdn:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>tekdarah:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>nadi:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>edema</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>minggu:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>tinggirahim:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>tpresentasi:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>jantung:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>gerak:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>masalah:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        <tr>
                                                        <th>temujanji:</th>
                                                        <td>555 77 855</td>
                                                        </tr>
                                                        </table>

                                                        
                    
                                                        
                                                        
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
                        </div>-->
                        <!-- end: BASIC EXAMPLE -->
            
                    
                    
                        
                        
                    
                        <!-- end: SELECT BOXES -->
                        
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
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
