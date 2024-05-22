<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ch 3 Form Feedback</title>
	<style>
    body {font-family: Verdana, Arial, sans-serif;}
    .error { font-weight: bold; color: #C00; }
    h1 {color: blue;}
	</style>
</head>
<body>
  <h1>Ch 3 Form Program</h1>
<?php 
  error_reporting(E_ALL); // show all possible warnings
  // define variables and set to empty
  $fname = $lname = $age = $country = $comments = "";

	// Step #1:  Store the values from the form fields into variables 
	// There are 5 of them. 
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];  
    $country = $_POST['country'];
    $comments = $_POST['comments'];  
  
	// Step #2:  Display the output (see sampleoutput.png)
	// Note that one of the lines is a calculation
  print "First: $fname<br>";
  print "Last: $lname<br>";
  print "Age: $age<br>";
  print "In 10 years you will be " . (int)$age + 10 . " years old<br>";
  print "Country: $country<br>";
  print "Comments: $comments<br>";

 
?>
</body>
</html>