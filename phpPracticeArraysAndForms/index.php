<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Arrays and Forms</title>
  <style>
    p, pre, h3 {padding: 0px; margin: 3px;}
    body {font-family: Verdana, Arial, sans-serif; margin-left: 20px;}
    .error { font-weight: bold; color: #C00;}
    p {margin-left: 15px;}
    pre {margin-left: 30px; padding-bottom: 20px;}
    h1 {color: blue;}
    h3 {color: green; padding-top: 15px; padding-bottom: 10px;}
    fieldset {width: 50%;}
    legend {font-weight: bold; color: green;}
	</style>
</head>
<body>

<h1>Ch 7 Creating Arrays from Forms</h1>

<form action="ch07formarray.php" method="post">

	<p>Student Name: <input type="text" name="name" size="30"></p><br>
  <fieldset>
    <legend>
      Classes:
    </legend>
	<input type="checkbox" name="classes[]" value="INFO135">INFO135 C++<br>
	<input type="checkbox" name="classes[]" value="INFO174">INFO174 HTML/CSS<br> 
	<input type="checkbox" name="classes[]" value="INFO165">INFO165 C#<br> 
	<input type="checkbox" name="classes[]" value="INFO285">INFO285 SQL<br><br> 	
	<input type="submit" name="submit" value="Add the Classes!">
  </fieldset>
</form>
</div>
</body>
</html>