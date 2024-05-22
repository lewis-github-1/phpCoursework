<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ch 7 Arrays</title>
	<style>
    p, pre, h3 {padding: 0px; margin: 3px;}
    body {font-family: Verdana, Arial, sans-serif; margin-left: 20px;}
    .error { font-weight: bold; color: #C00;}
    p {margin-left: 15px;}
    pre {margin-left: 30px; padding-bottom: 20px;}
    h1 {color: blue;}
    h3 {color: green; padding-top: 15px; padding-bottom: 10px;}
	</style>
</head>
<body>
  <h1>Ch 7 Arrays Practice</h1>
  <?php error_reporting(E_ALL); // show all possible warnings
  
  // for each loop
  $person = ['name' => 'Kathy', 'degree' => 'Programming', 'gradYear' => 2018];
  print "<h3>Using a foreach loop</h3>";
  foreach ($person as $key => $value) {
    print "<p>$key: $value</p>";
  }
  
  // using print_r
  print "<h3>Using print_r</h3>";
  print "<pre>";
  print_r($person);
  print"</pre>";
  
  // using var_dump
  print "<h3>Using var_dump</h3>";
  print"<pre>";
  var_dump($person);
  print"</pre>";
  
  // add an item to an associative array without an index
  print "<h3>After adding a value without a key</h3>";
  $count = count($person);
  print "<p>Before adding the count is: $count </p>";
  $person[] = 'Instructor';
  $count = count($person);
  print "<p>After adding the count is : $count </p>";
  print "<pre>";
  print_r($person);
  print "</pre>";
  
  // practice sorting an indexed array
  print "<h3>Sorting an indexed array</h3>";
  $scores = [95, 92, 90, 75, 100, 50];
  print "<p>Before any sort:</p>";
  print "<pre>";
  print_r($scores);
  print "</pre>";

  sort($scores);
  print "<p>After sort()</p>";
  print "<pre>";
  print_r($scores);
  print "</pre>";

  rsort($scores);
  print "<p>After rsort()";
  print "<pre>";
  print_r($scores);
  print "</pre>";
  
  // practice sorting an associative array
  print "<h3>Sorting an associative array</h3>";
  $sales = [
    'Bob' => 75000,
    'Tom' => 25000,
    'Sue' => 150000
  ];
  print "<p>Before any sort:</p>";
  print "<pre>";
  print_r($sales);
  print "</pre>";

  asort($sales);
  print "<p>After asort()</p>";
  print "<pre>";
  print_r($sales);
  print "</pre>";

  arsort($sales);
  print "<p>After arsort()</p>";
  print "<pre>";
  print_r($sales);
  print "</pre>";

  ksort($sales);
  print "<p>After ksort()</p>";
  print "<pre>";
  print_r($sales);
  print "</pre>";

  krsort($sales);
  print "<p>After krsort()</p>";
  print "<pre>";
  print_r($sales);
  print "</pre>";
  
  // explode and implode
  print "<h3>Exploding a string</h3>";
  $string = "Computer Programming is fun";
  print "<p>The \$string variable is: <b>$string</b></p><br>";
  $exploded = explode(' ', $string);
  print "<p>After exploding \$string:<p>";
  print "<pre>";
  print_r($exploded);
  print "</pre>";

  print "<h3>Imploding an array</h3>";
  $fruit = ['oranges', 'apples', 'bananas'];
  print "<p>The \$fruit array has the following values:</p>";
  print "<pre>";
  print_r($fruit);
  print "</pre>";

  $fruit_string = implode(' || ', $fruit);
  print "<p>After imploding \$fruit array:<p/>";
  print "<p>The \$fruit_string variable is: <b>$fruit_string</b></p>";

 
  ?>
</body>
</html>