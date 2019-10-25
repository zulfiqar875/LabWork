<?php
    $tittle = $_POST['title'];
    $first  = $_POST['first'];
    $middle = $_POST['middle'];
    $last  = $_POST['last'];
    $address1  = $_POST['address1'];
    $address2  = $_POST['address2'];
    $address3  = $_POST['address3'];
    $city  = $_POST['city'];
    $state  = $_POST['state'];
    $postal  = $_POST['postal'];
    $prov  = $_POST['Province'];
    $vendor  = $_POST['vendor'];
    $gender  = $_POST['gender'];
    $phone  = $_POST['phone'];
    $dial  = $_POST['dial'];
    $altphone  = $_POST['altphone'];
    $service  = $_POST['show'];
    $email  = $_POST['email'];
    $comment  = $_POST['comment'];

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vici";
     
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
     
     
    if (mysqli_connect_error()){
        echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    else {
         
        $sql = "INSERT INTO accountinfo (ID, Tittle, First, Mid, Last, Address1, Address2, Address3, city, state, postal, provinces, vendor, gender, phone, dial, altphone, service, email, comment)
        VALUES ('1','$tittle', '$first', '$middle', '$last', '$address1','$address2','$address3', '$city','$state','$postal','$prov','$vendor','$gender','$phone','$dial','$altphone','$service','$email','$comment')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
        }
        else 
        {
            
            echo "Error Inserting record !!! ";
            
        }
        $conn->close();
    }
?>