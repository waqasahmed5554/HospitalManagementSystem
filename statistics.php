<?php
include 'connection.php';

$response = array();

// Fetch total patients
$sql = "SELECT COUNT(*) as total_patients FROM add_patient";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$response['total_patients'] = $row['total_patients'];

// Fetch total staff
$sql = "SELECT COUNT(*) as total_staff FROM staff";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$response['total_staff'] = $row['total_staff'];

// Fetch total revenue
$sql = "SELECT SUM(amount) as total_revenue FROM billing_table";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$response['total_revenue'] = $row['total_revenue'];

echo json_encode($response);

?>
