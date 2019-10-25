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
    else{
        // $fet = "SELECT * FROM userdetail ORDER BY Vendor DESC LIMIT 1";
        // {
        //     if ($conn->query($fet))
            // {
                $upd = " UPDATE userdetail SET Title = '$Title', First = '$First', Middle = '$Middle', Last = '$Last', Address1 = '$Address1', Address2 = '$Address2', Address3 = '$Address3', City = '$City', State = '$State', Postal = '$Postal', Province = '$Province', Gender = '$Gender', Phone = '$Phone', DialCode = '$DialCode', Altphone = '$Altphone', Service = '$Service', Email = '$Email', Comment = '$Comment' 
                WHERE SN = (SELECT MAX(SN)  FROM userdetail)";
                
                if ($conn->query($upd))
                {
                    echo "Record will update";
                    echo "<script> window.location.assign('Userdataretrive.php'); </script>";
                }
                else {
                    {
                        echo "Updating Error !!! " .$conn->error; 
                    }
                }
            // }
            $conn->close();
        // }
    }  
?>