<?php
    $conn = mysqli_connect('localhost', 'root', '', 'hospital-system-app');
    $id = $_POST['pID'];
    if(isset($_POST['aprove']))
    {
        $sql = "UPDATE `patiants` SET `requestState`='approved' WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        header('location: ../dashboard-admin.php');
    }
    if(isset($_POST['disaprove']))
    {
        $sql = "UPDATE `patiants` SET `requestState`='disapproved' WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        header('location: ../dashboard-admin.php');
    }
?>