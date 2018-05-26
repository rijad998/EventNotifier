<?php 
$id = $_POST['idValue'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventnotifier";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM coffeshops WHERE id = $id";

if ($conn->query($sql) === TRUE) {
	echo "OK";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>