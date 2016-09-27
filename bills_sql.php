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

//HOUSE BILL

function createTableHouse(){
	$sql = "create table if not exists house(name varchar(30), price varchar(30), paid int(1), PRIMARY KEY (name))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildHouse(){
	$sql = "drop table house";
	$conn = connect();
	$result = $conn->query($sql);

	createTableHouse();
	addDummyHouse();

	$conn->close();
}

function insertHouse($name, $price, $paid){
	$conn = connect();
	$sql = "insert into house(name, price, paid) values ('$name', '$price', $paid)";
	$result = $conn->query($sql);

	$conn->close();
}

function addDummyHouse(){
	insertHouse("Sean", "$34.00", 0);
	insertHouse("Don", "$34.00", 1);
	insertHouse("Norm", "$34.00", 1);
	insertHouse("Nesh", "$34.00", 0);
	insertHouse("Mariam", "$34.00", 0);
	insertHouse("JD", "$34.00", 1);
}

function displayAllHouse(){
	$sql = "SELECT * FROM house";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<p>", $row["name"], "<br/>", $row["price"], "<br/>Submitted by : ", $row["paid"], "</p>";
		}
	}

	$conn->close();
}

function printAllHouse(){
	$sql = "SELECT * FROM house";
	$conn = connect();
	$result = $conn->query($sql);

	echo "<center><table width='50%'>";
	echo "<tr><th>Name</th><th>Price</th><th>Paid</th></tr>";

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td>", $row["paid"],  "</td></tr>";	
		}
	} else {
		echo "0 results";
	}

	echo "</table></center>";

	$conn->close();
}

//VOTES

function createTableVotes(){
	$sql = "create table if not exists votes(id int(30), email varchar(30), PRIMARY KEY (id, email))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildVotes(){
	$sql = "drop table votes";
	$conn = connect();
	$result = $conn->query($sql);

	createTableVotes();
	addDummyVotes();

	$conn->close();
}

function insertVotes($id, $email){
	$conn = connect();

	$sqlCheck = "select * from votes where id = $id and email='$email'";
	$result = $conn->query($sqlCheck);

	if ($result->num_rows > 0) {
		$sql = "delete from votes where id = $id and email='$email'";
		$result = $conn->query($sql);
	}else{
		$sql = "insert into votes(id, email) values ('$id', '$email')";
		$result = $conn->query($sql);
	}

	$conn->close();
}

function addDummyVotes(){
	insertVotes("1", "admin");
	insertVotes("2", "admin");
	insertVotes("5", "admin");
	insertVotes("2", "crowley.p.sean@gmail.com");
	insertVotes("5", "crowley.p.sean@gmail.com");
	insertVotes("4", "test@gmail.com");
	insertVotes("3", "test@gmail.com");
	insertVotes("5", "test@gmail.com");
}

function printAllVotes(){
	$sql = "SELECT * FROM votes";
	$conn = connect();
	$result = $conn->query($sql);

	echo "<center><table id='sqltable' width='50%'>";
	echo "<tr><th>ID</th><th>Email</th></tr>";

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>", $row["id"], "</td><td>", $row["email"], "</td></tr>";	
		}
	} else {
		echo "0 results";
	}

	echo "</table></center>";

	$conn->close();
}

function getVotes($id){
	$sql = "SELECT count(*) as total FROM votes WHERE id = $id";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();

	return $result->fetch_assoc()['total'];
}

//USERS

function createTableUsers(){
	$sql = "create table if not exists users(email varchar(30), name varchar(30), password varchar(30), admin int(1), PRIMARY KEY (email))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildUsers(){
	$sql = "drop table users";
	$conn = connect();
	$result = $conn->query($sql);

	createTableUsers();
	addDummyUsers();

	$conn->close();
}

function insertUsers($email, $name, $password, $admin){
	$conn = connect();
	$sql = "insert into users(email, name, password, admin) values ('$email', '$name', '$password', '$admin')";
	$result = $conn->query($sql);

	$conn->close();
}

function addDummyUsers(){
	insertUsers("admin", "Admin", "asdf", 1);
	insertUsers("crowley.p.sean@gmail.com", "Sean Crowley", "asdf", 0);
	insertUsers("test@gmail.com", "Test Account", "asdf", 0);
}

function printAllUsers(){
	$sql = "SELECT * FROM users";
	$conn = connect();
	$result = $conn->query($sql);

	echo "<center><table id='sqltable' width='50%'>";
	echo "<tr><th>Email</th><th>Name</th><th>Password</th><th>Admin</th></tr>";

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>", $row["email"], "</td><td>", $row["name"], "</td><td>", $row["password"],  "</td><td>", $row["admin"], "</td></tr>";	
		}
	} else {
		echo "0 results";
	}

	echo "</table></center>";

	$conn->close();
}
?>
