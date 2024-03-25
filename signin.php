<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="signin.css">
</head>
    <body>
        <div class="container">
            <div class="form signup">
                <h2>Sign Up</h2>
                <div class="inputBox">
                    <input type="text" required="required">
                    <i class="fa-regular fa-envelope"></i>
                    <span>Email </span>
                </div>
                <div class="inputBox">
                    <input type="password" required="required">
                    <i class="fa-solid fa-lock"></i>
                    <span>Enter password</span>
                </div>
                
                <div class="inputBox">
                    <input type="submit" value="Sign In">
                </div>
                <span><a href="forgot.php">Forgot your password?</a></span><br>
                <p>Already a member ?<a href="#" class="login">Log in </a></p>
            </div>
        </div>
        <script src="signin.js"></script>
    </body>
</html>
