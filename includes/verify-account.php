<?php

    include 'creating-users.php';
    if (isset($_POST['verify']))
    {
        $codeEnter = $_Post['code-verify'];
        if ($codeEnter == $verfyCode)
        {
            $sql = "INSERT INTO users (name, username, password, email, gender, faculty, phonenumber) VALUES ('$name', '$username' , '$password', '$email', '$gender', '$faculty ', '$phoneNumber')";
            $result = mysqli_query($conn, $sql);
            header('Location: index.php');
        }
        else
        {
            echo '<div style="color: red">Please check the code you entered</div>';
        }
    }
?>