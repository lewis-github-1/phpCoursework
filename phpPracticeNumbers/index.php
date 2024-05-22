<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Ch 4 Numbers Practice</h2>

<div class="container">
  <form action="output.php" method="post">

  <div class="row">
      <label for="hours">Hours:</label>
      <input type="text" name="hours" placeholder="Enter your hours...">
  </div>

	<div class="row">
      <label for="rate">Rate:</label>
      <input type="text" name="rate" placeholder="Enter your pay rate...">
  </div>

	<p>Federal Withholding Rate:</p>
	<div class="row">
     <input type="radio" name="fed" value="10"><label for="10" class="rad">10%</label>
  </div>
  
  <div class="row">
     <input type="radio" name="fed" value="15"><label for="15" class="rad">15%</label>
  </div>
  
  <div class="row">
     <input type="radio" name="fed" value="20"><label for="20" class="rad">20%</label>
   </div>
 
  <div class="row">
    <input type="submit" value="Calculate Net Pay">
  </div>
  </form>
</div>

</body>
</html>
