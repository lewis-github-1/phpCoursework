
<!DOCTYPE HTML>  
<html>
<head>
    <title>Account Sign Up</title>
    <link rel="stylesheet" href="form.css"/>
</head>
<body> 
  <?php
  error_reporting(E_ALL); // show all possible warnings
  // define variables and set to empty values
  $nameErr = $emailErr = $phoneErr = $heard_fromErr = "";
  $name = $email = $phone = $heard_from = $wants_updates = $contact_via = $comments = "";
  $errors = 0;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check for an empty name.  If it's empty, set an error message 
    // and increase the errors counter.
    // If it's not empty, run it through the test_input function and store the 
    // cleaned value in a variable
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      $errors++;      
    } else {
      $name = test_input($_POST["name"]);
    }

    // Check for an empty email.  If it's empty, set an error message 
    // and increase the errors counter.
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $errors++;
    } else {
      $email = test_input($_POST["email"]);
    }
    
    // If it's not empty, run it through the test_input function and store the 
    // cleaned value in a variable  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $errors++;
    } else {
      $email = test_input($_POST["email"]);
    }

         
    // Check for an invlaid email format.  If it's invalid, set an error message 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $errors++;
    }
    
    
    // Check for an empty phone.  If it's empty, set an error message 
    // and increase the errors counter.
    // If it's not empty, run it through the test_input function and store the 
    // cleaned value in a variable
    if (empty($_POST["phone"])) {
      $phoneErr = "Phone is required";
      $errors++;
    } else {
      $phone = test_input($_POST["phone"]);
    }
    
    // Check for an empty heard_from.  If it's empty, set an error message 
    // and increase the errors counter.
    // If it's not empty, run it through the test_input function and store the 
    // cleaned value in a variable
    if (empty($_POST["heard_from"])) {
      $heard_fromErr = "How you heard about us is required";
      $errors++;
    } else {
      $heard_from = test_input($_POST["heard_from"]);
    }
    // Check for an empty wants_names value  
    // If it's empty, set a variable to "No"
    // If it's not empty, set the variable to "Yes"
    if (empty($_POST["wants_updates"])) {
      $wants_updates = "No";
    } else {
      $wants_updates = "Yes";
    }

    // Check for an empty contact_via.  
    // If it's empty, set a variable to "No Contact"
    // If it's not empty, run it through the test_input function and store the 
    // cleaned value in the variable
    if (empty($_POST["contact_via"])) {
      $contact_via = "No contact";
    } else {
      $contact_via = test_input($_POST["contact_via"]);
    }

    // Check for comments
    // If there are comments, run the value through the test_input function
    // and store the value in a variable.
    if (!empty($_POST["comments"])) {
      $comments = test_input($_POST["comments"]);
    }    
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<main>
    <h1>Account Sign Up</h1>
    <p><span class="error">* denotes a required field</span></p>
    <form method="post" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

    <fieldset>
    <legend>Account Information</legend>
        <label>Name:</label>
        <input type="text" name="name" value="<?php print $name;?>">
          <span class="error">* <?php print $nameErr;?></span>
          <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php print $email;?>">
          <span class="error">* <?php print $emailErr;?></span>
          <br><br>

        <label>Phone:</label>
        <input type="input" name="phone" value="<?php print $phone;?>">
          <span class="error">* <?php print $phoneErr;?></span>
          <br><br>
    </fieldset>

    <fieldset>
    <legend>Contact Information</legend>

        <p>How did you hear about us?<span class="error">* <?php print $heard_fromErr;?></span></p>
        <input type="radio" name="heard_from" 
               <?php if (isset($heard_from) && $heard_from =="Search Engine") print "checked";?> 
               value="Search Engine">Search Engine<br>
      
        <input type="radio" name="heard_from" 
               <?php if (isset($heard_from) && $heard_from =="Friend") print "checked";?> 
               value="Friend">Word of mouth<br>
      
        <input type="radio" name="heard_from" 
               <?php if (isset($heard_from) && $heard_from =="Other") print "checked";?> 
               value="Other">Other<br><br>
      

        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <input type="checkbox" name="wants_updates" 
               <?php if (isset($wants_updates) && $wants_updates == "Yes") print "checked";?> >
              YES, I'd like to receive information about new products and special offers.<br><br>

        <p>How would you like to be contacted?</p>
        <input type="radio" name="contact_via" 
               <?php if (isset($contact_via) && $contact_via == "Email") print "checked";?> 
               value="Email">Email<br>
      
        <input type="radio" name="contact_via" 
               <?php if (isset($contact_via) && $contact_via == "Text") print "checked";?> 
               value="Text">Text Message<br>
      
        <input type="radio" name="contact_via" 
               <?php if (isset($contact_via) && $contact_via == "Phone") print "checked";?> 
               value="Phone">Phone<br>

        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="100"><?php print $comments;?></textarea>
    </fieldset>

    <input type="submit" value="Submit">
    <br>

    </form>    
  
  <?php
  // Only output the variable values if:  the server request method is POST and the errors are  0
  if ($_SERVER["REQUEST_METHOD"] == "POST" && $errors == 0) {
    print "<h2>You Submitted:</h2>";
    print "Name:  $name<br>";
    print "Email:  $email<br>";
    print "Phone:  $phone<br>";
    print "How you heard about us: $heard_from<br>";
    print "Wants updates?: $wants_updates<br>";
    print "Conact via:  $contact_via<br>";
    print "Comments: $comments<br>"; 
  }
?>
</main>
</body>
</html>