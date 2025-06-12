<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>Patient Record Add</title>
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
$Mr_Number = $_POST['Mr_Number'];
$Mr_Number = $_POST['Mr_Number'];
$Patient_Name = $_POST['Patient_Name'];
$Patient_Phone = $_POST['Patient_Phone'];
$Patient_Address = $_POST['Patient_Address'];
$DoctorName = $_POST['DoctorName'];
$gender = $_POST['gender'];
$doc=[
    '1'=>'Dr Rai Waqas Ahmed',
    '2'=>'Dr Haseeb Salman',
    '3'=> 'Dr Abdul Rehman',
    '4'=> 'Dr Malik Umer Aftab',
    '5'=> 'Dr Zakaullah Dholka',
    '6'=> 'Dr Muhammad Umar',
    '7'=> 'Dr Nouman Hassan',
    '8'=> 'Dr Shahzaib Bajwa',
    '9'=> 'Dr Sheikh Shahzaib',
];
$selectedDoctorName = $doc[$DoctorName];
 

$sql="INSERT INTO `add_patient` (`Mr_Number`, `Patient_Name`, `Patient_Phone`, `Patient_Address`, `DoctorName`, `gender`) 
VALUES ('$Mr_Number', '$Patient_Name', '$Patient_Phone', '$Patient_Address','$selectedDoctorName','$gender')";
$res=mysqli_query($conn,$sql);

if($sql == true)
{
    echo '<div class="alert alert-success ms-5" role="alert" style="max-width:90%; margin-top:20px;">
        Patient Record Added Successfully!
        </div>';

}
else
{
    echo "Failed to add Patient Record!". mysqli_error($conn);
}

// echo $Mr_Number.'<br>';
// echo $Patient_Name.'<br>';
// echo $Patient_Name.'<br>';
// echo $Patient_Address.'<br>';
// echo $DoctorName.'<br>';
// echo $gender.'<br>';
?>
