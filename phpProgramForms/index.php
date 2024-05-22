<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Ch 3 Program</h2>

<div class="container">
  <form action="action.php" method="post">
    <label for="fname" class="leftcol">First Name</label>
    <input type="text" id="fname" name="firstname" class="rightcol">

		<label for="lname" class="leftcol">Last Name</label>
    <input type="text" id="lname" name="lastname" class="rightcol">

		<label for="age" class="leftcol">Age</label>
    <input type="text" id="age" name="age" class="rightcol">

		<label for="country" class="leftcol">Country</label>
    <select id="country" name="country" class="rightcol">
     	<option value="Australia">Australia</option>
      <option value="Canada">Canada</option>
      <option value="USA">USA</option>
    </select>

		<label for="comments" class="leftcol">Comments</label>
    <textarea id="subject" name="comments" style="height:100px" class="rightcol"></textarea>
		<div id="submit">
    <input type="submit" value="Submit">
		</div>
  </form>
</div>

</body>
</html>
