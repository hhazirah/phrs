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

       <script>

        function getTown(val) {
    $.ajax({
    type: "POST",
    url: "get_town.php",
    data:'countryid='+val,
    success: function(data){
        $("#town-list").html(data);
    }
    });
}
        function getClinic(val) {
    $.ajax({
    type: "POST",
    url: "getclinic.php",
    data:'townid='+val,
    success: function(data){
        $("#clinic-list").html(data);
    }
    });
}
function getDoctorday(val) {
    $.ajax({
    type: "POST",
    url: "getdoctordaybooking.php",
    data:'cid='+val,
    success: function(data){
        $("#doctor-list").html(data);
    }
    });
}

function getDay(val) {
    var cidval=document.getElementById("clinic-list").value;
    var didval=document.getElementById("doctor-list").value;
    $.ajax({
    type: "POST",
    url: "getDay.php",
    data:'date='+val+'&cidval='+cidval+'&didval='+didval,
    success: function(data){
        $("#datestatus").html(data);
    }
    });
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
                                    <h1 class="mainTitle">Doctor | Appointment</h1>
                                                                    </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Doctor</span>
                                    </li>
                                    <li class="active">
                                        <span>Appointment
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
                                    
                                                    <form action="appointment.php" method="post">

        <label><b>Name:</b></label><br>
        <input type="text" placeholder="Enter Full name of patient" name="fname" required><br>

        <!--<label><b>Clinic/Hospital:</b></label><br>
        <input type="text" placeholder="Name of clinic/hospital" name="clinic" required><br>

        <label><b>Doctor:</b></label><br>
        <input type="text" placeholder="Name of doctor" name="doctor" required><br>-->

        <label style="font-size:20px" >City:</label><br>
        <select name="city" id="city-list" class="demoInputBox"  onChange="getTown(this.value);" style="width:100%;height:35px;border-radius:9px">
        <option value="">Select City</option>
        <?php
        $sql1="SELECT distinct(city) FROM clinic";
         $results=$conn->query($sql1); 
        while($rs=$results->fetch_assoc()) { 
        ?>
        <option value="<?php echo $rs["city"]; ?>"><?php echo $rs["city"]; ?></option>
        <?php
        }
        ?>
        </select>
        <br>
    
        <label style="font-size:20px" >Town:</label><br>
        <select id="town-list" name="Town" onChange="getClinic(this.value);" style="width:100%;height:35px;border-radius:9px">
        <option value="">Select Town</option>
        </select><br>
        
        <label style="font-size:20px" >Clinic:</label><br>
        <select id="clinic-list" name="Clinic" onChange="getDoctorday(this.value);" style="width:100%;height:35px;border-radius:9px">
        <option value="">Select Clinic</option>
        </select><br>
        
        <label style="font-size:20px" >Doctor:</label><br>
        <select id="doctor-list" name="Doctor" onChange="getDate(this.value);" style="width:100%;height:35px;border-radius:9px">
        <option value="">Select Doctor</option>
        </select><br>

        <label><b>Notes:</b></label><br>
        <input type="text" placeholder="Doctor's Note" name="notes" required><br>

        <label><b>Date of Visit:</b></label><br>
        <input type="date" name="dov" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required><br><br>
        <div id="datestatus"> </div>
        
        <div class="container">
            <button type="submit" style="position:center" name="submit" value="Submit">Submit</button>
        </div>

        <?php

if(isset($_POST['submit']))
{
        $fname=$_POST['fname'];
        $cid=$_POST['clinic'];
        $did=$_POST['doctor'];
        $notes=$_POST['notes'];
        $dov=$_POST['dov'];
        $status="Booking Registered.Wait for the update";
        $timestamp=date('Y-m-d H:i:s');                                 
        $sql = "INSERT INTO appointment fname,clinic,doctor,notes,dov,Timestamp,status) VALUES ('$fname','$clinic','$doctor','$notes','$dov','$timestamp','$status') ";                   
if(!empty($_POST['fname'])&&!empty($_POST['clinic'])&&!empty($_POST['doctor'])&&!empty($_POST['notes']) && !empty($_POST['dov']))

{
            $checkday = strtotime($dov);
            $compareday = date("l", $checkday);
            $flag=0;
            require_once("include/config.php.php");
            $query ="SELECT * FROM doctor_availability WHERE DID = '" .$did. "' AND CID='".$cid."'";
            $results = $con->query($query);
            while($rs=$results->fetch_assoc())
            {
                if($rs["day"]==$compareday)
                {
                    $flag++;
                    break;
                }
            }
if($flag==0)
            {
                echo "<h2>Select another date as Doctor Unavailable on ".$compareday."</h2>";
            }
            else
            {
                if (mysqli_query($con, $sql)) 
                {
                        echo "<h2>Booking successful!! Redirecting to home page....</h2>";
                        header( "Refresh:2; url=dashboard.php");

                } 
                else
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
            }
        }
        else
        {
            echo "Enter data properly!!!!";
        }
}
?>
    </form>
        
                                                         

                                                        
                                                </div>
                                            </div>
                                        </div>
                                            
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

            
            
            <!-- start: FOOTER -->
    <?php include('include/footer.php');?>
            <!-- end: FOOTER -->
        
            <!-- start: SETTINGS -->
    <?php include('include/setting.php');?>
            <>
            <!-- end: SETTINGS -->
            
        


        <!-- start: MAIN JAVASCRIPTS -->
        <script type="text/javascript">
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/modernizr/modernizr.js"></script>
        <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="vendor/switchery/switchery.min.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

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
