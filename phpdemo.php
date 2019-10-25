<?php

    $Title    = $_POST['fname'];
    $First    = $_POST['uname'];
    $Middle   = $_POST['gender'];

    $localhost = "localhost";
    $dbusername= "root";
    $dbpassword= "";
    $dbname = "phpdemo";
    
    $conn = new mysqli ($localhost, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error())
    {
        echo "here is error";
    }
    else {
        $sql = "INSERT INTO record (Fname, Uname, Gender) 
        VALUES ('$Title', '$First', '$Middle')";

        if($conn->query($sql))
        {
            echo "record insert Sucessfull";
        }
        else {
            echo "failed check the qurey";
        }
        $conn->close();
    }
?>