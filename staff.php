<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>Staff Record Add</title>
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
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
// $staff_id = $_POST['staff_id'];
$Staff_Reg = $_POST['Staff_Reg'];
$staff_name = $_POST['staff_name'];
$staff_phone = $_POST['staff_phone'];
$staff_address = $_POST['staff_address'];
$staff_designation = $_POST['staff_designation'];
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

$sql = "INSERT INTO `staff`(`Staff_Reg`, `staff_name`, `staff_phone`, `staff_address`, `staff_designation`, `department`, `gender`) 
VALUES ('$Staff_Reg', '$staff_name', '$staff_phone', '$staff_address', '$staff_designation', '$selecteddepartment', '$gender')";

$res = mysqli_query($conn, $sql);

if ($res) {
    echo '<div class="alert alert-success ms-5" role="alert" style="max-width:90%; margin-top:20px;">
        Staff Record Added Successfully!
        </div>';
}
 else {
    echo "Failed to add Staff Record: " . mysqli_error($conn);
}
?>
