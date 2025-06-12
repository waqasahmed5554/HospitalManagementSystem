<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>Doctors</title>
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
$dr_id = $_POST['dr_id'];
$dr_name = $_POST['dr_name'];
$dr_phone = $_POST['dr_phone'];
$dr_address = $_POST['dr_address'];
$dr_designation = $_POST['dr_designation'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$depart = [
    1 => 'Emergency (EMG)',
    2 => 'Intensive Care Unit (ICU)',
    3 => 'Outdoor Patient Department (OPD)',
    4 => 'Dialysis Ward (DW)',
    5 => 'Operation Theator (OT)',
    6 => 'General Ward (GW)'
];
$selecteddepartment = $depart[$department];

// Corrected SQL query
$sql = "INSERT INTO `doctors` (`dr_id`, `dr_name`, `dr_phone`, `dr_address`, `dr_designation`, `department`, `gender`) 
VALUES ('$dr_id', '$dr_name', '$dr_phone', '$dr_address', '$dr_designation', '$selecteddepartment', '$gender')";

$res = mysqli_query($conn, $sql);

if ($res) {
    echo '<div class="alert alert-success ms-5" role="alert" style="max-width:90%; margin-top:20px;">
        Doctor Record Added Successfully!
        </div>';
} else {
    echo "Failed to add Doctor Record! " . mysqli_error($conn);
}

// echo $Mr_Number.'<br>';
// echo $Patient_Name.'<br>';
// echo $Patient_Name.'<br>';
// echo $Patient_Address.'<br>';
// echo $DoctorName.'<br>';
// echo $gender.'<br>';
?>
