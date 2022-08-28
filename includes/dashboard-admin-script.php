<?php
    $conn = mysqli_connect('localhost', 'root', '', 'hospital-system-app');
    $id = $_POST['pID'];
    if(isset($_POST['approve']))
    {
        $sql = "UPDATE `patiants` SET `requestState`='approved' WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        header('location: ../dashboard-admin.php');
    }
    if(isset($_POST['disapprove']))
    {
        $sql = "UPDATE `patiants` SET `requestState`='disapproved' WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        header('location: ../dashboard-admin.php');
    }
?>