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
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="AddInvoice.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-plus"></i> Admit Patient</a>
                        </li>
                        <a class="nav-link active" href="paramedical.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-stethoscope"></i></i> Appointments</a>
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
            </ul>
        </div>
    </div>
</nav>
<hr>
<div class="container">
    <div style="margin-top: 20px;">
        <?php
        include "connection.php";

        $sql_total_staff = "SELECT COUNT(*) as total_staff FROM staff";
        $result = mysqli_query($conn, $sql_total_staff);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $total_staff = $row['total_staff'];
            echo "<h4>Total Staff: " . $total_staff . "</h4>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
    </div>
    <table class="table" style="margin-top: 20px; width: 100%; text-align: center;">
        <thead>
            <tr>
                <th scope="col" class="bg-secondary">Staff ID</th>
                <th scope="col" class="bg-secondary">Staff Name</th>
                <th scope="col" class="bg-secondary">Staff Phone #</th>
                <th scope="col" class="bg-secondary">Staff Address</th>
                <th scope="col" class="bg-secondary">Designation</th>
                <th scope="col" class="bg-secondary">Department</th>
                <th scope="col" class="bg-secondary">Gender</th>
                <th scope="col" class="bg-secondary">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `staff`";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['Staff_Reg'] . "</th>";
                    echo "<td>" . $row['staff_name'] . "</td>";
                    echo "<td>" . $row['staff_phone'] . "</td>";
                    echo "<td>" . $row['staff_address'] . "</td>";
                    echo "<td>" . $row['staff_designation'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>";
                    echo "<a href='#' class='link-dark'><i class='fa-solid fa-pen-to-square' fs-5 ms-3></i></a>";
                    echo "<a href='delete_staff.php?id=" . $row['Staff_Reg'] . "' class='link-danger'><i class='fa-solid fa-trash' fs-5></i></a>";
                    echo "<a href='staffvoucher.php?id=" . $row['Staff_Reg'] . "'  class='link-dark' target='blank'><i class='fa-solid fa-print' fs-5></i></a>";
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
