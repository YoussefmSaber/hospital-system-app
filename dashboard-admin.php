<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/admindashboard.css">
    <link rel="icon" href="assets/images/icon.png">
    <title>Dashboard</title>
</head>
<body>

    <div class="container">
        <div class='topContainer'>
            <div class="title">Welcome
            <?php
                echo $_SESSION['fullname'];
                echo ' ('.$_SESSION['state'].')';
            ?>
            </div>

            <div class="user-details">
                E-mail:
                <?php
                echo $_SESSION['email']."<br>";
                ?>
                <br>
                Faculty:
                <?php
                echo $_SESSION['faculty']."<br>";
                ?>
                <br>
                Phone No.:
                <?php
                echo $_SESSION['phoneNumber'];
                ?>
                <br>

            </div>
        </div>

        <div class='downContainer'>
            <form action="" method="get">
                <table id='tbl'>
                    <tr>
                        <th>Stuent</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </table>
            </form>    
        </div>   

    </div>
        
    <script src="assets/js/index.js"></script>
</body>
</html>