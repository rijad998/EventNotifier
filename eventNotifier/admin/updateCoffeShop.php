<?php 
    
    $id = $_GET['id']; 
    $name = $_GET['name']; 
    $address = $_GET['address']; 
    $phone = $_GET['phone']; 
    $email = $_GET['email'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eventnotifier";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    
    $sql = "UPDATE coffeshops 
            SET coffe_shop_name = '" . $name . "',
            coffe_shop_address = '" . $address . "', 
            coffe_shop_phone ='" .  $phone . "', 
            coffe_shop_email = '" . $email . "'
            WHERE id = " . $id;

    echo $sql; 


    if ($conn->query($sql) === TRUE) {
    	echo "<br>OK<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>