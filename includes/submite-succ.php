<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/submite.css">
    <title>Success submite</title>
</head>
<body>
    <div class="container">
        <div class="title">Your request has been successfully processed</div>
        <?php
            header('Refresh: 3; URL=dashboard-user.php');
        ?>
    </div>
</body>
</html>