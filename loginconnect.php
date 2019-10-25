<?php
  
    $username = $_POST['user'];
    $password  = $_POST['password'];

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vici";
   
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
   
    
    if (mysqli_connect_error())
    {
  		echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    else{

        if(($username == "Admin" && $password == "Admin") )
        {
            $sql = "INSERT INTO useraccount (username, password)
            VALUES ('$username','$password')";
                

            if ($conn->query($sql))
            {
                echo "New record is inserted successfully";
                // echo "<script> window.location.assign('dataretrive.php'); </script>";
                
            }
            else {
                {
                    echo "Error Inserting record Witch"; 
                }
            }
            $conn->close();
        }
       
        else
        {
            echo "incorrect Uername or Password";
        }
    }  
?>