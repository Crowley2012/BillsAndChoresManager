<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include 'bills_sql.php';

	session_start();

	//rebuildHouse();
	//rebuildElectric();
	//rebuildInternet();
	rebuildWater();
	rebuildGarbage();
	rebuildGas();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1"/>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" href="bills.css" type="text/css"/>
    <script type="text/javascript" src="bills.js"></script>

	<title>Cadwell Bills</title>
</head>
<body>
	<div id="bill_main_div">
		<div class="bill_div">
			<h2 id="banner_title">422 Cadwell Northwest Avenue</h2>
		</div>
	
		<div class="bill_div">
			<h2>House</h2>
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
			<h2>Electric</h2>
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
			<h2>Internet</h2>
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
			<h2>Water</h2>
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
			<h2>Garbage</h2>
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
			<h2>Gas</h2>
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
