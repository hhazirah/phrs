<?php

namespace Dompdf;
require_once 'dompdf/autoload.inc.php';
session_start();
ob_start();
require_once('include/configpdo.php');
include('include/config.php');
include('include/checklogin.php');
//error_reporting(0);
?>

<html>
<style>
	body {
  padding: 4px;
  text-align: center;
  table-layout: center;
}

table {
  width: 100%;
  margin: 10px auto;
  table-layout: auto;

}

.fixed {
  table-layout: fixed;
}

table,
td,
th {
  border-collapse: collapse;
}

th,
td {
  padding: 1px;
  

  border: solid 1px;
  text-align: center;
}
</style>


<table class="table table-bordered" id="sample-table-1" fixed-header>
	<br><br><br><br>


	            Name : <?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['fullName'];

}
									?> 
									<br><br>
				NRIC: <?php $query=mysqli_query($con,"select ic from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['ic'];

}
									?>

<br><br><br>
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
                     
                                                      
                        
                  </table>
  
                 
              </html>

             <?php
$html = ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->setPaper('A4', 'landscape');
$dompdf->load_html($html);
$dompdf->render();
//dompdf->stream("",array("Attachment" => false));
$dompdf->stream("result.pdf");
?>