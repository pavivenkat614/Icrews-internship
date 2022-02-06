<?php
    $conn = mysqli_connect("localhost", "root", "", "login1-pavi");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
?>