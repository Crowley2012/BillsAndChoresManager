<?php

//SQL CONNECTION

function connect(){
	$servername = "127.0.0.1";
	$username = "crowleys";
	$password = "crowleys";
	$dbname = "crowleys";
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		echo "ERROR : Connected unsuccessfully<br /><br />";
		die("Connection failed: " . $conn->connect_error);
	} 

	return $conn;
}

//UPDATE CHECKMARK

$table = $_GET['table'];
$name = $_GET['name'];
$check = $_GET['check'];

if($check){
	$conn = connect();
	$sql = "UPDATE $table SET paid = 1 WHERE name = '$name'";
	$result = $conn->query($sql);
	$conn->close();
}else{
	$conn = connect();
	$sql = "UPDATE $table SET paid = 0 WHERE name = '$name'";
	$result = $conn->query($sql);
	$conn->close();
}
?>
