<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="animate.css/animate.min.css">
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


	<video src="Home - shoes-launch-landing.mp4" style="width: 50%; float: left;" autoplay="" loop></video>

	<div style="background-color: rgb(90,90,90); width: 50%; height: 800px; position: absolute; left: 50%;">
		<video src="Home - shoes-launch-landing_2.mp4" style="width: 50%; float: left;" autoplay="" loop></video>
		<br><br><br><br>
		<h1 style="padding-left: 10%; padding-top: 10%;" class="animate__animated animate__backInRight">Adidas</h1>
		<div style="padding-left: 10%; padding-top: 20%;" class="animate__animated animate__jello">
			<p style="color: black; font-size: 40px; font-family: david;"><strong style="color: black;">Adidas</strong> - Best Good, Cheap Price</p>
		</div>
		<button class="button" style="height: 80px; position: absolute; top: 95%; left: 15%;
		background-color: rgba(150,200,50,0.7);" style="color: black; font-weight: bold; font-size: 30px;"><a href="#" style="text-decoration: none; color: black; font-size: 30px;">Explore More</a></button>
	</div>

<br><br>
	<div style="position: absolute; top: 150%; left: 10%;">
		<h1 style="color: white;">News</h1>

		<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "web_engineeringrh";

	// Create connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


	if($stmt = $conn->query("SELECT * FROM photos")){



	$result2 = mysqli_query($conn,"select count(1) FROM photos");
	$row = mysqli_fetch_array($result2);
	$total = $row[0];

	$count = 1;

	echo "<table>
	<tr><th>Image</th></tr>";
	while ($row = $stmt->fetch_assoc()) {
		if ($count > 5) {
			echo "More Than 5 Photos, exactly = " . $total . "<br>";
			echo "Click here to see all photos -> <a href='allphotos.php' style='font-size: 30px;'>HERE</a>";
			break;
			}else{
				echo "<tr><td><img src=photos/$row[name]></td></tr>";
				$count++;
			}
		}
		echo "</table>";
	}else{
	echo $connection->error;
	}
	?>

		<div style="position: absolute; left: 100%; top: 10%;">
			<h1 style="color: white;">Products</h1>
			<p style="text-align: center; font-size: 20px;">Checkout our new products, for different persons.</p>
			<main style="background-color: rgb(150,200,50); height: 800px; width: 500px;">
				<img src="s1.webp" style="position: relative; height: 700px; width: 300px; top: 10%; left: 20%;">
				<img src="shoes4.jpg" style="position: relative; height: 700px; width: 400px; top: 10%; left: 10%;">
			</main>
		</div>

	</div>

	<!-- Footer -->
<footer class="page-footer font-small unique-color-dark" style="position: absolute; top: 490%; width: 100%;">

  <div style="background-color: rgb(150,200,50);">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Adidas</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Shoes</a>
        </p>
        <p>
          <a href="#!">T-Shirts</a>
        </p>
        <p>
          <a href="#!">Jacket</a>
        </p>
        <p>
          <a href="#!">Football accessories</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">


      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="#"> M.OsmanHadid</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>



<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
    	font-family: 'Poppins', sans-serif;
	}
	body{
		background-color: black;
		height: 4000px;
	}
	h1{
		font-size: 100px;
		color: black;
		font-family: tahoma;
	}
	img{
		width: 50%;
		height: 400px;
	}
	td,tr{
		font-size: 30px;
	}

</style>