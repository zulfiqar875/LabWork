<?php
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vici";
        
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

    $ret = mysqli_query($conn,"SELECT * FROM demo");

    echo "<table border='1'>";
        echo "<tr>";
            echo "<th> ID </th>";
            echo "<th> Username </th>";
            echo "<th> Password </th>";
          

            while($row=mysqli_fetch_array($ret))
            {
                echo "<tr>";
                    echo "<td>" .$row ['ID']. "</td>";
                    echo "<td>" .$row ['UserName']. "</td>";
                    echo "<td>" .$row ['Password']. "</td>";

                echo "/tr";
            }
        echo "</tr>";
    echo "</table>";
    $conn->close();
?>