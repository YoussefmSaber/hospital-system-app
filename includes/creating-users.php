<?php
    session_start();
    if(isset($_POST['register']))
        {
            $name        =  mysqli_real_escape_string($conn, $_POST['full-name']);
            $username    =  mysqli_real_escape_string($conn, $_POST['username']);
            $email       =  mysqli_real_escape_string($conn, $_POST['email']);
            $password    =  mysqli_real_escape_string($conn, $_POST['pass']);
            $confpass    =  mysqli_real_escape_string($conn, $_POST['confPass']);
            $phoneNumber =  mysqli_real_escape_string($conn, $_POST['number']);
            $gender      =  mysqli_real_escape_string($conn, $_POST['gender']);
            $faculty     =  mysqli_real_escape_string($conn, $_POST['faculty']);
            
            if (!empty($name)    && !empty($username) && !empty($email)
            && !empty($password) && !empty($confpass) && !empty($phoneNumber)
            && !empty($gender)   && $faculty != "none")
            {
                if ($confpass != $password)
                {
                    echo '<p style="color: red">Passwords not match</p>';
                }
                else
                {
                    $sql = "INSERT INTO users (name, username, password, email, gender, faculty, phonenumber)
                    VALUES ('$name', '$username' , '$password', '$email', '$gender', '$faculty ', '$phoneNumber')";
                    $result = mysqli_query($conn, $sql);
                    header('location: index.php');
                }
            }
        }
?>