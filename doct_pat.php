<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/WhatsApp_Image_2024-06-08_at_08.58.36_7fc36ed5-removebg-preview.png">
    <title>View Patients</title>
</head>
<body>
<div class="container">
    <h2 class="mt-4">Select Doctor</h2>
    <form method="GET" action="patient.php">
        <div class="mb-3">
            <label for="doctor" class="form-label">Doctor</label>
            <select class="form-select" id="doctor" name="doctor_id" required>
            <option selected>---Select Doctor Name---</option>
                        <option value="1">Dr Rai Waqas Ahmed</option>
                        <option value="2">Dr Haseeb Salman</option>
                        <option value="3">Dr Abdul Rehman</option>
                        <option value="4">Dr Malik Umer Aftab</option>
                        <option value="5">Dr Zakaullah Dholka</option>
                        <option value="6">Dr Muhammad Umar</option>
                        <option value="7">Dr Nouman Hassan</option>
                        <option value="8">Dr Shahzaib Bajwa</option>
                        <option value="9">Dr Sheikh Shahzaib</option>
                      </select>
                <?php
                include 'connection.php';
                $sql = "SELECT Mr_Number, DoctorName FROM doctorappointment";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) 
                // {
                //     echo "<option value='{$row['Mr_Number']}'>{$row['DoctorName']}</option>";
                // }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">View Patients</button>
    </form>
</div>
</body>
</html>

</body>
</html>
