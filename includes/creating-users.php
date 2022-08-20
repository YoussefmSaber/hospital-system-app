<?php
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
                    $verfyCode = rand(100000, 999999);
                    $subject = "Email verification code";
                    $message = "Your verification code is \n\n" . $verfyCode;
                    $header = "From: youssef.mo.saber@gmail.com";
                    
                    mail($email, $subject, $message, $header);

                    header('location: verify-signup.php');
                }
            }
        }
?>