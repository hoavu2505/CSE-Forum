<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "forum";

    $conn = mysqli_connect($host,$username,$pass,$db);
    if(!$conn)
    {
        echo "Can't Connect";
    }
?>