<html>

<a href="logout.php">Logout</a><br>
<?php
//echo "hello user";
session_start();
//echo "Hello ".$_SESSION["user_name"];

if(isset($_SESSION["user_name"]) && $_SESSION["user_name"]!=""){
	echo "Hello ".$_SESSION["user_name"];
} else {
	//echo "you are not loged in";
	header ("Location: loginform.php");	
}

?>

</html>
