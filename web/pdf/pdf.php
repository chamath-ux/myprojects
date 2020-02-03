<?php
include("fpdf.php");
include("connection.php");
include("session.php");
$pdf = new FPDF('P' , 'mm' , 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

$sql ="select * from expence where place='administrative'";
$result =mysqli_query($conn,$sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){




$pdf->Cell(130  ,5,$row['username'],1,0);
$pdf->Cell(59   ,5,'how',1,1);
	}
}
$pdf->Output();
?>