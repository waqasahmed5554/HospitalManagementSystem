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
    <style>
      body
      {
        background: url(images/staff.jpg);
        background-size: cover;
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
              <li><a class="dropdown-item" href="patient_table.php" id="pt"><i class="fa-solid fa-caret-right"></i> View Patient Records</a></li>
              <li><a class="dropdown-item" href="appoint_table.php" id="dr"><i class="fa-solid fa-caret-right"></i> View Doctor Appointments</a></li>
              <li><a class="dropdown-item" href="#" id="staff"><i class="fa-solid fa-caret-right"></i> View Staff Report</a></li>
              <li><a class="dropdown-item" href="billing_table.php" id="staff"><i class="fa-solid fa-caret-right"></i> View Financials</a></li>
            </ul>
          </li>
        </ul>
      </div>
        </div>
</nav>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary ms-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-top: 50px;">
    <i class="fa-solid fa-plus"></i> Add Doctor
  </button>
  <form id="myForm" method="post" action="doctors_db.php">
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Doctor Details</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="input-group">
             <span class="input-group-text" id="inputGroup-sizing-default">Doctor ID</span>
             <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="SH-07221034" name="dr_id" id="dr_id">
           </div>
         </div>
        <div class="modal-body">
           <div class="input-group">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
            <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter Name Of Doctor" name="dr_name" id="dr_name">
          </div>
        </div>
        <div class="modal-body">
            <div class="input-group">
             <span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
             <input type="tel" name="dr_phone" id="dr_phone" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter Phone Number Of Doctor">
           </div>
         </div>
         <div class="modal-body">
            <div class="input-group">
             <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
             <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter Address Of Doctor" name="dr_address" id="dr_address">
           </div>
           <div class="modal-body">
            <div class="input-group" style="width: 465px; margin-left: -15px;">
             <span class="input-group-text" id="inputGroup-sizing-default">Designation</span>
             <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter Designation Of Doctor" name="dr_designation" id="dr_designation">
           </div>
         </div>
         <select class="form-select" aria-label="Default select example" name="department" id="department">
          <option selected>---Select Department---</option>
          <option value="1">Emergency (EMG)</option>
          <option value="2">Intensive Care Unit (ICU)</option>
          <option value="3">Outdoor Patient Department (OPD)</option>
          <option value="4">Dialysis Ward (DW)</option>
          <option value="5">Operation Theator (OT)</option>
          <option value="6">General Ward (GW)</option>
        </select>
         <div class="modal-body">
            <div class="input-group">
             <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
             <div class="form-check ms-3"><input class="form-check-input" type="radio" name="gender" id="Male" value="Male" checked>Male</div>
             <div class="form-check ms-3"><input class="form-check-input" type="radio" name="gender" id="Female" value="Female">Female</div>
             <div class="form-check ms-3"><input class="form-check-input" type="radio" name="gender" id="Other" value="Other">Other</div>
           </div>
         </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearForm()">Clear</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save_data">Save</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  <script>
     function clearForm() {
            document.getElementById('myForm').reset();
        }
  </script>
</body>
</html>