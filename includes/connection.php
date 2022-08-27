<?php
    $conn = mysqli_connect('localhost', 'root', '', 'hospital-system-app');

    if(!$conn)
    {
        echo "please check your database connection";
    }
?>