<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include 'bills_sql.php';

	session_start();

	//rebuildHouse();
	//rebuildElectric();
	//rebuildInternet();
	//rebuildWater();
	//rebuildGarbage();
	//rebuildGas();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1"/>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" href="bills.css" type="text/css"/>
	<script src="jquery-3.1.1.min.js"></script>
    <script src="bills.js"></script>
	<title>Cadwell Bills</title>
</head>

<body>
	<div id="bill_main_div">
		<div class="bill_div">
			<h2 id="banner_title">422 Cadwell Northwest Avenue</h2>
		</div>
	
		<div class="bill_div">
			<div class="bill_buttons_div">
				<h2>House
				<input type="image" src="images/plus.png" alt="Submit" width="36" height="36" table="house" class="plus_button">
				<input type="image" src="images/minus.png" alt="Submit" width="36" height="36" table="house" class="minus_button">
				<input type="image" src="images/money.png" alt="Submit" width="36" height="36" table="house" class="money_button">
				</h2>
			</div>
			<div class="bill_input_div" id="input_add">
				<input id="input_add" type="text" table="house" placeholder="Who Do You Want To Add?">
			</div>
			<div class="bill_input_div" id="input_remove">
				<input type="text" table="house" placeholder="Who Do You Want To Remove?">
			</div>
			<div class="bill_input_div" id="input_price">
				<input type="text" table="house" placeholder="Total Price Of House Bill">
			</div>
			<table class="bill_table">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Paid</th>
				</tr>
				<?php printTableHouse(); ?>
			</table>
		</div>
		
		<div class="bill_div">
			<div class="bill_buttons_div">
			<h2>Electric
				<input type="image" src="images/plus.png" alt="Submit" width="36" height="36" table="house" class="plus_button">
				<input type="image" src="images/minus.png" alt="Submit" width="36" height="36" table="house" class="minus_button">
				<input type="image" src="images/money.png" alt="Submit" width="36" height="36" table="house" class="money_button">
				</h2>
			</div>
			<table class="bill_table">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Paid</th>
				</tr>
				<?php printTableElectric(); ?>
			</table>
		</div>
		
		<div class="bill_div">
			<div class="bill_buttons_div">
			<h2>Internet
				<input type="image" src="images/plus.png" alt="Submit" width="36" height="36" table="house" class="plus_button">
				<input type="image" src="images/minus.png" alt="Submit" width="36" height="36" table="house" class="minus_button">
				<input type="image" src="images/money.png" alt="Submit" width="36" height="36" table="house" class="money_button">
				</h2>
			</div>
			<table class="bill_table">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Paid</th>
				</tr>
				<?php printTableInternet(); ?>
			</table>
		</div>
		
		<div class="bill_div">
			<div class="bill_buttons_div">
			<h2>Water
				<input type="image" src="images/plus.png" alt="Submit" width="36" height="36" table="house" class="plus_button">
				<input type="image" src="images/minus.png" alt="Submit" width="36" height="36" table="house" class="minus_button">
				<input type="image" src="images/money.png" alt="Submit" width="36" height="36" table="house" class="money_button">
				</h2>
			</div>
			<table class="bill_table">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Paid</th>
				</tr>
				<?php printTableWater(); ?>
			</table>
		</div>
		
		<div class="bill_div">
			<div class="bill_buttons_div">
			<h2>Garbage
				<input type="image" src="images/plus.png" alt="Submit" width="36" height="36" table="house" class="plus_button">
				<input type="image" src="images/minus.png" alt="Submit" width="36" height="36" table="house" class="minus_button">
				<input type="image" src="images/money.png" alt="Submit" width="36" height="36" table="house" class="money_button">
				</h2>
			</div>
			<table class="bill_table">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Paid</th>
				</tr>
				<?php printTableGarbage(); ?>
			</table>
		</div>
		
		<div class="bill_div">
			<div class="bill_buttons_div">
			<h2>Gas
				<input type="image" src="images/plus.png" alt="Submit" width="36" height="36" table="house" class="plus_button">
				<input type="image" src="images/minus.png" alt="Submit" width="36" height="36" table="house" class="minus_button">
				<input type="image" src="images/money.png" alt="Submit" width="36" height="36" table="house" class="money_button">
				</h2>
			</div>
			<table class="bill_table">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Paid</th>
				</tr>
				<?php printTableGas(); ?>
			</table>
		</div>
	</div>
</body>
</html>
