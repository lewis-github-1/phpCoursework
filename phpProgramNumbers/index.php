<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<h2>Ch 4 Numbers Program</h2>

<div class="container">
  <form action="output.php" method="post">

  <div class="row">
      <label for="meal">Meal cost:</label>
      <input type="text" name="meal" placeholder="Enter meal cost...">
  </div>

	<div class="row">
      <label for="tip">Tip:</label>
      <input type="text" name="tip" placeholder="Enter tip percent as a whole number...">
  </div>

	<div class="row">
      <label for="tax">Tax:</label>
      <input type="text" name="tax" placeholder="Enter tax percent as a whole number...">
  </div>

  <div class="row">
    <input type="submit" value="Calculate Meal Cost">
  </div>
  </form>
</div>

</body>
</html>
