<html>
<head>	
<style>
#wrap{
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Mozilla Firefox */ 
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Opera */ 
background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
/* Webkit (Chrome 11+) */ 
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
background-repeat: no-repeat;
background-attachment: fixed;
}
legend{
	color:#141823;
	font-size:25px;
	font-weight:bold;
}
.signup-btn {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #578843);
  background-image: -moz-linear-gradient(top, #79bc64, #578843);
  background-image: -ms-linear-gradient(top, #79bc64, #578843);
  background-image: -o-linear-gradient(top, #79bc64, #578843);
  background-image: linear-gradient(to bottom, #79bc64, #578843);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.signup-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
.color{
	text:red;
}
.navbar-default .navbar-brand{
		color:#fff;
		font-size:30px;
		font-weight:bold;
	}
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:50px;
	}
	#home .slogan{
		color: #0e385f;
		line-height: 29px;
		font-weight:bold;
	}
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<?php
include 'database.php';

$name=$email=$gender=$pswd=$confirmpswd=$phoneno="";
$nameerr=$emailerr=$gendererr=$pswderr=$confirmpswderr=$phonenoerr="";
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
if (empty($_POST["gender"])) {
$gendererr = "Gender is required";
$count=false;
} else {
$gender = test_input($_POST["gender"]);
}
if(empty($_POST["password"]))
{
	$pswderr="It is required";

}
else{
	$pswd=md5(test_input($_POST["password"]));
if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pswd))
	{
		$pswderr="Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
		
	}
}
if(empty($_POST["confirm_password"]))
{
	$confirmpswderr="It is required";

}
else{
	$confirmpswd=md5(test_input($_POST["confirm_password"]));
if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $confirmpswd))
	{
		$confirmpswderr="Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
		
	}
}
if($pswd==$confirmpswd)
{
	
}
else
{
	echo '<script>alert("confirm password and password doesnt match")</script>';
	

}
if (empty($_POST["phoneno"])) {
$phonenoerr="It is required";

} else {
$phoneno = test_input($_POST["phoneno"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$phoneno)) {
$phonenoerr = "Only letters and white space allowed";

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
	

$sql = "INSERT INTO user(name,email,password)
VALUES ('$name','$email','$pswd')";

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
<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Sign Up</legend>
                    <h4>It's free and always will be.</h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
						<span class="error">* <?php echo $nameerr;?></span>  
                            <input type="text" name="name" value="" class="form-control input-lg" placeholder=" Name"  />                       </div>
                       
					<span class="error">* <?php echo $emailerr;?></span>  
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
					<span class="error">* <?php echo $pswderr;?></span>
					<input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
					<span class="error">* <?php echo $confirmpswderr;?></span>
					<input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />                                   <div class="row">
                        <div class="col-xs-4 col-md-4">
                                            </div>
                    </div>
					<span class="error">* <?php echo $phonenoerr;?></span>
					 <input type="number" name="phone_no" value="" class="form-control input-lg" placeholder="Your Mobile Number"  />
                     <label>Gender : </label>                   <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male />                        Male
                    </label>
                    <label class="radio-inline">
					
                        <input type="radio" name="gender" value="F" id=female />                        Female
                    </label>
						<span class="error">* <?php echo $gendererr;?></span>   
                    <br />
              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                        Create my account</button>

            </form>    

          </div>
<a  href="index.php">
							<legend>Go to Home---></legend>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
</div>            
</div>
</div>
</body>
</html>