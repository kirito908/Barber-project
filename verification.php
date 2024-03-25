<?php
include "../includes/database.php";
function generateVerificationCode($length = 6) {
    $characters = '0123456789';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}
if(isset($_POST['button'])) 
    $email = $_POST['email'];
    $verificationCode = generateVerificationCode();
    $query = "UPDATE users SET verification_code = '$verificationCode' WHERE email = '$email'";
    mysqli_query($conn, $query);
    $to = $email;
    $subject = "Verification Code";
    $message = "Your verification code is: $verificationCode";
    mail($to, $subject, $message);
    header("Location: verification.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>

    <div class="login">
        <div class="wrapper">
        <h2>Hamro Salon</h2>
        <form action="" method="post"> 
        <p>We've sent a verification code to your email -</p>
            <input type="text" id="email" name="email" placeholder="Enter your email"><br>           
            <button type="submit" id="change-btn" name="button">Send Code!</button><br>
            <span><a href="login.php">Back to Login!</a></span><br>
        </form>
        </div>
    </div>

    <script src="login.js"></script>

</body>
</html>
