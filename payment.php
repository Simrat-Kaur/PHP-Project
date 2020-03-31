<html>
<head>
<style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<?php
include 'database.php';

$name=$email=$city=$state=$zip=$add=$cardname=$cardnumber=$expyear=$cvv=$expmonth="";
$nameerr=$emailerr=$cityerr=$stateerr=$ziperr=$adderr=$cardnameerr=$cardnumbererr=$cvverr=$expyearerr=$expmontherr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["name"])) {
$nameerr="Name is required";

} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameerr = "Only letters and white space allowed";

}
}

if (empty($_POST["email"])) {
$emailerr = "Email is required";

} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
$emailerr = "Invalid email format";

}
}
if (empty($_POST["city"])) {
$cityerr="City is required";

} else {
$city = test_input($_POST["city"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
$cityerr = "Only letters and white space allowed";

}
}

if (empty($_POST["state"])) {
$stateerr="Name is required";

} else {
$state = test_input($_POST["state"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
$stateerr = "Only letters and white space allowed";

}
}


if (empty($_POST["address"])) {
$adderr="Name is required";

} else {
$add = test_input($_POST["address"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z0-9]*$/",$add)) {
$adderr = "Only letters ,numbers and white space allowed";

}
}

if (empty($_POST["zip"])) {
$ziperr="It is required";

} else {
$zip = test_input($_POST["zip"]);
// check name only contains letters and whitespace
if (!preg_match("/^[0-9]*$/",$zip)) {
$ziperr = "Only numbers are allowed";

}
}

if (empty($_POST["cardname"])) {
$cardnameerr="Name is required";

} else {
$cardname = test_input($_POST["cardname"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$cardname)) {
$cardnameerr = "Only letters and white space allowed";

}
}
if (empty($_POST["cardnumber"])) {
$cardnumbererr="It is required";

} else {
$cardnumber = test_input($_POST["cardnumber"]);
// check name only contains letters and whitespace
if (!preg_match("/^[0-9]*$/",$cardnumber)) {
$cardnumbererr = "Only numbers are allowed";

}
}


if (empty($_POST["expyear"])) {
$expyearerr="It is required";

} else {
$expyear = test_input($_POST["expyear"]);
// check name only contains letters and whitespace
if (!preg_match("/^[0-9]*$/",$expyear)) {
$expyearerr = "Only numbers are allowed";

}
}


if (empty($_POST["cvv"])) {
$cvverr="It is required";

} else {
$cvv = test_input($_POST["cvv"]);
// check name only contains letters and whitespace
if (!preg_match("/^[0-9]*$/",$cvv)) {
$cvverr = "Only numbers are allowed";

}
}
if (empty($_POST["expmonth"])) {
$expmontherr="Name is required";

} else {
$expmonth = test_input($_POST["expmonth"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$expmonth)) {
$expmontherr = "Only letters and white space allowed";

}
}
// $url='localhost:3307';
// $username='root';
// $password='';
// $dbname="mydb";
// $conn=mysqli_connect($url,$username,$password,$dbname);
// if(!$conn){
 // echo '<script>alert("not connected")</script>';
// }
// else
// {
	// echo '<script>alert(" connected")</script>';
// }
	

$sql = "INSERT INTO paymentdetails(name,address,email,state,city,zip)
VALUES ('$name','$add','$email','$state','$city','$zip')";

if (mysqli_query($conn, $sql)) {
   echo '<script>alert("New record created successfully")</script>';
} else {
  echo '<script>alert("Error")</script>';
}



mysqli_close($conn);
	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
   $quantity = 0;
$price = 0;
if(isset($_POST['payment']))
    {
		      echo '<script>alert("Payment has done successfully")</script>';
	}

 if(isset($_GET['price']))
  {
	 $price= $_GET['price'];
	 	 $quantity= $_GET['quantity'];
	
  }
?>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
			<span class="error">* <?php echo $nameerr;?></span>  
            <input type="text" id="fname" name="name" placeholder="John M. Doe">
			
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
			<span class="error">* <?php echo $emailerr;?></span>  
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
			<span class="error">* <?php echo $adderr;?></span>  
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
			<span class="error">* <?php echo $cityerr;?></span>  
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
				<span class="error">* <?php echo $stateerr;?></span>  
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
				<span class="error">* <?php echo $ziperr;?></span>  
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
			<span class="error">* <?php echo $cardnameerr;?></span>  
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
			<span class="error">* <?php echo $cardnumbererr;?></span>  
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
			<span class="error">* <?php echo $expmontherr;?></span>  
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
				<span class="error">* <?php echo $expyearerr;?></span>  
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
				<span class="error">* <?php echo $cvverr;?></span>  
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
		  <h3 align="center">Total Quantity: <strong ><?php echo $quantity  ; ?></strong></h3>
		
		<h3 align="center">Total Price: <strong ><?php echo "$ ".number_format($price, 2); ?></strong></h3>
        </label>
		
        <input type="submit" name="payment" value="Payment" class="btn">
      </form>
    </div>
  </div>

  
</div>
</body>
</html>