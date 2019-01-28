<?php

//namespace Dompdf;
require_once 'dompdf/autoload.inc.php';
require_once('include/configpdo.php');
//error_reporting(0);

ob_start();
//include('table_generating_script.php');
include('authtest.php');
$html = ob_get_clean();

$html .= '<h4>NAME: ' . $fullname . '</h4>';
$html .= '<h4>NRIC: ' .$icnumber.'</h4>';
$html .= '<table class="table table-bordered" id="sample-table-1">';
$html .= '<head>
  <link rel="stylesheet" href="customstyle.css" id="skin_color" />
</head>
<thead><tr>
<th rowspan="2">NO</th>
<th rowspan="2">Date</th>
<th rowspan="2">LK/LR</th>
<th colspan="3">Ujian Makmal</th>
<th colspan="4">Pemeriksaan</th>
<th colspan="2">Kandungan</th>
<th colspan="3">Janin</th>
<th rowspan="2">Masalah dan pengendalian</th>
</tr>
<tr>
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
                                                      </thead>';

      $sql=mysqli_query($con,"select * from health where id='".$_SESSION['id']."' ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
                        $date = $row['date'];
                        $lk = $row['lk'];
                        $urinalb = $row['urinalb'];
                        $urinsugar = $row['urinsugar'];
                        $hb = $row['hb'];
                        $beratbdn = $row['beratbdn'];
                        $tekdarah = $row['tekdarah'];
                        $nadi = $row['nadi'];
                        $edema = $row['edema'];
                        $minggu = $row['minggu'];
                        $tinggirahim = $row['tinggirahim'];
                        $presentasi = $row['presentasi'];
                        $jantung = $row['jantung'];
                        $gerak = $row['gerak'];
                        $masalah = $row['masalah'];

$html .= '<tr><td>' . $cnt . '</td>';
$html .= '<td>' . $date . '</td>';
$html .= '<td>' . $lk . '</td>';
$html .= '<td>' . $urinalb . '</td>';
$html .= '<td>' . $urinsugar . '</td>';
$html .= '<td>' . $hb . '</td>';
$html .= '<td>' . $beratbdn . '</td>';
$html .= '<td>' . $tekdarah . '</td>';
$html .= '<td>' . $nadi . '</td>';
$html .= '<td>' . $edema . '</td>';
$html .= '<td>' . $minggu . '</td>';
$html .= '<td>' . $tinggirahim . '</td>';
$html .= '<td>' . $presentasi . '</td>';
$html .= '<td>' . $jantung . '</td>';
$html .= '<td>' . $gerak . '</td>';
$html .= '<td>' . $masalah . '</td>';
$html .= '</tr>';


                      $cnt=$cnt+1;
                       }                                                


$html .= '</table>';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
//$dompdf = new Dompdf();
$dompdf = new DOMPDF();
$dompdf->load_html($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("result");

?>
