<?php

    $Title    = $_POST['title'];
    $First    = $_POST['first'];
    $Middle   = $_POST['middle'];
    $Last     = $_POST['last'];
    $Address1 = $_POST['address1'];
    $Address2 = $_POST['address2'];
    $Address3 = $_POST['address3'];
    $City     = $_POST['city'];
    $State    = $_POST['state'];
    $Postal   = $_POST['postal'];
    $Province = $_POST['province'];
    $Vendor   = $_POST['vendor'];
    $Gender   = $_POST['gender'];
    $Phone    = $_POST['phone'];
    $DialCode = $_POST['dial'];
    $Altphone = $_POST['altphone'];
    $Service  = $_POST['service'];
    $Email    = $_POST['email'];
    $Comment  = $_POST['comment'];


    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vici";
   
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
   
    
    if (mysqli_connect_error())
    {
  		echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    else
    {
        $sql = " INSERT INTO userdetail (Title, First, Middle, Last, Address1, Address2, Address3, City, State, Postal, Province, 
                                            Vendor, Gender, Phone, DialCode, Altphone, Service, Email, Comment)
        VALUES ('$Title', '$First', '$Middle','$Last', '$Address1','$Address2','$Address3','$City','$State','$Postal',
                '$Province','$Vendor','$Gender','$Phone','$Altphone','$DialCode','$Service','$Email','$Comment')";

        if($conn->query($sql) )
        {
            echo "Recorded Inserted Successfull";
            echo "<script> window.location.assign('Userdataretrive.php'); </script>";
        }
        else 
        {
            echo " Insertion Error !!! ";
        }
        $conn->close();
    }  
?>