<html>
<head>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <title>Login</title>
</head>	
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
      <ul class="nav justify-content-end nav-dark">
        <li class="nav-item">
          <a class="nav-link active" href="login.html">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="contactus.html">Contact Us</a>
        </li>
      </ul>
	</nav>

  </header>	
<?php
//print_r($_REQUEST);
	//echo $_REQUEST["msg"];
	
	
if(isset($_REQUEST["msg"]) && $_REQUEST["msg"]!=""){	
	echo $_REQUEST["msg"];
}
?>
	<form action="loginaction.php" method="post">
	  <div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required>
		<br><br>

		<label for="pwd"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="pass" required>
		<br><br>
			
		<button type="submit">Login</button>
	  </div>
	</form>

</body>
</html>
