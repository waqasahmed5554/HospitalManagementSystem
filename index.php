<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>Hospital Management System</title>
    <style>
      body {
        background-color: #f5f5f5;
        background: url(images/Dashboard.jpg);
        
       
      }
      .welcome-section, .quick-access, .statistics, .recent-activities, .calendar, .announcements {
        margin: 20px;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
      .navbar {
        margin-bottom: 20px;
        position: sticky;
        top: 0;
        z-index: 1000
      }
      .quick-access .card {
        margin: 10px;
        text-align: center;
      }
      nav li a 
      {
        color: #922B21;
      }
      .card a:hover
      {
        
        background-color:#219223;
        border: #219223;
        
      }
      .footer
      {
        background-color:#2C3E50;
        display:flex;
    
      }
      .sec1 h4
      {
        color:#F2F4F4 ;
        padding-top:30px;
        padding-left:30px;
      }
      .sec1 p
      {
        color:#F2F4F4 ;
        padding-left:30px;
      }
      .sec2 h4
      {
        padding-left:50px;
        padding-top:30px;
        color:#F2F4F4;
      }
      .sec2 p
      {
        color:#F2F4F4 ;
        padding-left:50px;
      }
      
      .sec3 h4
      {
        padding-left:50px;
        padding-top:30px;
        color:#F2F4F4;
      }
      
      .sec3 p
      {
        color:#F2F4F4 ;
        padding-left:90px;
        
        
      }
      .sec3 a 
    {
        text-decoration: none;
    }
    
      
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png" alt="Logo" width="65" height="60"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="AddInvoice.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-plus"></i> Admit Patient</a>
              </li>
              <a class="nav-link active" href="paramedical.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-stethoscope"></i> Appointments</a>
              <li class="nav-item">
                <a class="nav-link" href="billing.php" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-money-bill-1-wave"></i> Add Invoice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addstaff.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-users"></i> Add Staff</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 30px; color: #922B21;">
                  <i class="fa-solid fa-eye"></i> View All
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="patient_table.php"><i class="fa-solid fa-caret-right"></i> View Patient Records</a></li>
                  <li><a class="dropdown-item" href="appoint_table.php"><i class="fa-solid fa-caret-right"></i> View Doctor Appointments</a></li>
                  <li><a class="dropdown-item" href="staff_table.php"><i class="fa-solid fa-caret-right"></i> View Staff Report</a></li>
                  <li><a class="dropdown-item" href="billing_table.php"><i class="fa-solid fa-caret-right"></i> View Financials</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-12 welcome-section">
          <h3>Welcome to Health-Care Management System</h3>
          <p>Allow patients to book, reschedule, or cancel appointments through the app.<br>
            Enable healthcare providers to manage their schedules efficiently.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 quick-access">
          <h2>Quick Access</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <i class="fa-solid fa-plus fa-2x"></i>
                  <h5 class="card-title">Admit Patient</h5>
                  <a href="AddInvoice.html" class="btn btn-primary">Click to admit</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <i class="fa-solid fa-money-bill-1-wave fa-2x"></i>
                  <h5 class="card-title">Add Invoice</h5>
                  <a href="billing.php" class="btn btn-primary">Click to add</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <i class="fa-solid fa-users fa-2x"></i>
                  <h5 class="card-title">Add Staff</h5>
                  <a href="addstaff.html" class="btn btn-primary">Click to add</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <i class="fa-solid fa-eye fa-2x"></i>
                  <h5 class="card-title">View Records</h5>
                  <a href="patient_table.php" class="btn btn-primary">Click to view</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 statistics">
          <h2>Statistics</h2>
          <hr>
          <?php
include 'connection.php';

$response = array();

// Fetch total patients
$sql = "SELECT COUNT(*) as total_patients FROM add_patient";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_patients = $row['total_patients'];
    echo "<h5>Admitted Patients: " . $total_patients . "</h5>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
 <?php
include 'connection.php';

$response = array();

// Fetch total patients
$sql = "SELECT COUNT(*) as total_patients FROM doctorappointment";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_patients = $row['total_patients'];
    echo "<h5>Total Oppointments: " . $total_patients . "</h5>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

          <?php
        include "connection.php";

        $sql_total_staff = "SELECT COUNT(*) as total_staff FROM staff";
        $result = mysqli_query($conn, $sql_total_staff);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $total_staff = $row['total_staff'];
            echo "<h5>Total Staff Hired: " . $total_staff . "</h5>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
          
            <?php
            include "connection.php";
    
            $sql_total_revenue = "SELECT SUM(total) as total_revenue FROM billing_table";
            $result = mysqli_query($conn, $sql_total_revenue);
    
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $total_revenue = $row['total_revenue'];
                echo "<h5>Tot. Revenue: Rs. " . number_format($total_revenue, 2) . "</h5>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            ?>
          <canvas id="statisticsChart"></canvas>
        </div>
        <div class="col-md-5 recent-activities">
          <h2>Recent Activities</h2>
          <hr>
          <ul>
            <li><strong>Patient:</strong> Waqas Ahmed</li>
            <li><strong>Invoice#:</strong> 12345 created</li>
            <li><strong>Staff:</strong> Dr. Nouman Hassan</li>
          </ul>
          </div>
          </div>
          </div>
          <div class="footer">
           
          <div class="sec1">
           <h4><i class="fa-solid fa-location-dot"></i> Location</h4>
           <p>Main branch Hralthcare, Sargodha</p>
           <p>Satellite town 24-A main bazar, Sargodha</p>
           <p>Near <strong>SADIQ HOSPITAL</strong>, Sargodha</p>
           
           
        </div>

        <div class="sec2">
        <h4><i class="fa-solid fa-address-book"></i> Contact Us</h4>
           <p> <strong>Email:</strong> waqasah652@gmail.com</p>
           <p> <strong>WhatsApp:</strong> +923476421106</p>
           <p> <strong>Instagram:</strong> rai_waqas321</p>
        </div>
       
        <div class="sec3">
        <h4><i class="fa-solid fa-code"></i> Developers</h4>
            
            <a href="https://left-hand-form.000webhostapp.com/Portfolio/index.html" target_blank><p>Waqas Ahmed</p></a>
            <a href="#"><p>Abubakar Munir</p></a>
            <a href="#"><p>Muhammad Umer</p></a>
        
            
            
    </div>
          </div>
          </body>
          </html>
       
