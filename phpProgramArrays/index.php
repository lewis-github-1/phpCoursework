<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ch 7 Arrays</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
	</style>
</head>
<body>
  <h1>Ch 7 Arrays Program</h1>
  <?php error_reporting(E_ALL); // show all possible warnings

	// Task 1:  
	// Create an associative array to hold the following pay rates:
	// Bob:  15.75
	// Tom:  13.25
	// Sue:  18.25
	$rates = array("Bob" => 15.75, "Tom" => 13.25, "Sue" => 18.25);
	
	// Task 2:  
	// Use a for loop to print out the keys and values
	// from your associative array
	print "<h4>Contents of the array:</h4>";
  foreach ($rates as $key => $val) {
    print "$key: $val<br>";
  }

	// Task 3:
	// Print the contents using <pre> tags and print_r()
	print "<h4>Using print_r</h4>";
  print "<pre>";
  print_r($rates);
  print "</pre>";

	// Task 4: 
	// Print the contents using <pre> tags and var_dump()
	print "<h4>Using var_dump</h4>";
  print "<pre>";
  var_dump($rates);
  print "</pre>";

	// Task 5:
	// Print out how many items are in your array (use a function to count)
	print "<h4>Count of items:</h4>";
  print "The count is " . count($rates);

	// Task 6 :
	// Add Darth to your array at a rate of 11.50
	// and then print the contents using <pre> tags and print_r()
	print "<h4>After adding</h4>";
  $rates['Darth'] = 11.50;
  print "<pre>";
  print_r($rates);
  print "</pre>";

	// Task 7:
	// Print out how many items are now in your array (use a function to count)
	print "<h4>New count of items:</h4>";
  print "The count is " . count($rates);

	// Task 8:
	// Sort your array on the values in ascending order
	// and then print the contents using <pre> tags and print_r()
	print "<h4>After sorting on values ascending</h4>";
  asort($rates);
  print "<pre>";
  print_r($rates);
  print "</pre>";

	// Task 9:
	// Sort your array on the keys in ascending order
	// and then print the contents using <pre> tags and print_r()	
	print "<h4>After sorting on keys ascending</h4>";
  ksort($rates);
  print "<pre>";
  print_r($rates);
  print "</pre>";

	// Task 10: 
	// Use array functions to calculate the average rate
	// HINT: you will probably need more than one function
	// ALSO: DON'T hard key numbers, such as the number of items....
	//     Use a function, instead.
	// Display the average using 2 decimal places (see sample output)
	print "<h4>Calculating average rate:</h4>";
  $avg = 0;
  foreach ($rates as $key => $val) {
    $avg += $val;
  }
  $avg = $avg / (count($rates));
  $avg = number_format($avg, 2);
  print "The average payrate is \$$avg per hour";

	?>
	</body>
</html>