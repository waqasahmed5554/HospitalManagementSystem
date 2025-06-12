<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>View Patient Record</title>
    <style>
    a {
      margin-left: 10px;
    }
    .navbar {
        margin-bottom: 20px;
        position: sticky;
        top: 0;
        z-index: 1000
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png" alt="Bootstrap" width="65" height="60"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="AddInvoice.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-plus"></i> Admit Patient</a>
                </li>
                <a class="nav-link active" href="paramedical.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-stethoscope"></i> Appointments</a>
                <li class="nav-item">
                    <a class="nav-link" href="billing.php" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-money-bill-1-wave"></i> Add Invoice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addstaff.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-users"></i> Add Staff</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #922B21;">
                        <i class="fa-solid fa-eye" style="padding-left: 30px;"></i> View All
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="patient_table.php" id="pt"><i class="fa-solid fa-caret-right"></i> View Patient Details</a></li>
                        <li><a class="dropdown-item" href="appoint_table.php" id="dr"><i class="fa-solid fa-caret-right"></i> View Doctor Appointments</a></li>
                        <li><a class="dropdown-item" href="staff_table.php" id="staff"><i class="fa-solid fa-caret-right"></i> View Staff Report</a></li>
                        <li><a class="dropdown-item" href="billing_table.php" id="staff"><i class="fa-solid fa-caret-right"></i> View Financials</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<hr>
<div class="container">
    <form method="POST" action="patient_table.php" class="d-flex mb-4">
        <input class="form-control me-2" type="search" name="search_id" placeholder="Search by Patient ID" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <table class="table" style="text-align: center;">
        <thead>
          <tr>
            <th scope="col" class="bg bg-secondary">Mr#</th>
            <th scope="col" class="bg bg-secondary">Patient Name</th>
            <th scope="col" class="bg bg-secondary">Patient Phone #</th>
            <th scope="col" class="bg bg-secondary">Patient Address</th>
            <th scope="col" class="bg bg-secondary">Doctor Name</th>
            <th scope="col" class="bg bg-secondary">Gender</th>
            <th scope="col" class="bg bg-secondary">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['search_id'])) {
                $search_id = $_POST['search_id'];
                $sql = "SELECT * FROM add_patient WHERE Mr_Number = '$search_id'";
            } else {
                $sql = "SELECT * FROM add_patient";
            }

            $res = mysqli_query($conn, $sql);

            if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['Mr_Number'] . "</th>";
                    echo "<td>" . $row['Patient_Name'] . "</td>";
                    echo "<td>" . $row['Patient_Phone'] . "</td>";
                    echo "<td>" . $row['Patient_Address'] . "</td>";
                    echo "<td>" . $row['DoctorName'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>";
                    echo "<a href='#' class='link-dark'><i class='fa-solid fa-pen-to-square' fs-5 ms-3></i></a>";
                    echo "<a href='delete_patient.php?id=" . $row['Mr_Number'] . "' class='link-danger'><i class='fa-solid fa-trash' fs-5></i></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>