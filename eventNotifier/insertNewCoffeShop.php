

<?php 
	$name = $_REQUEST['coffeeName']; 
	$address = $_REQUEST['coffeeAddress']; 
	$phone = $_REQUEST['coffeePhone']; 
	$email = $_REQUEST['coffeeEmail'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventnotifier";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO coffeshops(coffe_shop_name, coffe_shop_address, coffe_shop_phone, coffe_shop_email) 
VALUES ( ".'"'."$name".'"'." , ".'"'." $address ".'"'.", ".'"'." $phone ".'"'." , ".'"'." $email ".'"'.")";

//echo $sql; 


if ($conn->query($sql) === TRUE) {
	echo "OK";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>