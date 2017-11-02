<!DOCTYPE html>
<html>
<head>
<title>Donor Registration</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<meta charset="UTF-8">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
td {
	font-family: "Goudy Old Style";
	font-size: 28px;
	}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="bloodbank.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="registration.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Register as DONOR</a>
    <a href="search.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Find Match</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Help</a>
   
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="registration.html" class="w3-bar-item w3-button w3-padding-large">Register</a>
    <a href="search.html" class="w3-bar-item w3-button w3-padding-large">Find Match</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Help</a>

  </div>
</div>

<div class="w3-container w3-red w3-center" style="padding:120px 16px">
<h1 class="w3-margin w3-jumbo">PEOPLE'S BLOOD BANK</h1>
  <p class="w3-xlarge">Humble to be humane</p>
</div>

<div calss="w3-container w3-white w3-center" style="padding:50px 35%">
<form action="newww.php" method="POST">
<table>
<tr>
<td>First Name:</td>	<td><input type="text" name="first_name"></td>
</tr>
<tr>
<td>Last Name:</td>     <td><input type="text" name="last_name"></td>
</tr>
<tr>
<td>Age:</td>	<td><input type="text" name="age"></td>
</tr>
<tr>
<td>Sex:</td>     <td><input type="radio" name="gender" value="male"> Male	<input type="radio" name="gender" value="female"> Female	<input type="radio" name="gender" value="other"> Other</td>
</tr>
<tr>
<td>Blood Group:</td>	<td><input type="text" name="blood_group"></td>
</tr>
<tr>
<td>City:</td>     <td><input type="text" name="city"></td>
</tr>
<tr>
<td>State:</td>     <td><input type="text" name="state"></td>
</tr>
<tr>
<td>Contact no:</td>     <td><input type="text" name="phone"></td>
</tr>
<tr>
<td>Email ID:</td>     <td><input type="text" name="email"></td>
</tr>
<tr><td><br><button style="padding:10px 25%;position:relative;left:70%;">REGISTER</button></td></tr>
</table>
</form>
</div>

<!-- navdemo script-->
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<?php

	$dbhost = "localhost";
	$username = "harry";
	$password = "donthack";
	$db = "harry";
	
	$dbc = new mysqli($dbhost,$username,$password) or die("Error connecting to MySQL server");
	$first_name=$last_name=$age=$gender=$blood_group=$city=$state=$phone=$email="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	
		$first_name = ($POST["first_name"]);
		$last_name = ($POST["last_name"]);
		$age = ($POST["age"]);
		$gender = test_input($POST["gender"]);
		$blood_group = test_input($POST["blood_group"]);
		$city = test_input($POST["city"]);
		$state = test_input($POST["state"]);
		$phone = test_input($POST["phone"]);
		$email = test_input($POST["email"]);
	echo "check1";
	}
	
	echo "$city";
	
	//$dbc = mysqli_connect($dbhost,$username,$password) or die("Error connecting to MySQL server");
	//mysqli_select_db($db);
	
	$q = "INSERT INTO donor_info VALUES($first_name,$last_name,$age,$gender,$blood_group,$city,$state,$phone,$email)";
	
	//$result = mysqli_query("$dbc","$query")or die("Error querying database");
	$re = $dbc->query($q);
	//mysqli_close($dbc);
	if($re === True)
		echo 'success';
	else
		echo 'fail';
		
?>
</body>
</html>
