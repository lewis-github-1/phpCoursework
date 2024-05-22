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

	// Get values for meal, tip rate, and tax rate
  $meal = filter_var($_POST['meal'], FILTER_VALIDATE_FLOAT);
  $tip_rate = filter_var($_POST['tip'], FILTER_VALIDATE_FLOAT);
  $tax_rate = filter_var($_POST['tax'], FILTER_VALIDATE_FLOAT);
	
	// Divide the tip rate and tax rate by 100 to get decimal values
  $tip_rate = $tip_rate / 100;
  $tax_rate = $tax_rate / 100;
	
	// Peform calculations.  
	// Tip amount is based on meal cost before tax
	// Tax amount is based on meal cost before tip
  $tip_amount = $meal * $tip_rate;
  $tax_amount = $meal * $tax_rate;
  $total = $meal + $tip_amount + $tax_amount;

	// Format all values to 2 decimal places
  $tip_amount = number_format($tip_amount, 2);
  $tax_amount = number_format($tax_amount, 2);
  $total = number_format($total, 2);

	// Add the PHP values below in the appropriate spot of the HTML
	
?>
	<!-- The following is HTML code with a little PHP thrown in -->
	<h1>Meal Calculator</h1>

	<table>
		<thead>
			<td>Item</td>
			<td>Amount</td>
		</thead>
		
		<tr>
			<td>Meal:</td>
			<td class="right"><?php print "$meal" ?></td>
		</tr>

		<tr>
			<td>Tip Amount:</td>
			<td class="right"><?php print "$tip_amount" ?></td>
		</tr>

		<tr>
			<td>Tax Amount:</td>
			<td class="right"><?php print "$tax_amount" ?></td>
		</tr>

		<tr class="summary">
			<td>Total:</td>
			<td class="right"><?php print "$total" ?></td>
		</tr>
	</table>

</body>
</html>