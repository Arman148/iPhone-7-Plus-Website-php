<?php
    $conn = mysqli_connect('localhost', 'root', '', 'coments');

    if (!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }
?>