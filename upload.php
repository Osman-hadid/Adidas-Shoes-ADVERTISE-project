<?php

  if (isset($_POST['upload']))
  {  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "photos/".$filename;
          
    $db = mysqli_connect("localhost", "root", "", "web_engineeringrh");
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO photos (name) VALUES ('$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            
        }
  }

?>
  
<!DOCTYPE html>
<html>
	<head>
		<title>Image Upload</title>
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

	</head>
	<body class="geeks">

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


		<form method="POST" action="" enctype="multipart/form-data" style="position: absolute; left: 50%; top: 50%; margin-left: -13%; margin-top: -7%;">
			<div class="file is-centered is-boxed is-success has-name is-large" id="content">
				<label class="file-label">
					<input class="file-input" type="file" name="uploadfile" value="">
				    <span class="file-cta">

				      	<span class="file-label">
				        Click here to choice file
				      	</span>
				    </span>
				    <button class="button is-dark" type="submit" name="upload">Upload</button>
				</label>
			</div>
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
	form{
		border-radius: 10px;
	}
    
</style>
