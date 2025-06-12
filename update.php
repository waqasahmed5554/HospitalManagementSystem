<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>Update</title>
    <script>
        function calculateTotal() {
            let amount = parseFloat(document.getElementById('amount').value) || 0;
            let discount = parseFloat(document.getElementById('discount').value) || 0;
            let discountedAmount = amount - discount;
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
<div class="container">
<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $sql = "SELECT * FROM `billing_table` WHERE Sr_No = $id";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        // Fetch the single record as an associative array
        $record = mysqli_fetch_assoc($res);
        $patient_name = htmlspecialchars($record['patient_name']);
        $procedures = htmlspecialchars($record['procedures']);
        $amount = htmlspecialchars($record['amount']);
        $discount = htmlspecialchars($record['discount']);
        $total = htmlspecialchars($record['total']);
        $subtotal = htmlspecialchars($record['subtotal']);

        echo '<form method="post" action="update.php" id="myForm">';
        echo '<input type="hidden" name="id" value="'.$id.'">';
        echo '<input type="text" name="patient_name" class="form-control ms-5" value="'.$patient_name.'" style="max-width:30%; margin-top:30px;">'.'<br>'.'<br>';
        echo '<select class="form-select ms-5" aria-label="Default select example" name="procedures" required style="max-width:25%;">
              <option selected>'.$procedures.'</option>
              <option value="Medical Officer (MO) fee charges">Medical Officer (MO) fee charges</option>
              <option value="PGR Consultation fee charges">PGR Consultation fee charges</option>
              <option value="ECG fee charges (EMG)">ECG fee charges (EMG)</option>
              <option value="Dr Rai Waqas Ahmed [Consultation fee charges]">Dr Rai Waqas Ahmed [Consultation fee charges]</option>
              <option value="Dr Haseeb Salman [Consultation fee charges]">Dr Haseeb Salman [Consultation fee charges]</option>
              <option value="Dr Abdul Rehman [Consultation fee charges]">Dr Abdul Rehman [Consultation fee charges]</option>
              <option value="Dr Umer Aftab [Consultation fee charges]">Dr Umer Aftab [Consultation fee charges]</option>
              <option value="Dr Zakaullah [Consultation fee charges]">Dr Zakaullah [Consultation fee charges]</option>
              <option value="Dr M Umar (Sindhi) [Consultation fee charges]">Dr M Umar (Sindhi) [Consultation fee charges]</option>
              <option value="Dr Nouman Hassan[Consultation fee charges]">Dr Nouman Hassan[Consultation fee charges]</option>
              <option value="Dr Shahzaib Bajwa [Consultation fee charges]">Dr Shahzaib Bajwa [Consultation fee charges]</option>
              <option value="Dr Sheikh Shahzaib [Consultation fee charges]">Dr Sheikh Shahzaib [Consultation fee charges]</option>
            </select>';
        echo '<input type="number" id="amount" name="amount" class="form-control ms-5" value="'.$amount.'" style="max-width:20%; margin-top:30px;" oninput="calculateTotal()">';
        echo '<input type="number" id="discount" name="discount" class="form-control ms-5" value="'.$discount.'"style="max-width:20%; margin-top:30px;" oninput="calculateTotal()">';
        echo '<input type="number" id="total" name="total" class="form-control ms-5" value="'.$total.'"style="max-width:20%; margin-top:30px;" readonly>';
        echo '<input type="number" id="subtotal" name="subtotal" class="form-control ms-5" value="'.$subtotal.'"style="max-width:20%; margin-top:30px;" readonly>';

        echo '<button type="submit" class="btn btn-primary ms-5" style="margin-top:20px;"><i class="fa-solid fa-print"></i> Update & Print</button>'.
            '<button type="button" class="btn btn-danger" onclick="clearForm()" style="margin-top:20px;"><i class="fa-solid fa-paintbrush"></i> &nbsp; Clear Form</button>';
        echo '</form>';
    } else {
        die("No record found.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $patient_name = mysqli_real_escape_string($conn, $_POST['patient_name']);
    $procedures = mysqli_real_escape_string($conn, $_POST['procedures']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $discount = mysqli_real_escape_string($conn, $_POST['discount']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    $subtotal = mysqli_real_escape_string($conn, $_POST['subtotal']);

    $sql = "UPDATE `billing_table` SET 
            `patient_name`='$patient_name',
            `procedures`='$procedures',
            `amount`='$amount',
            `discount`='$discount',
            `total`='$total',
            `subtotal`='$subtotal' 
            WHERE `Sr_No`='$id'";

    if (mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success ms-5" role="alert" style="max-width:90%; margin-top:20px;">
        Record Updated Successfully!
        </div>';
        
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
</div>
</body>
</html>
