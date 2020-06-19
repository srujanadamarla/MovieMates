<?php
  $con = mysqli_connect('127.0.0.1','root','');
  
  if(!$con) {
	  echo 'Not Connected to Server';
  }
  if(!mysqli_select_db($con,'moviemates')) {
	  echo 'Database Not selected';
  }
  $FirstName = $_POST['First_Name'];
  $LastName = $_POST['Last_Name'];
  $Email = $_POST['Email_Id'];
  $PhoneNumber	= $_POST['Phone_Number'];
  $Subject	= $_POST['Subject'];
  $Message	= $_POST['Message'];
  $ContactMethod = $_POST['Contact'];
  
  $sql = "INSERT INTO contact (FirstName, LastName, Email, PhoneNumber, Subject, Message, ContactMethod) VALUES('$FirstName', '$LastName', '$Email', '$PhoneNumber', '$Subject', '$Message', '$ContactMethod')";
  
  if(!mysqli_query($con,$sql)) {
	  echo 'We apologize for the inconvinience. Something went wrong, please try again.';
  } else {
	  echo 'Thank you for contacting us! We received your message and will get back to you soon.';
  }
  

?>