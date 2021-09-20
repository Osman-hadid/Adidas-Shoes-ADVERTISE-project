<?php

$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"web_engineeringrh");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

$result = mysqli_query($conn,"SELECT * FROM photos");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Users</title>
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
	<link rel="stylesheet" type="text/css" href="bulma/css/bulma.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar" role="navigation" aria-label="main navigation">
	  <div class="navbar-brand">
	    <a class="navbar-item" href="#">
	      <img src="logo1.png" style="width: 40px; height: 30px;">
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

	<div style="position: absolute; top: 20%; left: 50%; margin-left: -30%;" class="d1">
		<table class="table table-dark table-hover">
			<tr>
			<td></td>
			<td>id</td>
			<td>Action</td>
			</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
			<tr class="<?php if(isset($classname)) echo $classname;?>">
			<td><?php echo "<img src=photos/$row[name]>"; ?></td>
			<td><?php echo $row["id"]; ?></td>
			<td><a href="delete2.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
			</tr>
			<?php
			$i++;
			}
			?>
		</table>
	</div>





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
		background-color: rgb(20,50,60);
	}
	.d1{
		opacity: 0.7;
	}
	img{
		width: 50%;
		height: 400px;
	}
	td,tr{
		font-size: 30px;
	}
</style>