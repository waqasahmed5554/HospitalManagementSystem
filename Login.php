<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f5f5f5;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .input-group label {
            display: block;
            color: #666;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-btn:hover {
            background: #0056b3;
        }
        .links {
            margin-top: 10px;
        }
        .links a {
            color: #007BFF;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

<?php
session_start();

$valid_email = "waqasah652@gmail.com";
$valid_password = "Lovepakistan@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email == $valid_email && $password == $valid_password) {
        $_SESSION["user"] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>

    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form method="POST" action="#">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter your email" required name="email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" required name="password">
            </div>
            <button type="submit" class="login-btn">Login</button>
            <div class="links">
                <a href="#">Forgot password?</a> | <a href="#">Sign Up</a>
            </div>
        </form>
    </div>
</body>
</html>