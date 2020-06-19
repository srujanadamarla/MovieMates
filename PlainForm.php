<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="NewStyle.css">

<body>

  <div class="w3-container LeftMargin RightMargin" id="contact">
    <h1 style="color: #db0416">Contact Form</h1>
    <form method="post" action="insert.php">
	  <p><input class="w3-input w3-padding-16" type="text" placeholder="First Name" required name="First_Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Last Name" name="Last_Name"></p>
      <p><input class="w3-input w3-padding-16" type="email" placeholder="Email Id" required name="Email_Id"></p>
      <p><input class="w3-input w3-padding-16" type="tel" placeholder="Phone Number" required name="Phone_Number"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" name="Subject"></p>
      <p><textarea class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></textarea></p>
      <p class="w3-text-grey w3-hide-medium" style = "margin-left: 10px">How would you like us to contact you if necessary? <br>
	    <input type="radio" name="Contact" required value="Email">Email<br>
		<input type="radio" name="Contact" value="Phone"> Phone</p>
	  <p><button class="w3-button w3-light-grey w3-section" type="submit" name="Submit">Submit</button></p>
    </form>

	</div>

	<pre>
	<?php
	if($_GET) {
		echo 'Content of get arrar is <br>';
		print_r($_GET);
	} elseif($_POST) {
		echo 'Content of post arra is <br>';
		print_r($_POST);
	}
	?>
	</pre>
	
</body>
</html>