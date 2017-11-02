<html>
<body>
<?php

	$dbhost = "localhost";
	$username = "harry";
	$password = "donthack";
	$db = "harry";
	
	$dbc = new mysqli($dbhost,$username,$password) or die("Error connecting to MySQL server");
	$first_name=$last_name=$age=$gender=$blood_group=$city=$state=$phone=$email="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	
		$first_name = test_input($POST["first_name"]);
		$last_name = test_input($POST["last_name"]);
		$age = test_input($POST["age"]);
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

