<?php
    $host       = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname     = "phpdemo";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error($conn))
    {
        echo "failed Error";
    }
    else {
        echo "Passed";
    }
?>