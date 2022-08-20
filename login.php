<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="icon" href="assets/images/icon.png">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="img"><span><img src="assets/images/Hospital patient.gif" alt=""></span></div>
            <div class="right-side">
                <div class="title">Login</div>
                <?php
                    require_once 'includes/connection.php';
                    include 'includes/login-process.php';
                ?>
                <div class="login-details">
                    <form method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Username</span>
                                <input type="text" name="username" required>
                            </div>
                            
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="password" name="password" required>
                            </div>

                        <div class="btn">
                            <input type="submit" value="Login" name="login">
                        </div>
                    </form>

                    <div class="foot">
                        <span class="txt">Don't have an account yet?</span>
                        <span class="login"><a href="register.php">Signup</a></span>
                    </div>
            </div>
        </div>
    </div>
    
</body>
</html>