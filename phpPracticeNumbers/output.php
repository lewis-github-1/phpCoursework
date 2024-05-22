<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Meal Calculator</title>
  <style>
    body {font-family: Verdana, Arial, sans-serif;}
		h1 {color:blue;}
		td {padding: 5px 20px; border: 1px solid; text-align: center;}
		thead {font-weight: bold;background-color:whitesmoke;}
		.summary {font-weight:bold; color: green;background-color:papayawhip;}
		.right {text-align: right;padding-right:5px;}
		table {border-collapse:collapse;}
  </style>
</head>
<body>
<?php 
	ini_set('display_errors', 1); // turn on error reporting
	error_reporting(E_ALL); // Show all possible problems

	// Get values
  $hours = filter_var($_POST['hours'], FILTER_VALIDATE_FLOAT);
	$rate = filter_var($_POST['rate'], FILTER_VALIDATE_FLOAT);
  $fed_rate = filter_var($_POST['fed'], FILTER_VALIDATE_INT);

	// Set other values
  $fed_rate = $fed_rate / 100;
  $state_rate = .0495;
  $fica_rate = .0725;
	
	// Peform calculations
  $gross = $hours * $rate;
  $fed_dollars = $gross * $fed_rate;
  $state_dollars = $gross * $state_rate;
  $fica_dollars = $gross * $fica_rate;
  $net = $gross - $fed_dollars - $state_dollars - $fica_dollars;
	

	// format floats to 2 decimal places
  $hours = number_format($hours, 2);
  $rate = number_format($rate, 2);
  $gross = number_format($gross, 2);
  $fed_dollars = number_format($fed_dollars, 2);
  $state_dollars = number_format($state_dollars, 2);
  $fica_dollars = number_format($fica_dollars, 2);
  $net = number_format($net, 2);
	
	
?>
	<!-- The following is HTML code with a little PHP thrown in -->
	<h1>Paycheck Calculator</h1>

	<table>
	<thead>
		<td>Item</td>
		<td>Amount</td>
	</thead>
	<tr>
		<td>Hours:</td>
		<td class="right"><?php print "$hours" ?></td>
	</tr>

	<tr>
		<td>Rate:</td>
		<td class="right"><?php print "$rate" ?></td>
	</tr>

	<tr class="summary">
		<td>Gross:</td>
		<td class="right"><?php print "$gross" ?></td>
	</tr>
	
	<tr>
		<td>Federal:</td>
		<td class="right"><?php print "$fed_dollars" ?></td>
	</tr>
	
		<tr>
		<td>State:</td>
		<td class="right"><?php print "$state_dollars" ?></td>
	</tr>
	
		<tr>
		<td>FICA:</td>
		<td class="right"><?php print "$fica_dollars" ?></td>
	</tr>

	<tr class="summary">
		<td>Net Pay:</td>
		<td class="right"><?php print "$net" ?></td>
	</tr>

	</table>

</body>
</html>