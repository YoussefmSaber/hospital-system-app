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
            <div>
                <table cellspacing="0" class="tbl">
                    <thead>
                        <tr class="head">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Faculty</th>
                        <th>Description</th>
                        <th>State</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $conn = new mysqli('localhost', 'root', '', 'hospital-system-app');
                            $email = $_SESSION['email'];
                            $sql = "SELECT * FROM patiants where email = '$email'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc())
                            {
                                $pid = $row['id'];

                                echo"<form method=\"post\" action = 'includes/dashboard-admin-script.php'>
                                        <tr>
                                            <td>".$row["name"]."</td>
                                            <td>".$row["email"]."</td>
                                            <td>".$row["phonenumber"]."</td>
                                            <td>".$row["faculty"]."</td>
                                            <td>".$row["description"]."</td>
                                            <td>".$row["requestState"]."</td>
                                        </tr>
                                    </form>";
                                if(isset($_POST['aprove']))
                                {
                                    $_SESSION['pID'] = $row['id'];
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <div class="back">
                    <a href="dashboard-user.php">Back</a>
                </div>
            </div>
        </div>
    </body>
</html>