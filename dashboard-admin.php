<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/ad3mindashboard.css">
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
                </div>
                <div >
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

                                $sql = "SELECT * FROM patiants where requestState = 'waiting'
                                        AND faculty = '".$_SESSION['faculty']."'";
                                $result = $conn->query($sql);

                                while($row = $result->fetch_assoc())
                                {
                                    $pid = $row['id'];

                                    echo"
                                        <form method=\"post\" action = 'includes/dashboard-admin-script.php'>
                                            <tr>
                                                <td>".$row["name"]."<input type='text' name='pID' value='$pid' hidden></td>
                                                <td>".$row["email"]."</td>
                                                <td>".$row["phonenumber"]."</td>
                                                <td>".$row["faculty"]."</td>
                                                <td>".$row["description"]."</td>
                                                <td>
                                                    <input class='btn' type=\"submit\" value=\"Approve\" name=\"approve\">
                                                    <input class='btn' type=\"submit\" value=\"Disapprove\" name=\"disapprove\">
                                                </td>
                                            </tr>
                                        </form>"
                                        ;
                                        if(isset($_POST['aprove']))
                                        {
                                            $_SESSION['pID'] = $row['id'];
                                        }
                                }
                                
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        
    <script src="assets/js/index.js"></script>
</body>
</html>


<!--  
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
        </div>   -->