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

function printTableHouse(){
	$sql = "SELECT * FROM house";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

			//echo '<form name="voteForm" method="post">';

			if($row["paid"] == 0){
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox' id='", $row["name"] ,"'></td></tr>";
			}else{
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox' id='", $row["name"] ,"'checked></td></tr>";
			}

			//echo '</form>';

		}
	} else {
		echo "0 results";
	}

	$conn->close();
}

//ELECTRIC BILL

function createTableElectric(){
	$sql = "create table if not exists electric(name varchar(30), price varchar(30), paid int(1), PRIMARY KEY (name))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildElectric(){
	$sql = "drop table electric";
	$conn = connect();
	$result = $conn->query($sql);

	createTableElectric();
	addDummyElectric();

	$conn->close();
}

function insertElectric($name, $price, $paid){
	$conn = connect();
	$sql = "insert into electric(name, price, paid) values ('$name', '$price', $paid)";
	$result = $conn->query($sql);

	$conn->close();
}

function addDummyElectric(){
	insertElectric("Sean", "$57.36", 1);
	insertElectric("Don", "$57.36", 0);
	insertElectric("Norm", "$57.36", 0);
	insertElectric("Nesh", "$57.36", 0);
	insertElectric("Mariam", "$57.36", 1);
	insertElectric("JD", "$57.36", 0);
}

function displayAllElectric(){
	$sql = "SELECT * FROM electric";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<p>", $row["name"], "<br/>", $row["price"], "<br/>Submitted by : ", $row["paid"], "</p>";
		}
	}

	$conn->close();
}

function printTableElectric(){
	$sql = "SELECT * FROM electric";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["paid"] == 0){
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox'></td></tr>";
			}else{
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox' checked></td></tr>";
			}
		}
	} else {
		echo "0 results";
	}

	$conn->close();
}

//INTERNET BILL

function createTableInternet(){
	$sql = "create table if not exists internet(name varchar(30), price varchar(30), paid int(1), PRIMARY KEY (name))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildInternet(){
	$sql = "drop table internet";
	$conn = connect();
	$result = $conn->query($sql);

	createTableInternet();
	addDummyInternet();

	$conn->close();
}

function insertInternet($name, $price, $paid){
	$conn = connect();
	$sql = "insert into internet(name, price, paid) values ('$name', '$price', $paid)";
	$result = $conn->query($sql);

	$conn->close();
}

function addDummyInternet(){
	insertInternet("Sean", "$6.50", 0);
	insertInternet("Don", "$6.50", 0);
	insertInternet("Norm", "$6.50", 0);
	insertInternet("Nesh", "$6.50", 1);
	insertInternet("Mariam", "$6.50", 1);
	insertInternet("JD", "$6.50", 1);
}

function displayAllInternet(){
	$sql = "SELECT * FROM internet";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<p>", $row["name"], "<br/>", $row["price"], "<br/>Submitted by : ", $row["paid"], "</p>";
		}
	}

	$conn->close();
}

function printTableInternet(){
	$sql = "SELECT * FROM internet";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["paid"] == 0){
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox'></td></tr>";
			}else{
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox' checked></td></tr>";
			}
		}
	} else {
		echo "0 results";
	}

	$conn->close();
}

//WATER BILL

function createTableWater(){
	$sql = "create table if not exists water(name varchar(30), price varchar(30), paid int(1), PRIMARY KEY (name))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildWater(){
	$sql = "drop table water";
	$conn = connect();
	$result = $conn->query($sql);

	createTableWater();
	addDummyWater();

	$conn->close();
}

function insertWater($name, $price, $paid){
	$conn = connect();
	$sql = "insert into water(name, price, paid) values ('$name', '$price', $paid)";
	$result = $conn->query($sql);

	$conn->close();
}

function addDummyWater(){
	insertWater("Sean", "$7.77", 1);
	insertWater("Don", "$7.77", 1);
	insertWater("Norm", "$7.77", 1);
	insertWater("Nesh", "$7.77", 0);
	insertWater("Mariam", "$7.77", 0);
	insertWater("JD", "$7.77", 0);
}

function displayAllWater(){
	$sql = "SELECT * FROM water";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<p>", $row["name"], "<br/>", $row["price"], "<br/>Submitted by : ", $row["paid"], "</p>";
		}
	}

	$conn->close();
}

function printTableWater(){
	$sql = "SELECT * FROM water";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["paid"] == 0){
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox'></td></tr>";
			}else{
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox' checked></td></tr>";
			}
		}
	} else {
		echo "0 results";
	}

	$conn->close();
}

//GARBAGE BILL

function createTableGarbage(){
	$sql = "create table if not exists garbage(name varchar(30), price varchar(30), paid int(1), PRIMARY KEY (name))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildGarbage(){
	$sql = "drop table garbage";
	$conn = connect();
	$result = $conn->query($sql);

	createTableGarbage();
	addDummyGarbage();

	$conn->close();
}

function insertGarbage($name, $price, $paid){
	$conn = connect();
	$sql = "insert into garbage(name, price, paid) values ('$name', '$price', $paid)";
	$result = $conn->query($sql);

	$conn->close();
}

function addDummyGarbage(){
	insertGarbage("Sean", "$3.43", 0);
	insertGarbage("Don", "$3.43", 0);
	insertGarbage("Norm", "$3.43", 0);
	insertGarbage("Nesh", "$3.43", 0);
	insertGarbage("Mariam", "$3.43", 0);
	insertGarbage("JD", "$3.43", 0);
}

function displayAllGarbage(){
	$sql = "SELECT * FROM garbage";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<p>", $row["name"], "<br/>", $row["price"], "<br/>Submitted by : ", $row["paid"], "</p>";
		}
	}

	$conn->close();
}

function printTableGarbage(){
	$sql = "SELECT * FROM garbage";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["paid"] == 0){
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox'></td></tr>";
			}else{
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox' checked></td></tr>";
			}
		}
	} else {
		echo "0 results";
	}

	$conn->close();
}

//GAS BILL

function createTableGas(){
	$sql = "create table if not exists gas(name varchar(30), price varchar(30), paid int(1), PRIMARY KEY (name))";
	$conn = connect();
	$result = $conn->query($sql);

	$conn->close();
}

function rebuildGas(){
	$sql = "drop table gas";
	$conn = connect();
	$result = $conn->query($sql);

	createTableGas();
	addDummyGas();

	$conn->close();
}

function insertGas($name, $price, $paid){
	$conn = connect();
	$sql = "insert into gas(name, price, paid) values ('$name', '$price', $paid)";
	$result = $conn->query($sql);

	$conn->close();
}

function addDummyGas(){
	insertGas("Sean", "$12.03", 1);
	insertGas("Don", "$12.03", 1);
	insertGas("Norm", "$12.03", 1);
	insertGas("Nesh", "$12.03", 1);
	insertGas("Mariam", "$12.03", 1);
	insertGas("JD", "$12.03", 1);
}

function displayAllGas(){
	$sql = "SELECT * FROM gas";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<p>", $row["name"], "<br/>", $row["price"], "<br/>Submitted by : ", $row["paid"], "</p>";
		}
	}

	$conn->close();
}

function printTableGas(){
	$sql = "SELECT * FROM gas";
	$conn = connect();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["paid"] == 0){
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox'></td></tr>";
			}else{
				echo "<tr><td>", $row["name"], "</td><td>", $row["price"], "</td><td><input class='bill_check' type='checkbox' checked></td></tr>";
			}
		}
	} else {
		echo "0 results";
	}

	$conn->close();
}
?>
