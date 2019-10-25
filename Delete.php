<?php
  
    $Username = $_POST['username'];
    $Lastname  = $_POST['lastname'];

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
        $del = " DELETE from userdetail WHERE Middle = '$Username' && Last = '$Lastname' ";
                

            if ($conn->query($del))
            {
                echo "Your Record Delete Successfully";
                echo "<script> window.location.assign('dataretrive.php'); </script>";
                
            }
            else {
                {
                    echo "Error to deleting record "; 
                }
            }
            $conn->close();
    }  
?>