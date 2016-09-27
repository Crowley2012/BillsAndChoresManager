<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include 'bills_sql.php';

	session_start();

	rebuildHouse();
	printAllHouse();
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
			
			<table>
				<tr>
					<td>
						<p>DATA1</p>
					</td>
					<td>
						<p>DATA2</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>DATA3</p>
					</td>
					<td>
						<p>DATA4</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>DATA5</p>
					</td>
					<td>
						<p>DATA6</p>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="bill_div">
			<h2>Electric</h2>
			
			<table>
				<tr>
					<td>
						<p>DATA1</p>
					</td>
					<td>
						<p>DATA2</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>DATA3</p>
					</td>
					<td>
						<p>DATA4</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>DATA5</p>
					</td>
					<td>
						<p>DATA6</p>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="bill_div">
			<h2>Internet</h2>
			
			<table>
				<tr>
					<td>
						<p>DATA1</p>
					</td>
					<td>
						<p>DATA2</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>DATA3</p>
					</td>
					<td>
						<p>DATA4</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>DATA5</p>
					</td>
					<td>
						<p>DATA6</p>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
