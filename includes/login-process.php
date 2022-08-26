<?php
    if (isset($_POST['login']))
    {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1)
        {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['fullname'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['faculty'] = $row['faculty'];
                $_SESSION['phoneNumber'] = $row['phonenumber'];
                $_SESSION['state'] = $row['state'];
                
                if ($row['state'] == "user")
                {
                    header('location: dashboard-user.php');
                    exit();
                }
                else
                {
                    header('location: dashboard-admin.php');
                    exit();
                }
            }
        
        echo '<p style="color: red">Enter correct data</p>';
    }
?>