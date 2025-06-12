<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>Billing Add</title>
</head>
<body>
    
</body>
</html>
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
    echo '<div class="alert alert-success ms-5" role="alert" style="max-width:90%; margin-top:20px;">
        Invoice Bill Added Successfully!
        </div>';

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
