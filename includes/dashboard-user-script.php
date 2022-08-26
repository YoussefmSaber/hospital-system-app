<?php
    session_start();
    if (isset($_POST['send']))
    {
        $conn           = mysqli_connect('localhost', 'root', '', 'hospital-system-app');
        $name           =  mysqli_real_escape_string($conn, $_SESSION['fullname']);        
        $email          =  mysqli_real_escape_string($conn, $_SESSION['email']);
        $phoneNumber    =  mysqli_real_escape_string($conn, $_SESSION['phoneNumber']);
        $faculty        =  mysqli_real_escape_string($conn, $_SESSION['faculty']);
        $message        =  mysqli_real_escape_string($conn, $_POST['message']);

        $sql = "INSERT INTO patiants (name, email, phonenumber, description, faculty)
        VALUES ('$name', '$email' , '$phoneNumber', '$message', '$faculty')";
        $result = mysqli_query($conn, $sql);
        echo "Works!";
    }
?>