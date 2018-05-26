

<?php 
	$name = $_GET['coffeeName']; 
	$address = $_GET['coffeeAddress']; 
	$phone = $_GET['coffeePhone']; 
	$email = $_GET['coffeeEmail'];


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
	$sql2 = "SELECT * FROM coffeshops ORDER BY coffe_shop_reg_date DESC LIMIT 1";
	$result = $conn->query($sql2);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row['id'];
		}
	}else{
		echo "ERROR";
	}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>