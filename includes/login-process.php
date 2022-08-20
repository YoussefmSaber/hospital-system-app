<?php
        if (isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1)
        {
            header('location: index.php');
            exit();
        }
        echo '<p style="color: red">Enter correct data</p>';
    }
?>