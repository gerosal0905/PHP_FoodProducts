<?php
//include connection file
include_once("pdf_connection.php");
include_once('lib/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('nutrilife.jpg',10,-1,30);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(140);
    // Title
    $this->Cell(50,10,'Admin Logs',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('id'=>'ID', 'username'=> 'Name/Email', 'description'=> 'Description','datetime'=> 'Date/Time',);
 
$result = mysqli_query($connString, "SELECT id, username, description, datetime FROM history") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM history");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
foreach($header as $heading) {
$pdf->Cell(48,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(48,12,$column,1);
}
$pdf->Output();
?>