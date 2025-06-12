<?php
require('fpdf/fpdf.php');
include 'connection.php';

// Get the ID from the GET request and sanitize it
$id = intval($_GET['id']);

// Prepare the SQL statement
$sql = "SELECT * FROM `staff` WHERE Staff_Reg = $id LIMIT 1"; 

// Execute the query
$res = mysqli_query($conn, $sql);

// Check if a record is found
if ($res && mysqli_num_rows($res) > 0) {
    // Fetch the single record as an associative array
    $record = mysqli_fetch_assoc($res);
} else {
    die("No record found.");
}

// Create instance of FPDF
$pdf = new FPDF();

$pdf->SetTopMargin(40);
$pdf->SetLeftMargin(5);
$pdf->AddPage("", "A5");

// Add image
$pdf->Image("images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png", 0, 0, 25, 25, "");

// Add heading parallel to the image
$pdf->SetXY(50, 10); // Adjust position to be parallel to the image
$pdf->setFont("Arial", "B", 16);
$pdf->Cell(0, 10, "STAFF VOUCHER", 0, 1,"L");
$pdf->SetXY(47, 17); // Adjust position to be parallel to the image
$pdf->setFont("Arial", "", 14);
$pdf->Cell(0, 10, "Welcome To Healthwire", 0, 1,"L");

// Add a line break
$pdf->Ln(15);
// $pdf->Ln(5);
$pdf->cell(132, 3, "", 0, 1, "L", TRUE, "");
$pdf->Ln(10);
$pdf->setFont("Arial", "B", 12);
$pdf->Cell(45, 8, "Staff ID: ", 0, 0, "L");
$pdf->setFont("Arial", "", 12);
$pdf->Cell(0, 8, $record['Staff_Reg'], 0, 1, "L");
// Set font to bold for the labels

// Add patient data
$pdf->setFont("Arial", "B", 12);
$pdf->Cell(45, 8, "STAFF NAME:", 0, 0, "L");
$pdf->setFont("Arial", "", 12);
$pdf->Cell(0, 8, $record['staff_name'], 0, 1, "L");

$pdf->setFont("Arial", "B", 12);
$pdf->Cell(45, 8, "STAFF PHONE: ", 0, 0, "L");
$pdf->setFont("Arial", "", 12);
$pdf->Cell(0, 8, $record['staff_phone'], 0, 1, "L");


// Set font to bold for the labels
$pdf->setFont("Arial", "B", 12);
$pdf->Cell(45, 8, "STAFF ADDRESS: ", 0, 0, "L");
$pdf->setFont("Arial", "", 12);
$pdf->Cell(0, 8, $record['staff_address'], 0, 1, "L");

$pdf->setFont("Arial", "B", 12);
$pdf->Cell(45, 8, "DESIGNATION: ", 0, 0, "L");
$pdf->setFont("Arial", "", 12);
$pdf->Cell(0, 8, $record['staff_designation'], 0, 1, "L");

$pdf->setFont("Arial", "B", 12);
$pdf->Cell(45, 8, "DEPARTMENT: ", 0, 0, "L");
$pdf->setFont("Arial", "", 12);
$pdf->Cell(0, 8, $record['department'], 0, 1, "L");
$pdf->setFont("Arial", "B", 12);
$pdf->Cell(45, 8, "STAFF GENDER: ", 0, 0, "L");
$pdf->setFont("Arial", "", 12);
$pdf->Cell(0, 8, $record['gender'], 0, 1, "L");

$pdf->Ln(40);

// Add signature and stamp lines
$pdf->Cell(60, 8, "____________________", 0, 1, "L");
$pdf->setFont("Arial", "B", 12);
$pdf->Cell(60, 8, "Signature & Stamp", 0, 1, "L");
$pdf->Ln(10);
$pdf->setFont("Arial", "B", 12);
$pdf->Cell(100, 8, "Valid For Claim an Insurance Bill", 0, 0, "R");

// Output the PDF
$pdf->Output();
?>
