<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/us1erdashboard.css">
        <link rel="icon" href="assets/images/icon.png">
        <title>Dashboard</title>
    </head>
    <body>
        <div class="container">
            <div class="title">Welcome
                <?php
                    echo $_SESSION['fullname'];
                    echo ' ('.$_SESSION['state'].')';
                ?>
            </div>
            <div>
                <div class="user-details">
                    <div class="email-box">
                        <p class="name">Your email address:
                        <?php
                            echo $_SESSION['email']."<br>";
                        ?>
                        </p>
                        <br>
                    </div>

                    <div class="faculty-box">
                        <p class="name">Your faculty:
                            <?php
                                echo $_SESSION['faculty']."<br>";
                            ?>
                        </p>
                        <br>
                    </div>

                    <div class="number-box">
                        <p class="number">Your phone number:
                        <?php
                            echo $_SESSION['phoneNumber'];
                        ?>
                        </p>
                        <br>
                    </div>

                    <div class="request-box">
                        <p class="request">Your request state:
                            <?php?>
                        </p>
                        <br>
                    </div>
                </div>
                <div class="form">
                    <form action="includes/dashboard-user-script.php" method="post">
                        <div class="txt-field">
                            <textarea name="message" id="txtfield" cols="30" rows="10"></textarea>
                        </div>
                        <div class="btn-container">
                            <div class="btn">
                                <input type="submit" value="Send" name="send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>