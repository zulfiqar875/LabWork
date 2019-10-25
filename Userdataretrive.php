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
        margin-left: 450px;
        margin-right: 400px;
        border-top-color: brown;
        border-bottom-color: brown;
        border-left-color: green;
        border-right-color: green;
        border: solid;
        border: 1px;
        border-right: 2px;
        border-left: 2px;
    }
    hr{
        margin-left: 400px;
        margin-right: 370px;
        border-color:red;   
    }
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
            margin-top: 20px;
            width: 480px;
            height: 480px;
            border: solid;
            padding: 50px;
            margin-right: 500px;
            border-color: whitesmoke;
            padding: 5px;
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
            margin-left:35px;
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
        width:550px;
        height:550px;
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
            <button class="open" onclick="document.getElementById('popup').style.display='block'"> Update </button>
                <div id="popup">
                    <form action="Update.php" method="POST">
                        <div class="text">
                            <h1> <p>Update the Record</h1>

                            <label class="Fline" for="Title">Title:</label>
                            <input class="ttext" type="text" name="title" id="title">
                            <label class="fline" for="First">First:</label>
                            <input class="ftext" type="text" name="first" id="first"> <br>
                            <label class="fline" for="MI"> MI:</label>
                            <input class="mtext" type="text" name="middle" id="mi" >
                            <label class="fline" for="Last">Last:</label>
                            <input class="ltext" type="text" name="last" id="last"> <br>
                            <label class="Aline" for="Title"> <b> Address1: </b> </label>
                            <input class="Atext" type="text" name="address1" id="address1"><br>
                            <label class="Aline2" for="Title">Address2:</label>
                            <input class="Atext2" type="text" name="address2" id="address2">
                            <label class="Aline3" for="Title">Address3:</label>
                            <input class="Atext3" type="text" name="address3" id="address3"> <br>
                            <label class="city" for="City">City:</label>
                            <input class="ctext" type="text" name="city" id="ctext">
                            <label class="zline" for="State">State:</label>
                            <input class="state" type="text" name="state" id="stext">
                            <label class="zline" for="postal">Postal code:</label>
                            <input class="postal" type="text" name="postal" id="postal"> <br>
                            <label class="prov" for="State">Province:</label>
                            <input class="provi" type="text" name="province" id="stext">
                            <label class="zline" for="State">Gender:</label>
                            <select name="gender">
                                <option value="Undefined" name="gender" >U-Undefined</option>
                                <option value="Male" name="gender" >Male</option>
                                <option value="Female" name="gender" >Female</option>
                                </select> <br>

                            <label class="phone" for="State">Phone:</label>
                            <input class="ph" type="text" name="phone" id="stext">
                            <label class="zline" for="State">DialCode:</label>
                            <input class="dialcode" type="text" name="dial" id="stext">
                            <label class="zline" for="State">Alt.phone:</label>
                            <input class="alt" type="text" name="altphone" id="altphone"><br>
                            <label class="show" for="State">service:</label>
                            <input class="sho" type="text" name="service" id="stext">
                            <label class="zline" for="State">Email:</label>
                            <input class="email" type="text" name="email" id="stext"> <br>
                            <label class="comm" for="State">Comment:</label>
                            <input class="comment" type="text" name="comment" id="stext"> <br><br>

                            <input type="submit" value="Update" style="margin-left: 145px; margin-top: 10px; background-color:rgb(43, 180, 235); width:70px; height: 35px; border: rgb(43, 180, 235); color: white; cursor: pointer;">
                        </div>
                    </form>
                    <button class="hide" onclick="document.getElementById('popup').style.display='none'"> X </button>
                </div>
        </div>
    <!-- </form> -->
    <hr>
</body> 
</body>
</html>
<?php
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "vici";
        
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

    $ret = mysqli_query($conn,"SELECT * FROM userdetail ORDER BY SN DESC limit 1");
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

                    echo "<td>" .$row ['Title'].    "</td>";
                    echo "<td>" .$row ['First'].    "</td>";
                    echo "<td>" .$row ['Middle'].   "</td>";
                    echo "<td>" .$row ['Last'].     "</td>";
                    echo "<td>" .$row ['Address1']. "</td>";
                    echo "<td>" .$row ['Address2']. "</td>";
                    echo "<td>" .$row ['Address3']. "</td>";
                    echo "<td>" .$row ['City'].     "</td>";
                    echo "<td>" .$row ['State'].    "</td>";
                    echo "<td>" .$row ['Postal'].   "</td>";
                    echo "<td>" .$row ['Province']. "</td>";
                    echo "<td>" .$row ['Vendor'].   "</td>";
                    echo "<td>" .$row ['Gender'].   "</td>";
                    echo "<td>" .$row ['Phone'].    "</td>";
                    echo "<td>" .$row ['DialCode']. "</td>";
                    echo "<td>" .$row ['Altphone']. "</td>";
                    echo "<td>" .$row ['Service'].  "</td>";
                    echo "<td>" .$row ['Email'].    "</td>";
                    echo "<td>" .$row ['Comment'].  "</td>";


                echo "</tr>";
            }
        echo "</tr>";
    echo "</table>";
    $conn->close();
?>