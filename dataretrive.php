<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>UserInfo</title>
</head>
<style>
    .head{
        text-align: center;
        font-size: 20px;
        color: chocolate;
    }
    hr{
        margin-left: 400px;
        margin-right: 370px;
        border-color:red;   

    }
    .text{
            margin-left: 30px;
            margin-top: 40px;
            width: 330px;
            height: 200px;
            border: solid;
            padding: 50px;
            margin-right: 500px;
            border-color: whitesmoke;
            padding-top: 20px;
            font-size: 20px;
            background: transparent;
            font-family: Calibri;
            border-radius: 30px;
            
        }
        h1{
            text-align: center;
            font: bold;
            font-size: 20px;
            margin-bottom: 30px; 
        }
        .round{
            text-align: center;
            border-radius: 10px;
        }
        .user{
            margin-left: 30px;
        }
        .submit{
            margin-left: 5520px;
        }
        .last{
            margin-left:55px;
        }
    .open{
        margin-left: 500px;
        background-color:rgb(43, 180, 235); 
        width:100px; 
        height: 35px; 
        border: rgb(43, 180, 235); 
        border-radius: 15px;
        
        color: white; 
        cursor: pointer;"
    }
    #popup{
        margin-left: 500px;
        border: 1px solid black;
        border-radius: 20px;
        width:500px;
        height:350px;
        background: orange;
        display:none;
    }

</style>
<body>
    <div class="head">
        <h1>User-Information</h1> <br>
    </div>
    <hr>
    <!-- <form action="Task2.html" method="POST"> -->
    
        <div>
            <!-- <input class="delete" type="submit" value="Delete" > -->
            <button class="open" onclick="document.getElementById('popup').style.display='block'"> Delete </button>
                <div id="popup">
                    <form action="Delete.php" method="POST">
                        <div class="text">
                            <h1> <p>Delete the Record</h1>

                            <label class="user" for="Username">Middlename:</label>
                            <input class="round" type="text" name="username" placeholder="Middlenanme" required style="margin-left: 3px; height:23px; margin-bottom: 5px" > <br>
                            
                            <label class="last" for="Password">Lastname:</label>
                            <input class="round" type="text" name="lastname" placeholder="Lastname" required style="height:23px"> <br>

                            <input type="submit" value="Delete" style="margin-left: 145px; margin-top: 10px; background-color:rgb(43, 180, 235); width:70px; height: 35px; border: rgb(43, 180, 235); color: white; cursor: pointer;">
                        </div>
                    </form>
                    <button class="hide" onclick="document.getElementById('popup').style.display='none'"> X </button>
                </div>
        </div>
    <!-- </form> -->
    <hr>
</body> 
</html>
<?php
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vici";
        
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

    $ret = mysqli_query($conn,"SELECT * FROM userdetail");
    echo "<table border='1'>";
        echo "<tr>";
            echo "<th> Tittle </th>";
            echo "<th> First </th>";
            echo "<th> Middle </th>";
            echo "<th> Last </th>";
            echo "<th> Address1 </th>";
            echo "<th> Address2 </th>";
            echo "<th> Address3 </th>";
            echo "<th> City </th>";
            echo "<th> State </th>";
            echo "<th> Postal </th>";
            echo "<th> Province </th>";
            echo "<th> Vendor </th>";
            echo "<th> Gender </th>";
            echo "<th> Phone </th>";
            echo "<th> DialCode </th>";
            echo "<th> Alt-phone </th>";
            echo "<th> Service </th>";
            echo "<th> Email </th>";
            echo "<th> Comment </th>";

            while($row=mysqli_fetch_array($ret))
            {
                echo "<tr>";
                // echo "<td height: auto>";
                    echo "<td>" .$row ['Title']. "</td>";
                    echo "<td>" .$row ['First']. "</td>";
                    echo "<td>" .$row ['Middle']. "</td>";
                    echo "<td>" .$row ['Last']. "</td>";
                    echo "<td>" .$row ['Address1']. "</td>";
                    echo "<td>" .$row ['Address2']. "</td>";
                    echo "<td>" .$row ['Address3']. "</td>";
                    echo "<td>" .$row ['City']. "</td>";
                    echo "<td>" .$row ['State']. "</td>";
                    echo "<td>" .$row ['Postal']. "</td>";
                    echo "<td>" .$row ['Province']. "</td>";
                    echo "<td>" .$row ['Vendor']. "</td>";
                    echo "<td>" .$row ['Gender']. "</td>";
                    echo "<td>" .$row ['Phone']. "</td>";
                    echo "<td>" .$row ['DialCode']. "</td>";
                    echo "<td>" .$row ['Altphone']. "</td>";
                    echo "<td>" .$row ['Service']. "</td>";
                    echo "<td>" .$row ['Email']. "</td>";
                    echo "<td>" .$row ['Comment']. "</td>";

                // echo "</td>";
                echo "</tr>";
            }
        echo "</tr>";
    echo "</table>";
    $conn->close();
?>