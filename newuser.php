<?php

$db = mysqli_connect("localhost", "root", "", "web_engineeringrh");

if (isset($_POST['upload2'])) {

	$username   = mysqli_real_escape_string($db, $_REQUEST['inp3']);
	$pass       = mysqli_real_escape_string($db, $_REQUEST['inp4']);


	$sql = "INSERT INTO users (username, password) VALUES ('$username','$pass')";

	if (mysqli_query($db, $sql)) {
		header("Location: user.php");
	}else{
	    echo "ERROR: Could not able to execute.";
	}

         
  }

  mysqli_close($db);

?> 	

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bulma/css/bulma.css">
	<title>New User</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar" role="navigation" aria-label="main navigation">
	  <div class="navbar-brand">
	    <a class="navbar-item" href="#">
	      <img src="logo1.png" width="35" height="28">
	    </a>

	    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	    </a>
	  </div>

	  <div id="navbarBasicExample" class="navbar-menu">
	    <div class="navbar-start">
	      <a class="navbar-item" href="main.php">
	        Home
	      </a>

	      <a class="navbar-item" href="user.php">
	        Users
	      </a>
	      <a class="navbar-item" href="upload.php">
	        Upload
	      </a>
	      <a class="navbar-item" href="newuser.php">
	        Add New
	      </a>
	  </div>

	    <div class="navbar-end">
	      <div class="navbar-item">
	        <div class="buttons">
	          <a class="button is-warning" href="index.php">
	            <strong>Log out</strong>
	          </a>
	        </div>
	      </div>
	    </div>
	  </div>
	</nav>



	<form action="" method="POST" name="f6" enctype="multipart/form-data">
		<h1 class="title" style="color: black;">Add here</h1>
		<label>UserNAME</label>
		<input name="inp3" class="input is-warning">
		<br><br>
		<label>Password</label>
		<input type="Password" name="inp4" class="input is-warning">
		<br>
		<br><br>
		<input type="submit" value="Submit" name="upload2" class="button is-info">
	</form>
</body>
</html>

<style>
	a{
		font-weight: bold;
		color: black;
		font-family: david;
		font-size: 20px;
	}	
	body,html{
		background-color: rgb(10,18,18);
	}
	form{
		background-color: rgb(250,250,250);
		box-shadow: 1px 1px 15px 10px rgb(150,200,50);
		border-radius: 10px;
		width: 600px;
		position: absolute;
		left: 40%;
		top: 50%;
		margin-left: -10%;
		margin-top: -10%;
		margin-right: 650px;
		padding: 10px;
		height: 300px;
	}
	label{
		color: black;
	}

</style>