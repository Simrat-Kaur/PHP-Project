<?php
include 'database.php';
  if(isset($_GET['name']))
  {
	 $name= $_GET['name'];
	 	 $quantity= $_GET['quantity'];
	
  }
$sql = "DELETE FROM productdetails WHERE name='$name' AND quantity='$quantity'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
	header("Location:cart.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>