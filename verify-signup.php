<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/verify.css">
    <link rel="icon" href="assets/images/icon.png">
    <title>Verify Account</title>
</head>
<body>
    <div class="container">
        <div class="img"><span><img src="assets/images/Enter OTP.gif" alt=""></span></div>
            <div class="right-side">
                <div class="title">Verify your account</div>
                <div class="login-details">
                    <?php
                        include 'includes/verify-account.php'
                    ?>
                    <div class="sml-txt">We've sent a code to your email.</div>
                    <form method="post">
                        <div class="input-box">
                                <span class="details">Enter OTP code</span>
                                <input type="password" name="code-verify" required>
                            </div>

                        <div class="btn">
                            <input type="submit" value="Verify" name="verify">
                        </div>
                    </form>
                </div>
        </div>
    </div> 
</body>
</html>