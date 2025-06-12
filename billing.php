<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>Billings</title>
    <style>
      body
      {
        background-color:#d3d3d3;
      }
     .procedures {
        width: 25%;
        margin-top: 3vw;
        margin-left: 3.5vw;
        display: flex;
     }
     .navbar {
        margin-bottom: 20px;
        position: sticky;
        top: 0;
        z-index: 1000
      }
     .amount {
        width: 25%;
        margin-top: -39px;
        margin-left: 30vw;
     }
     .detail {
        margin-top: 20px;
     }
     .discount {
        width: 25%;
        margin-top: -39px;
        margin-left: 57vw;
     }
     .total {
        width: 15%;
        margin-top: 20px;
        margin-left: 57.5vw; 
     }
     .sub {
        margin-top: 10px;
     }
  
    </style>
    <script>
        function calculateTotal() {
            let amount = parseFloat(document.getElementById('amount').value) || 0;
            let discount = parseFloat(document.getElementById('discount').value) || 0;
            let discountedAmount = amount - (discount);
            let subtotal = discountedAmount;
            document.getElementById('total').value = discountedAmount.toFixed(2);
            document.getElementById('subtotal').value = subtotal.toFixed(2);
        }

        function clearForm() {
            document.getElementById('myForm').reset();
            calculateTotal(); // Reset the totals as well
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-info" style="position: sticky;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png" alt="Bootstrap" width="65" height="60"></a>
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
                <a class="nav-link" href="#" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-money-bill-1-wave"></i> Add Invoice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addstaff.html" style="padding-left: 30px; color: #922B21;"><i class="fa-solid fa-users"></i> Add Staff</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #922B21;">
                    <i class="fa-solid fa-eye" style="padding-left: 30px;"></i> View All
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="patient_table.php"><i class="fa-solid fa-caret-right"></i> View Patient Records</a></li>
                  <li><a class="dropdown-item" href="appoint_table.php" id="dr"><i class="fa-solid fa-caret-right"></i> View Doctor Appointments</a></li>
                  <li><a class="dropdown-item" href="staff_table.php" id="staff"><i class="fa-solid fa-caret-right"></i> View Staff Report</a></li>
                  <li><a class="dropdown-item" href="billing_table.php" id="staff"><i class="fa-solid fa-caret-right"></i> View Financials</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <form method="post" action="bill.php" id="myForm">
      <div class="detail">
        <span class="ms-5"><strong>Name</strong></span>
        <input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter Name Of Patient" name="patient_name" id="patient_name" style="max-width:30%; margin-left:45px;">
      </div>
      
       <div class="procedures">
        <select class="form-select" aria-label="Default select example" name="procedures" required>
          <option selected>---SELECT PROCEDURES---</option>
          <option value="1">Medical Officer (MO) fee charges</option>
          <option value="2">PGR Consultation fee charges </option>
          <option value="3">ECG fee charges (EMG)</option>
          <option value="4">Dr Rai Waqas Ahmed [Consultation fee charges]</option>
          <option value="5">Dr Haseeb Salman [Consultation fee charges]</option>
          <option value="6">Dr Abdul Rehman [Consultation fee charges]</option>
          <option value="7">Dr Umer Aftab [Consultation fee charges]</option>
          <option value="8">Dr Zakaullah [Consultation fee charges]</option>
          <option value="9">Dr M Umar (Sindhi) [Consultation fee charges]</option>
          <option value="10">Dr Nouman Hassan[Consultation fee charges]</option>
          <option value="11">Dr Shahzaib Bajwa [Consultation fee charges]</option>
          <option value="12">Dr Sheikh Shahzaib [Consultation fee charges]</option>
        </select>
      </div>
      <div class="amount">
      
        <input type="number" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Amount" name="amount" id="amount" oninput="calculateTotal()">
      </div>
      <div class="discount">
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Discount" name="discount" id="discount" oninput="calculateTotal()">
      </div>
    
      <div class="total">
        <span><strong>Total Amount:</strong></span>
        <input type="number" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Total" name="total" id="total" style="display:inline-block;" readonly>
        <div class="sub">
          <span><strong>Sub-Total:</strong></span>
          <input type="number" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Sub Total" name="subtotal" id="subtotal" readonly>
        </div>
        
        <button type="submit" class="btn btn-primary" style="margin-top:20px;"><i class="fa-solid fa-print"></i> Save & Print</button>
        <button type="button" class="btn btn-danger" onclick="clearForm()" style="margin-top:20px;"><i class="fa-solid fa-paintbrush"></i> &nbsp; Clear Form</button>
      </form>
      <script>
                 function clearForm() {
                        document.getElementById('myForm').reset();
                    }
              </script>
        
                  </body>
                  </html>
