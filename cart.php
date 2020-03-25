<html>
<head>
<style>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

<?php
include 'database.php';
$sql = "SELECT * FROM productdetails";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
		?>
		
       <table >
	   <?php
	   $total_quantity = 0;
$total_price = 0;
            echo "<tr>";
             
            echo   '<th style="text-align:left;">Name</th>';
      
            echo '<th style="text-align:right;" width="5%">Quantity</th>';
          echo '<th style="text-align:right;" width="10%">Unit Price</th>';
          echo '<th style="text-align:right;" width="10%">Price</th>';
           echo '<th style="text-align:center;" width="5%">Remove</th>';
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
               
                echo "<td>" . $row['price'] . "</td>";
				  echo "<td>" . $row['price']*$row['quantity'] . "</td>";
				  ?>
				 <td style='text-align:center;'><a href='delete.php?name=<?php echo $row["name"]; ?>&quantity=<?php echo $row["quantity"]; ?>' ><img src="icon-delete.png" alt="Remove Item" /></a></td>
            </tr>
			<?php
			
        
$total_quantity += $row["quantity"];
$total_price += ($row["price"]*$row["quantity"]);
}
?>
<br><br><br><br><br><br>
<h1 style="text-align:center;" >Your Cart</h1>

<br><br>
<?php 
        echo "</table>";
		
		?>
		 	<h3 align="center">Total Quantity: <strong ><?php echo $total_quantity  ; ?></strong></h3>
		
		<h3 align="center">Total Price: <strong ><?php echo "$ ".number_format($total_price, 2); ?></strong></h3>
		<a href='payment.php?quantity=<?php echo $total_quantity; ?>&price=<?php echo $total_price ; ?>' ><button class="button" style="float: right;  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  size:51px;
  cursor:pointer;">Continue</button>	
		</a>
		
		<?php


        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
</body>
</head>
</html>