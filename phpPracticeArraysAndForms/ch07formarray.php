<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Class Registration</title>
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
  <h1>Ch 7 Forms with Array Data</h1>
  <?php error_reporting(E_ALL); // show all possible warnings
  
  // Print each class:
  if (isset($_POST['classes']) AND is_array($_POST['classes'])) {
    print "<p><b>{$_POST['name']}</b>: You want to add the following classes:</p>";
    print "<ul>";
    foreach ($_POST['classes'] as $class) {
      print "<li>$class</li>";
    }
    print "</ul>";
  } else {
    print 'Please select at least one class to add!';
  }

?>
</body>
</html>