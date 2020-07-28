<?php
/** getting form vales **/
//print_r ($_REQUEST);
/*
$name = $_REQUEST['uname'];
echo $name;
*/
$uname = $_POST["uname"];
$pass = $_POST["pass"];
/**connection to database 1st method **/
//syntax: mysqli_connect(servername,username, password, db_name)

require ("functions.php");
$con = dbConnect();
	
/**connection to database 2nd method**/
$result = mysqli_query($con, "SELECT * FROM admin WHERE uname = '$uname' and pass = '$pass'") or die("Failed to query dtabase".mysqli_error($con));
	//echo "<pre>";
	// var_dump($result);
	
$row = mysqli_fetch_array($result);
	//echo "<pre>";
	//var_dump($row);
	//echo $row['username'];
	if($row['uname'] == $uname && $row['pass'] == $pass){
		//echo "logged in successfully";
		//header("Location:dashboard.php");
		session_start();
		//print_r($_SESSION);
		$_SESSION['user_name'] = $row['uname'];
		//print_r($_SESSION['user_name']);
		//echo "Hello ". $_SESSION['user_name'];
		header ("Location: dashboard.php");
		
	} else {
		//echo "credetionals do not match";
		//header ("Location: loginform.php");	
		header ("Location: loginform.php?msg=Username or password is incorrect");
	}

?> 
