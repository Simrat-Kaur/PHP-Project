		<?php
		include 'database.php';
$email=$name=$subject=$message="";



	$name = test_input($_POST["name"]);
	

	

	$email = test_input($_POST["email"]);
	
	
	

	
		$subject = test_input($_POST["subject"]);
		// check name only contains letters and whitespace
		
		
	
		
				$message = test_input($_POST["message"]);
			
$sql = "INSERT INTO contact(name,email,subject,message)
VALUES ('$name','$email','$subject','$message')";

if (mysqli_query($conn, $sql)) {
   echo '<script>alert("Your Query has been sent successfully")</script>';
} else {
  echo '<script>alert("Error")</script>';
}



mysqli_close($conn);
	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>
