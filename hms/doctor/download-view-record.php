
<html>

<head>
  <link rel="stylesheet" href="customstyle.css" id="skin_color" />
</head>
<body>
  <?php
include('authtest.php');

?>

<h1>PREVIEW RECORD</h1>
<center><h3>PRENATAL HEALTH RECORD SYSTEM</h3></center>


          Name : <?php $query=mysqli_query($con,"select fullName from users where id='$id'");
while($row=mysqli_fetch_array($query))
{
	echo $row['fullName'];

}  
									?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
								
				NRIC: <?php $query=mysqli_query($con,"select ic from users where id='$id'");
while($row=mysqli_fetch_array($query))
{
	echo $row['ic'];

}


									?> 

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
$sql=mysqli_query($con,"select * from health where  id='$id' ");
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

                   <td><b><a href="test1.php">Download PDF</a> </b></td>
  </body>
                 
              </html>
          