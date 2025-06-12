<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "hospitalmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$patient_name = $_POST['patient_name'];
$procedures = $_POST['procedures'];
$amount = $_POST['amount'];
$discount = $_POST['discount'];
$total = $_POST['total'];
$subtotal = $_POST['subtotal'];
$desc=[
    '1'=>'Medical Officer (MO) fee charges',
    '2'=>'PGR Consultation fee charges',
    '3'=> 'ECG fee charges (EMG)',
    '4'=> 'Dr Rai Waqas Ahmed [Consultation fee charges]',
    '5'=> 'Dr Haseeb Salman [Consultation fee charges]',
    '6'=> 'Dr Abdul Rehman [Consultation fee charges]',
    '7'=> 'Dr Umer Aftab [Consultation fee charges]',
    '8'=> 'Dr Zakaullah [Consultation fee charges]',
    '9'=> 'Dr M Umar (Sindhi) [Consultation fee charges]',
    '10'=> 'Dr Nouman Hassan[Consultation fee charges]',
    '11'=> 'Dr Shahzaib Bajwa [Consultation fee charges]',
    '12'=> 'Dr Sheikh Shahzaib [Consultation fee charges]',
];
$selectedprocedures = $desc[$procedures];
 

$sql="INSERT INTO `billing_table` (`patient_name`, `procedures`, `amount`, `discount`, `total`, `subtotal`) 
VALUES ('$patient_name', '$selectedprocedures', '$amount', '$discount','$total','$subtotal')";
$res=mysqli_query($conn,$sql);

if($sql == true)
{
    echo "Patient Bill Added  Successfully!";

}
else
{
    echo "Failed to add Patient Bill!". mysqli_error($conn);
}

// echo $Mr_Number.'<br>';
// echo $Patient_Name.'<br>';
// echo $Patient_Name.'<br>';
// echo $Patient_Address.'<br>';
// echo $DoctorName.'<br>';
// echo $gender.'<br>';
?>
