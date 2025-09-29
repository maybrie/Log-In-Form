<?php
session_start(); 

$valid_username = "admin";
$valid_password = "1234";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = "All fields are required!";
    } elseif ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $success = "Login successful! Redirecting to resume...";
        header("refresh:1;url=resumelogin.php");
        } else {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
    * { box-sizing: border-box; }
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #3a73d9, #6c9eff);
        overflow: hidden;
    }

    body::before {
        content: '';
        position: absolute;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.05) 20%, transparent 20%) repeat;
        background-size: 50px 50px;
        animation: float 30s linear infinite;
    }

    @keyframes float {
        0% { transform: translate(0,0); }
        100% { transform: translate(-50px, -50px); }
    }

    .login-container {
        position: relative;
        width: 700px;
        height: 500px;
        background: #fff;
        padding: 50px 35px;
        border-radius: 14px;
        box-shadow: 0px 12px 30px rgba(0,0,0,0.25);
        text-align: center;
        z-index: 1;
    }

    .login-container h2 {
        margin-bottom: 15px;
        color: #3a73d9;
    }

    .login-container p {
        margin-bottom: 25px;
        font-size: 15px;
        color: #555;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 95%;
        padding: 16px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        transition: 0.3s;
    }

    .login-container input[type="text"]:focus,
    .login-container input[type="password"]:focus {
        border-color: #3a73d9;
        box-shadow: 0 0 8px rgba(58,115,217,0.3);
        outline: none;
    }

    .login-container input[type="submit"] {
        width: 98%;
        padding: 16px;
        background: linear-gradient(45deg, #3a73d9, #6c9eff);
        border: none;
        border-radius: 8px;
        color: white;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .login-container input[type="submit"]:hover {
        background: linear-gradient(45deg, #2c5db6, #5a8cff);
    }

    .error {
        color: red !important; 
        margin-top: 15px;
        font-size: 14px;
        font-weight: 500;
    }

    .success {
        color: green !important; 
        margin-top: 15px;
        font-size: 14px;
        font-weight: 500;
    }

    .show-password {
        margin-top: 10px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        font-size: 13px;
    }

    @media (max-width: 480px) {
        .login-container { width: 90%; padding: 35px 25px; }
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Login to Access Resume</h2>
    <p>Please enter your username and password to view the resume/portfolio page.</p>

    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">

        <div class="show-password">
            <input type="checkbox" id="showPass" onclick="togglePassword()"> 
            <label for="showPass">Show Password</label>
        </div>

        <input type="submit" value="Login">
    </form>

    <?php 
        if (!empty($error)) echo "<p class='error'>$error</p>"; 
        if (!empty($success)) echo "<p class='success'>$success</p>"; 
    ?>
</div>

<script>
function togglePassword() {
    var passField = document.querySelector('input[name="password"]');
    passField.type = passField.type === "password" ? "text" : "password";
}
</script>

</body>
</html>
