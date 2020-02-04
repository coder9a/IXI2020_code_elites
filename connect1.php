<?php
	//Start session
	session_start();

	//Include database connection details
	require_once('config1.php');

	//Array to store validation errors
	$errmsg_arr = array();

	//Validation error flag
	$errflag = false;

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		echo "str: ".$str;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}

	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}

	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login1.html");
		exit();
	}

	//Create query
	$qry="SELECT * FROM register WHERE email='$email' AND password='$password'";
	$result=mysqli_query($bd, $qry);

	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful

header("Location:http://localhost/coaching/homepage1.html");
						exit();
		}else {
			//Login failed
			echo "LOGIN FAILED";
				exit();
			}

	}else {
		die("Query failed");
	}
?>
