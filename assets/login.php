<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="images/icon.png">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="img"><span><img src="images/Hospital patient.gif" alt=""></span></div>
            <div class="right-side">
                <div class="title">Login</div>
                <div class="login-details">
                    <form method="post">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Username</span>
                                <input type="text" required>
                            </div>
                            
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input type="password" required>
                            </div>

                        <div class="btn">
                            <input type="submit" value="Login">
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