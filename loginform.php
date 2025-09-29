<?php
session_start(); 

$valid_username = "admin";
$valid_password = "1234";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = "All fields are required!";
    } elseif ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header("Location: resumelogin.php");
        exit();
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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #3a73d9, #6c9eff);
        }

        .login-container {
            width: 350px;
            background: #fff;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #3a73d9;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 8px 0 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #3a73d9;
            border: none;
            border-radius: 6px;
            color: white;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background: #2c5db6;
        }

        .error {
            color: red;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" value="Login">
        </form>

        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    </div>

</body>
</html>
