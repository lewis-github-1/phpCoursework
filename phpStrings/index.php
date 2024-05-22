<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Ch 5 Strings</title>
	<style>
		body {font-family: Verdana, Arial, sans-serif;}
		h1 {color: blue;}
		h3 {color: red;}
		h4{font-style: italic;}
		p {margin-left: 25px;}
		span {color: green; font-weight: bold; font-style: italic;}
		.info {font-size: .8em; font-style: italic; color: purple;}
	</style>
</head>
<body>
	<h1>PHP Strings</h1> 
	
	<h3>Concatentate</h3>
	<?php
	// #1 Create a first name and last name variable
	// 			Then create a variable with the two concatenated separated by space. 
    $firstName = "Bob";
    $lastName = "Robertson";
    $fullName = $firstName . ' ' . $lastName;
    print("<p>#1) The full name is <code>$fullName</code></p>");
	?>

	<h3>Functions</h3>
	<?php
		$jobs = "\"Here's to the crazy ones, the misfits, the rebels, the troublemakers, the round pegs in the square holes... <br>the ones who see things differently -- they're not fond of rules... <br>You can quote them, disagree with them, glorify or vilify them, but the only thing you can't do is ignore them because they change things\"<br>--Steve Jobs";
		print("<p><code>$jobs</code></p>");

		// #2 Use a function to find the first word of the $jobs string
	  $tok = strtok($jobs, ' ');
		print("<p>#2) The first word of the string is: <span>$tok</span></p>");
		
		// #3 Use a function to find the text starting at position 10 and ending
		// 		5 characters later
    $sub = substr($jobs,10,7);
		print("<p>#3) The text starting at position 10 and going 5 characters is: <span>$sub</span></p>");

		// #4 Use a function to find out how many words are in the $jobs string
    $count = str_word_count($jobs);
		print("<p>#4) The word count for the quote is: <span>$count</span></p>");
		
		$new_str = "The big brown fox jumped over the lazy dog";
		print("<p>The original string is: <span>$new_str</span></p>");

		// #5 Use a function to replace the word dog with the word cow
		$new_str = str_replace("dog", "cow", $new_str);
		print("<p>#5) After replacing \"dog\" with \"cow\", the string is now: <span>$new_str</span></p>");
		
		// #6 Use a function to display the string in uppercase
    $new_str = strtoupper($new_str);
		print("<p>#6) The string in uppercase is:<span>$new_str</span></p>");
		
		$greeting = "Hello world";
		print("<p>The greeting string is:&nbsp;&nbsp;<span>$greeting</span></p>");
		
		// #7 Use a function to display $greeting backwards
    $greeting = strrev($greeting);
		print("<p>#7) The greeting string in reverse is: <span>$greeting</span></p>");
		

		$email = "kathy@kathy.com";
		print("<p>The email is: <span>$email</span></p>");
		
		// #8 Use a function to find the position of the "@" character
    $pos = strpos($email, "@");
		print("<p>#8) The position of the @ sign is: <span>$pos</span></p>");
		
		// #9 Print out the string changing the HTML characters so that 
		//		they will print plain text insteading of rendering as HTML
		$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
		print("<p>$str</p>");

		print("<p>#9) Change html characters to special entities:</p>");
    print(htmlentities($str));
	?>
	
</body>
</html>